<x-admin-component>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 w-screen">
        <div class="flex flex-col md:flex-row mt-5 gap-6 mb-8 items-center">
            <!-- Time/Date Card -->
            <div class="w-full md:w-auto p-6 border-2 border-yellow-500 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 dark:bg-gray-800 dark:border-yellow-600">
                <p id="day" class="text-xl text-gray-600 dark:text-gray-300 mb-2 font-medium"></p>
                <p id="clock" class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-3 tabular-nums"></p>
                <p id="date" class="text-base text-gray-500 dark:text-gray-400"></p>
            </div>

            <!-- Greeting Text -->
            <div class="w-full md:w-auto md:ml-auto text-center md:text-right">
                <p class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-100">
                    Halo <span class="text-yellow-500">{{ strtoupper(Auth::user()->name) }}</span>,
                </p>
                <p class="text-xl md:text-2xl font-semibold text-gray-600 dark:text-gray-300 mt-1">
                    Selamat Bekerja!
                </p>
            </div>
        </div>
    </div>
</x-admin-component>

<script>
    function updateDateTime() {
        const now = new Date();
        
        // FORMAT TIME (HH:MM:SS)
        const timeString = now.toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        });
        document.getElementById('clock').textContent = timeString;
        
        // FORMAT DAY
        const dayName = now.toLocaleDateString('id-ID', { weekday: 'long' });
        document.getElementById('day').textContent = dayName;
        
        // FORMAT DATE
        const dateString = now.toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        document.getElementById('date').textContent = dateString;
    }
    
    // Update setiap detik
    setInterval(updateDateTime, 1000);
    
    // Initial call
    updateDateTime();
</script>