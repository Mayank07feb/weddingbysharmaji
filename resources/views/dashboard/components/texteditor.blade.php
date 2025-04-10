<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Text Editor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <style>
        /* Custom scrollbar */
        #editor::-webkit-scrollbar {
            width: 10px;
        }

        #editor::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        #editor::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        #editor::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* New modal styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
        }

        /* Added list styling */
        #editor ul,
        #editor ol {
            padding-left: 30px;
            list-style-position: outside;
        }

        #editor ul {
            list-style-type: disc;
        }

        #editor ol {
            list-style-type: decimal;
        }

        /* New dark mode styles */
        body.dark-mode {
            background-color: #1a202c;
            color: #e2e8f0;
        }

        body.dark-mode .modal-content {
            background-color: #2d3748;
            color: #e2e8f0;
        }

        body.dark-mode #editor {
            background-color: #2d3748;
            color: #e2e8f0;
            border-color: #4a5568;
        }

        /* Autocomplete suggestions */
        .autocomplete-suggestions {
            position: absolute;
            border: 1px solid #ddd;
            max-height: 200px;
            overflow-y: auto;
            background: white;
            z-index: 10;
        }

        .autocomplete-suggestion {
            padding: 10px;
            cursor: pointer;
        }

        .autocomplete-suggestion:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg">
        <!-- Advanced Toolbar -->
        <div class="bg-gray-200 p-4 flex flex-wrap items-center space-x-2">
            <!-- File Operations -->
            <div class="flex space-x-1">
                <button onclick="newDocument()" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"
                    title="New Document">
                    <span class="material-icons">note_add</span>
                </button>
                <label class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 cursor-pointer"
                    title="Upload File">
                    <input type="file" accept=".txt,.html,.doc" onchange="uploadFile(event)" class="hidden" />
                    <span class="material-icons">upload_file</span>
                </label>
            </div>

            <!-- Text Formatting -->
            <div class="flex space-x-1">
                <button onclick="formatText('bold')" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"
                    title="Bold">
                    <span class="material-icons">format_bold</span>
                </button>
                <button onclick="formatText('italic')"
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600" title="Italic">
                    <span class="material-icons">format_italic</span>
                </button>
                <button onclick="formatText('underline')"
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600" title="Underline">
                    <span class="material-icons">format_underlined</span>
                </button>
                <button onclick="formatText('strikeThrough')"
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600" title="Strikethrough">
                    <span class="material-icons">strikethrough_s</span>
                </button>
            </div>

            <!-- Advanced Styling -->
            <div class="flex space-x-2">
                <select onchange="changeFontFamily(this.value)" class="bg-white border rounded px-2 py-1"
                    title="Font Family">
                    <option value="Arial">Arial</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Courier New">Courier New</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Helvetica">Helvetica</option>
                </select>

                <select onchange="changeFontSize(this.value)" class="bg-white border rounded px-2 py-1"
                    title="Font Size">
                    <option value="1">8</option>
                    <option value="2">10</option>
                    <option value="3">12</option>
                    <option value="4" selected>14</option>
                    <option value="5">18</option>
                    <option value="6">24</option>
                    <option value="7">36</option>
                </select>

                <input type="color" onchange="setTextColor(this.value)" class="w-10 h-10 border rounded"
                    title="Text Color">
                <input type="color" onchange="setBackgroundColor(this.value)" class="w-10 h-10 border rounded"
                    title="Highlight Color">
            </div>

            <!-- Alignment and List Options -->
            <div class="flex space-x-1">
                <button onclick="setAlignment('left')"
                    class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600" title="Align Left">
                    <span class="material-icons">format_align_left</span>
                </button>
                <button onclick="setAlignment('center')"
                    class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600" title="Align Center">
                    <span class="material-icons">format_align_center</span>
                </button>
                <button onclick="setAlignment('right')"
                    class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600" title="Align Right">
                    <span class="material-icons">format_align_right</span>
                </button>

                <button onclick="createList('insertUnorderedList')"
                    class="bg-purple-500 text-white px-3 py-1 rounded hover:bg-purple-600" title="Bullet List">
                    <span class="material-icons">format_list_bulleted</span>
                </button>
                <button onclick="createList('insertOrderedList')"
                    class="bg-purple-500 text-white px-3 py-1 rounded hover:bg-purple-600" title="Numbered List">
                    <span class="material-icons">format_list_numbered</span>
                </button>
            </div>

            <!-- Advanced Tools -->
            <div class="flex space-x-1">
                <button onclick="insertTable()" class="bg-indigo-500 text-white px-3 py-1 rounded hover:bg-indigo-600"
                    title="Insert Table">
                    <span class="material-icons">table_chart</span>
                </button>
                <button onclick="insertHyperlink()" class="bg-teal-500 text-white px-3 py-1 rounded hover:bg-teal-600"
                    title="Insert Hyperlink">
                    <span class="material-icons">link</span>
                </button>
                <button onclick="insertSpecialCharacter()"
                    class="bg-pink-500 text-white px-3 py-1 rounded hover:bg-pink-600" title="Special Characters">
                    <span class="material-icons">text_fields</span>
                </button>
            </div>

            <!-- New Advanced Features Toolbar -->
            <div class="flex space-x-1 mt-2">
                <!-- Translation and Language Tools -->
                <button onclick="openTranslationModal()"
                    class="bg-purple-500 text-white px-3 py-1 rounded hover:bg-purple-600" title="Translate Text">
                    <span class="material-icons">translate</span>
                </button>
                <button onclick="speakText()" class="bg-teal-500 text-white px-3 py-1 rounded hover:bg-teal-600"
                    title="Text to Speech">
                    <span class="material-icons">record_voice_over</span>
                </button>

                <!-- Text Analysis Tools -->
                <button onclick="analyzeReadability()"
                    class="bg-indigo-500 text-white px-3 py-1 rounded hover:bg-indigo-600"
                    title="Readability Analysis">
                    <span class="material-icons">analytics</span>
                </button>
                <button onclick="findReplaceTool()" class="bg-pink-500 text-white px-3 py-1 rounded hover:bg-pink-600"
                    title="Find and Replace">
                    <span class="material-icons">find_replace</span>
                </button>

                <!-- Writing Enhancement -->
                <button onclick="checkGrammar()" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600"
                    title="Grammar Check">
                    <span class="material-icons">spellcheck</span>
                </button>
                <button onclick="addMarkdown()" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"
                    title="Markdown Formatting">
                    <span class="material-icons">code</span>
                </button>

                <!-- New Advanced Features -->
                <button onclick="toggleDarkMode()" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600"
                    title="Toggle Dark Mode">
                    <span class="material-icons">dark_mode</span>
                </button>
                <button onclick="openPomodoroModal()" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                    title="Pomodoro Timer">
                    <span class="material-icons">timer</span>
                </button>
                <button onclick="generateWordCloud()"
                    class="bg-purple-500 text-white px-3 py-1 rounded hover:bg-purple-600"
                    title="Generate Word Cloud">
                    <span class="material-icons">bubble_chart</span>
                </button>
                <button onclick="openAIAssistantModal()"
                    class="bg-teal-500 text-white px-3 py-1 rounded hover:bg-teal-600" title="AI Writing Assistant">
                    <span class="material-icons">psychology</span>
                </button>
            </div>
        </div>

        <!-- Text Editor Area -->
        <div id="editor" contenteditable="true"
            class="p-4 min-h-[600px] max-h-[800px] overflow-y-auto border border-gray-300 focus:outline-none focus:border-blue-500 text-base">
            Start typing your document here...
        </div>

        <!-- Existing Modals -->
        <!-- Translation Modal -->
        <div id="translationModal" class="modal">
            <div class="modal-content">
                <h2 class="text-xl font-bold mb-4">Translate Text</h2>
                <select id="sourceLang" class="w-full mb-2 border rounded p-2">
                    <option value="auto">Detect Language</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="zh">Chinese</option>
                </select>
                <select id="targetLang" class="w-full mb-2 border rounded p-2">
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="zh">Chinese</option>
                </select>
                <div class="flex space-x-2 mt-4">
                    <button onclick="translateText()"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Translate</button>
                    <button onclick="closeModal('translationModal')"
                        class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                </div>
            </div>
        </div>

        <!-- Readability Analysis Modal -->
        <div id="readabilityModal" class="modal">
            <div class="modal-content">
                <h2 class="text-xl font-bold mb-4">Readability Analysis</h2>
                <div id="readabilityResults" class="text-base"></div>
                <button onclick="closeModal('readabilityModal')"
                    class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Close</button>
            </div>
        </div>

        <!-- New Modals -->
        <!-- Pomodoro Timer Modal -->
        <div id="pomodoroModal" class="modal">
            <div class="modal-content">
                <h2 class="text-xl font-bold mb-4">Pomodoro Timer</h2>
                <div id="pomodoroTimer" class="text-4xl text-center mb-4">25:00</div>
                <div class="flex justify-center space-x-2">
                    <button onclick="startPomodoro()" class="bg-green-500 text-white px-4 py-2 rounded">Start</button>
                    <button onclick="pausePomodoro()"
                        class="bg-yellow-500 text-white px-4 py-2 rounded">Pause</button>
                    <button onclick="resetPomodoro()" class="bg-red-500 text-white px-4 py-2 rounded">Reset</button>
                </div>
                <div class="mt-4">
                    <label class="block mb-2">Session Length (minutes):</label>
                    <input type="number" id="pomodoroLength" value="25" min="1" max="60"
                        class="w-full border rounded p-2">
                </div>
                <button onclick="closeModal('pomodoroModal')"
                    class="bg-gray-500 text-white px-4 py-2 rounded mt-4">Close</button>
            </div>
        </div>

        <!-- AI Writing Assistant Modal -->
        <div id="aiAssistantModal" class="modal">
            <div class="modal-content">
                <h2 class="text-xl font-bold mb-4">AI Writing Assistant</h2>
                <select id="aiAssistantType" class="w-full mb-2 border rounded p-2">
                    <option value="expand">Expand Text</option>
                    <option value="summarize">Summarize</option>
                    <option value="rephrase">Rephrase</option>
                    <option value="tone">Change Tone</option>
                </select>
                <textarea id="aiAssistantPrompt" class="w-full border rounded p-2 min-h-[100px] mb-2"
                    placeholder="Enter text or context for AI assistance"></textarea>
                <div class="flex space-x-2">
                    <button onclick="processAIAssistance()"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Generate</button>
                    <button onclick="closeModal('aiAssistantModal')"
                        class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                </div>
                <div id="aiAssistantResults" class="mt-4 p-2 border rounded"></div>
            </div>
        </div>

        <!-- Word Cloud Modal -->
        <div id="wordCloudModal" class="modal">
            <div class="modal-content">
                <h2 class="text-xl font-bold mb-4">Word Cloud</h2>
                <div id="wordCloudContainer" class="w-full h-[400px] border rounded"></div>
                <button onclick="closeModal('wordCloudModal')"
                    class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Close</button>
            </div>
        </div>

        <!-- Document Operations -->
        <div class="p-4 flex space-x-2">
            <button onclick="saveDocument()"
                class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 flex items-center">
                <span class="material-icons mr-2">save</span>Save
            </button>
            <button onclick="clearDocument()"
                class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 flex items-center">
                <span class="material-icons mr-2">delete</span>Clear
            </button>
            <button onclick="downloadDocument()"
                class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 flex items-center">
                <span class="material-icons mr-2">download</span>Download
            </button>
            <button onclick="printDocument()"
                class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600 flex items-center">
                <span class="material-icons mr-2">print</span>Print
            </button>
        </div>

        <!-- Word Count and Character Count -->
        <div class="p-4 text-gray-600 flex justify-between">
            <div id="wordCount">Words: 0</div>
            <div id="characterCount">Characters: 0</div>
        </div>
    </div>

    <script>
        const editor = document.getElementById('editor');
        const wordCountDisplay = document.getElementById('wordCount');
        const characterCountDisplay = document.getElementById('characterCount');

        function updateWordAndCharCount() {
            const text = editor.innerText.trim();
            const words = text.length > 0 ? text.split(/\s+/).length : 0;
            const characters = text.replace(/\s/g, '').length;

            wordCountDisplay.textContent = `Words: ${words}`;
            characterCountDisplay.textContent = `Characters: ${characters}`;
        }

        function newDocument() {
            if (confirm('Create a new document? Unsaved changes will be lost.')) {
                editor.innerHTML = '';
                updateWordAndCharCount();
            }
        }

        function uploadFile(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                editor.innerHTML = e.target.result;
                updateWordAndCharCount();
            };
            reader.readAsText(file);
        }

        function formatText(type) {
            document.execCommand(type, false, null);
        }

        function changeFontFamily(font) {
            document.execCommand('fontName', false, font);
        }

        function changeFontSize(size) {
            document.execCommand('fontSize', false, size);
        }

        function setTextColor(color) {
            document.execCommand('foreColor', false, color);
        }

        function setBackgroundColor(color) {
            document.execCommand('hiliteColor', false, color);
        }

        function setAlignment(align) {
            document.execCommand('justify' + align.charAt(0).toUpperCase() + align.slice(1), false, null);
        }

        function createList(type) {
            document.execCommand(type, false, null);
        }

        function insertTable() {
            const rows = prompt('Number of rows:', '3');
            const cols = prompt('Number of columns:', '3');

            if (rows && cols) {
                let table = '<table border="1" style="width:100%; border-collapse: collapse;">';
                for (let i = 0; i < rows; i++) {
                    table += '<tr>';
                    for (let j = 0; j < cols; j++) {
                        table += '<td style="border: 1px solid black; padding: 8px;">Cell</td>';
                    }
                    table += '</tr>';
                }
                table += '</table>';
                document.execCommand('insertHTML', false, table);
            }
        }

        function insertHyperlink() {
            const url = prompt('Enter URL:', 'https://');
            const text = prompt('Enter link text:', 'Click here');

            if (url && text) {
                const link = `<a href="${url}" target="_blank">${text}</a>`;
                document.execCommand('insertHTML', false, link);
            }
        }

        function insertSpecialCharacter() {
            const chars = '© ® ™ € £ ¥ § ¶ † ‡ • … ';
            const selectedChar = prompt('Select a special character:\n' + chars, '©');

            if (selectedChar) {
                document.execCommand('insertText', false, selectedChar);
            }
        }

        function saveDocument() {
            const content = editor.innerHTML;
            localStorage.setItem('savedDocument', content);
            alert('Document saved successfully!');
        }

        function clearDocument() {
            if (confirm('Are you sure you want to clear the document?')) {
                editor.innerHTML = '';
                updateWordAndCharCount();
            }
        }

        function downloadDocument() {
            const content = editor.innerHTML;
            const blob = new Blob([content], {
                type: 'text/html'
            });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'document.html';
            link.click();
        }

        function printDocument() {
            const printContents = editor.innerHTML;
            const originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

        // Previous functions remain the same...

        function openTranslationModal() {
            document.getElementById('translationModal').style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function translateText() {
            const sourceLang = document.getElementById('sourceLang').value;
            const targetLang = document.getElementById('targetLang').value;
            const text = editor.innerText;

            // Note: In a real implementation, this would use a translation API
            alert(`Translating from ${sourceLang} to ${targetLang}. 
                    Simulated translation of: "${text.substring(0, 50)}..."`);

            closeModal('translationModal');
        }

        function speakText() {
            const text = editor.innerText;
            if ('speechSynthesis' in window) {
                const utterance = new SpeechSynthesisUtterance(text);
                window.speechSynthesis.speak(utterance);
            } else {
                alert('Text-to-Speech not supported in this browser.');
            }
        }

        function analyzeReadability() {
            const text = editor.innerText;

            // Simple readability estimation (very basic implementation)
            const words = text.split(/\s+/).length;
            const sentences = text.split(/[.!?]+/).length;
            const averageWordLength = text.replace(/\s/g, '').length / words;

            const readabilityResults = `
                Words: ${words}
                Sentences: ${sentences}
                Average Word Length: ${averageWordLength.toFixed(2)}
                Estimated Complexity: ${
                    averageWordLength > 6 ? 'Advanced' : 
                    averageWordLength > 5 ? 'Intermediate' : 'Basic'
                }
            `;

            const resultsDiv = document.getElementById('readabilityResults');
            resultsDiv.innerHTML = `<pre>${readabilityResults}</pre>`;
            document.getElementById('readabilityModal').style.display = 'flex';
        }

        function findReplaceTool() {
            const findText = prompt('Find what:');
            if (findText) {
                const replaceText = prompt('Replace with:');
                if (replaceText !== null) {
                    const content = editor.innerHTML;
                    const newContent = content.replace(new RegExp(findText, 'g'), replaceText);
                    editor.innerHTML = newContent;
                    updateWordAndCharCount();
                }
            }
        }

        function checkGrammar() {
            const text = editor.innerText;
            // This would normally use an external grammar checking API
            const potentialErrors = [
                'Possible run-on sentence',
                'Check punctuation',
                'Potential passive voice'
            ];

            alert('Simulated Grammar Check:\n' + potentialErrors.join('\n'));
        }

        function addMarkdown() {
            const markdownOptions = [
                '# Heading 1',
                '## Heading 2',
                '**Bold Text**',
                '*Italic Text*',
                '> Blockquote',
                '`Inline Code`'
            ];

            const selectedMarkdown = prompt('Select Markdown Format:\n' + markdownOptions.join('\n'));

            if (selectedMarkdown) {
                document.execCommand('insertText', false, selectedMarkdown);
            }
        }

        // New functions for additional features
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        }

        // Pomodoro Timer Functionality
        let pomodoroTimer;
        let pomodoroTime = 25 * 60;
        let pomodoroRunning = false;

        function startPomodoro() {
            if (!pomodoroRunning) {
                const length = document.getElementById('pomodoroLength').value;
                pomodoroTime = length * 60;

                pomodoroTimer = setInterval(() => {
                    const minutes = Math.floor(pomodoroTime / 60);
                    const seconds = pomodoroTime % 60;

                    document.getElementById('pomodoroTimer').textContent =
                        `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                    if (pomodoroTime <= 0) {
                        clearInterval(pomodoroTimer);
                        alert('Pomodoro session complete!');
                        pomodoroRunning = false;
                    } else {
                        pomodoroTime--;
                    }
                }, 1000);

                pomodoroRunning = true;
            }
        }

        function pausePomodoro() {
            clearInterval(pomodoroTimer);
            pomodoroRunning = false;
        }

        function resetPomodoro() {
            clearInterval(pomodoroTimer);
            const length = document.getElementById('pomodoroLength').value;
            pomodoroTime = length * 60;
            document.getElementById('pomodoroTimer').textContent =
                `${length.toString().padStart(2, '0')}:00`;
            pomodoroRunning = false;
        }

        function openPomodoroModal() {
            document.getElementById('pomodoroModal').style.display = 'flex';
        }

        // AI Writing Assistant Simulation
        function processAIAssistance() {
            const type = document.getElementById('aiAssistantType').value;
            const prompt = document.getElementById('aiAssistantPrompt').value;
            const resultsDiv = document.getElementById('aiAssistantResults');

            if (!prompt) {
                alert('Please enter text or context');
                return;
            }

            // Simulated AI assistance responses
            const responses = {
                'expand': `Expanded text based on: "${prompt}". This would typically provide a more detailed and elaborate version of the input text.`,
                'summarize': `Summary of: "${prompt}". This would condense the key points into a concise overview.`,
                'rephrase': `Rephrased text: "${prompt}". This would rewrite the text using different words while maintaining the original meaning.`,
                'tone': `Tone-adjusted text for: "${prompt}". This would modify the writing style to match a specific tone (formal, casual, etc.).`
            };

            resultsDiv.textContent = responses[type];
        }

        function openAIAssistantModal() {
            document.getElementById('aiAssistantModal').style.display = 'flex';
        }

        // Word Cloud Generator (Simplified)
        function generateWordCloud() {
            const text = editor.innerText;

            // Simple word frequency calculation
            const words = text.toLowerCase().match(/\b(\w+)\b/g);
            const wordCounts = {};

            words.forEach(word => {
                // Exclude very common words
                const stopWords = ['the', 'a', 'an', 'and', 'or', 'but', 'in', 'on', 'at', 'to', 'for'];
                if (!stopWords.includes(word)) {
                    wordCounts[word] = (wordCounts[word] || 0) + 1;
                }
            });

            // Sort words by frequency
            const sortedWords = Object.entries(wordCounts)
                .sort((a, b) => b[1] - a[1])
                .slice(0, 20);

            // Display in word cloud modal
            const container = document.getElementById('wordCloudContainer');
            container.innerHTML = sortedWords.map(([word, count]) =>
                `<span style="font-size:${Math.min(count * 3, 36)}px; margin:5px;">${word}</span>`
            ).join('');

            document.getElementById('wordCloudModal').style.display = 'flex';
        }

        // Event Listeners
        editor.addEventListener('input', updateWordAndCharCount);

        // Load saved document and dark mode preference on startup
        window.onload = function() {
            const savedContent = localStorage.getItem('savedDocument');
            if (savedContent) {
                editor.innerHTML = savedContent;
                updateWordAndCharCount();
            }

            const savedDarkMode = localStorage.getItem('darkMode');
            if (savedDarkMode === 'true') {
                document.body.classList.add('dark-mode');
            }
        }
    </script>
</body>
