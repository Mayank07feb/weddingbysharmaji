    <!-- Book Now Button -->
    <button id="openBookNowModal"
        class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-opacity-90 transition">
        Book Now
    </button>

    <!-- Book Now Modal -->
    <div id="bookNowModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
            <!-- Close Button -->
            <button id="closeBookNowModal"
                class="absolute top-3 right-3 text-gray-600 hover:text-orange-600 text-2xl font-bold">&times;</button>

            <!-- Modal Content -->
            <h2 class="text-xl font-bold text-orange-600 mb-4">Book Your Session</h2>

            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" name="date"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600"
                        required>
                </div>
                <button type="submit"
                    class="w-full bg-orange-600 text-white py-2 rounded hover:bg-opacity-90 transition">
                    Confirm Booking
                </button>
            </form>
        </div>
    </div>

    <!-- Modal Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openModalBtn = document.getElementById("openBookNowModal");
            const closeModalBtn = document.getElementById("closeBookNowModal");
            const modal = document.getElementById("bookNowModal");

            openModalBtn.addEventListener("click", function () {
                modal.classList.remove("hidden");
            });

            closeModalBtn.addEventListener("click", function () {
                modal.classList.add("hidden");
            });

            window.addEventListener("click", function (e) {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });

            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape") {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>

