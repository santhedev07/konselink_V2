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
            <x-dropdown align="right" width="48">
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
            </x-dropdown>
        </div>
    </div>
</div>
