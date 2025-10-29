<div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false"
    class="fixed inset-0 z-20 bg-black bg-opacity-50 transition-opacity duration-300 lg:hidden"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-50" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-50" x-transition:leave-end="opacity-0">
</div>

<div x-cloak
    class="fixed inset-y-0 left-0 z-20 w-64 overflow-y-auto transition-all duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0"
    :class="{ 'translate-x-0 ease-out shadow-xl': sidebarOpen, '-translate-x-full ease-in': !sidebarOpen }">

    <div class="flex items-center justify-center mt-8 transition-all duration-300 hover:opacity-80">
        <div class="flex items-center">
            <span
                class="mx-2 text-2xl font-semibold text-white transition-all duration-300 hover:text-gray-300">Dashboard</span>
        </div>
    </div>
    <nav class="mt-10 overflow-y-auto" style="scrollbar-width: thin;">
        <!-- Dashboard Link -->

        <!-- Data Sekolah Link -->
        <a class="flex items-center px-6 py-2 mt-4 transition-all duration-200 ease-in-out transform {{ Route::currentRouteNamed('admin.dataSekolah') ? 'text-gray-100 bg-gray-700 bg-opacity-25 scale-105' : 'text-gray-500 hover:scale-105' }} hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l6.16-3.422a12.082 12.082 0 01.838 3.04L12 19.5l-6.16-5.882a12.082 12.082 0 01.838-3.04L12 14z" />
            </svg>
            <span class="mx-3">Manage Data Sekolah</span>
        </a>

        <!-- Data Tahun Ajaran Link -->
        <a class="flex items-center px-6 py-2 mt-4 transition-all duration-200 ease-in-out transform {{ Route::currentRouteNamed('admin.tahunAjaran') ? 'text-gray-100 bg-gray-700 bg-opacity-25 scale-105' : 'text-gray-500 hover:scale-105' }} hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="#}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18h12V6H6v12z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9h12M6 12h12" />
            </svg>
            <span class="mx-3">Data Tahun Ajaran</span>
        </a>

        <!-- Data Kelas Link -->
        <a class="flex items-center px-6 py-2 mt-4 transition-all duration-200 ease-in-out transform {{ Route::currentRouteNamed('admin.dataKelas') ? 'text-gray-100 bg-gray-700 bg-opacity-25 scale-105' : 'text-gray-500 hover:scale-105' }} hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="#">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <span class="mx-3">Manage Data Kelas</span>
        </a>

        <!-- Dropdowns -->
        <div x-data="{ wargaOpen: false, configOpen: false }">
            <!-- Warga Sekolah Dropdown -->
            <button @click="wargaOpen = !wargaOpen"
                class="flex items-center w-full px-6 py-2 mt-4 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="mx-3">Warga Sekolah</span>
                <svg class="w-5 h-5 ml-auto transition-transform duration-200" :class="{ 'rotate-180': wargaOpen }"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="wargaOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95" class="pl-8">
                <!-- Dropdown items -->
                <a href="#"
                    class="flex items-center px-6 py-2 mt-2 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Route::currentRouteNamed('admin.dataSiswa') ? 'text-gray-100' : '' }}">
                    <span>Data Siswa</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-2 mt-2 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Route::currentRouteNamed('admin.dataGuru') ? 'text-gray-100' : '' }}">
                    <span>Data Guru</span>
                </a>
            </div>

            <!-- Configuration Dropdown -->
            <button @click="configOpen = !configOpen"
                class="flex items-center w-full px-6 py-2 mt-4 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="mx-3">Configurations</span>
                <svg class="w-5 h-5 ml-auto transition-transform duration-200" :class="{ 'rotate-180': configOpen }"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="configOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95" class="pl-8">
                <!-- Dropdown items -->
                <a href="#"
                    class="flex items-center px-6 py-2 mt-2 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Route::currentRouteNamed('admin.users.index') ? 'text-gray-100' : '' }}">
                    <span>Users</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-2 mt-2 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Route::currentRouteNamed('admin.roles.index') ? 'text-gray-100' : '' }}">
                    <span>Roles</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-2 mt-2 text-gray-500 transition-all duration-200 ease-in-out hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Route::currentRouteNamed('admin.permissions.index') ? 'text-gray-100' : '' }}">
                    <span>Permissions</span>
                </a>
            </div>
        </div>
    </nav>
    {{-- <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>

                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown> --}}
</div>
