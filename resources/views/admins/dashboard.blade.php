<x-admin-component>
    <div class="p-6">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row gap-6 items-center justify-between mb-8">
            <!-- Time/Date Card -->
            <div class="card w-full lg:w-64 p-6 rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <i class="fas fa-clock text-yellow-500 text-xl"></i>
                    <span id="day"
                        class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide"></span>
                </div>
                <p id="clock" class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-2 tabular-nums"></p>
                <p id="date" class="text-base text-gray-500 dark:text-gray-400"></p>
            </div>

            <!-- Greeting Text -->
            <div class="text-center lg:text-right">
                <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 dark:text-gray-100">
                    Halo <span
                        class="bg-clip-text">{{ strtoupper(Auth::user()->name) }}</span>,
                </h1>
                <p class="text-xl lg:text-2xl font-semibold text-gray-600 dark:text-gray-300 mt-2">
                    Selamat Bekerja!
                </p>
                <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-md">
                    Semoga hari Anda penuh dengan produktivitas dan pencapaian yang membanggakan.
                </p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card p-6 rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Tugas Selesai</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-gray-100 mt-2">24</p>
                    </div>
                    <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30">
                        <svg width="24" height="24" fill="#2ec27e" viewBox="-211.2 -211.2 2342.40 2342.40"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M1827.701 303.065 698.835 1431.801 92.299 825.266 0 917.564 698.835 1616.4 1919.869 395.234z"
                                    fill-rule="evenodd"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="text-green-600 dark:text-green-400 font-medium">+12%</span>
                        <span class="ml-2">dari minggu lalu</span>
                    </div>
                </div>
            </div>

            <div class="card p-6 rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Dalam Proses</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-gray-100 mt-2">8</p>
                    </div>
                    <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30">
                        <svg fill="#3584e4" height="24px" width="24px" version="1.1" id="Icons"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-2.24 -2.24 36.48 36.48" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path d="M16,2c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1s1-0.4,1-1V3C17,2.4,16.6,2,16,2z">
                                    </path>
                                    <path
                                        d="M7.5,6.1c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l3.5,3.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L7.5,6.1 z">
                                    </path>
                                    <path d="M9,16c0-0.6-0.4-1-1-1H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h5C8.6,17,9,16.6,9,16z">
                                    </path>
                                    <path
                                        d="M9.6,20.9l-3.5,3.5c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l3.5-3.5c0.4-0.4,0.4-1,0-1.4 S10,20.6,9.6,20.9z">
                                    </path>
                                    <path
                                        d="M16,23c-0.6,0-1,0.4-1,1v5c0,0.6,0.4,1,1,1s1-0.4,1-1v-5C17,23.4,16.6,23,16,23z">
                                    </path>
                                    <path
                                        d="M22.4,20.9c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l3.5,3.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4 L22.4,20.9z">
                                    </path>
                                    <path d="M29,15h-5c-0.6,0-1,0.4-1,1s0.4,1,1,1h5c0.6,0,1-0.4,1-1S29.6,15,29,15z">
                                    </path>
                                    <path
                                        d="M21.7,11.3c0.3,0,0.5-0.1,0.7-0.3l3.5-3.5c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-3.5,3.5c-0.4,0.4-0.4,1,0,1.4 C21.1,11.2,21.4,11.3,21.7,11.3z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="text-blue-600 dark:text-blue-400 font-medium">+2</span>
                        <span class="ml-2">dari kemarin</span>
                    </div>
                </div>
            </div>

            <div class="card p-6 rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Tenggat Waktu</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-gray-100 mt-2">3</p>
                    </div>
                    <div class="p-3 rounded-full bg-red-100 dark:bg-red-900/30">
                        <svg viewBox="0 0 24.00 24.00" width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg"
                            stroke="#e01b24">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 16.99V17M12 7V14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="#e01b24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="text-red-600 dark:text-red-400 font-medium">Segera</span>
                        <span class="ml-2">perlu perhatian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        .card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .dark .card {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .dark .card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.4), 0 4px 6px -2px rgba(0, 0, 0, 0.3);
        }
    </style>

    <script>
        // Update clock and date
        function updateDateTime() {
            const now = new Date();

            // Format time
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;

            // Format date
            const optionsDate = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            document.getElementById('date').textContent = now.toLocaleDateString('id-ID', optionsDate);

            // Format day
            const optionsDay = {
                weekday: 'long'
            };
            document.getElementById('day').textContent = now.toLocaleDateString('id-ID', optionsDay);
        }

        // Initial call
        updateDateTime();

        // Update every second
        setInterval(updateDateTime, 1000);
    </script>
</x-admin-component>
