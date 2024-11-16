<nav class="bg-cyan-800 sticky top-0 z-10" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo dan nama brand -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-8" src="elix.jpeg" alt="Your Company">
                    <span class="ml-2 text-white text-lg font-bold">ELIX BOOK</span>
                </div>
            </div>

            <!-- Navigasi tengah -->
            <div class="hidden md:flex justify-center flex-grow">
                <div class="flex space-x-4">
                    <a href="{{ url('/home') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
                            {{ Request::is('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
                        aria-current="page">Home</a>

                    <a href="{{ url('/history') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium 
                            {{ Request::is('history') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        History
                    </a>
                </div>
            </div>
            {{-- <!-- Tombol logout -->
            <div class="hidden md:block">
                <a href="{{ route('login') }}">
                    <button class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-red-600">Log
                        Out</button>
                </a>
            </div> --}}
            @if (Auth::check())
                <div class="hidden md:block">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-red-600">Log
                            Out</button>
                    </form>
                </div>
            @endif

            <!-- Tombol menu untuk tampilan mobile -->
            <div class="-mr-2 flex md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="{{ url('/home') }}"
                class="block rounded-md px-3 py-2 text-base font-medium {{ Request::is('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
                aria-current="page">Home</a>
            <a href="{{ url('/history') }}"
                class="block rounded-md px-3 py-2 text-base font-medium {{ Request::is('history') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">History</a>
            {{-- <a href="#"
                class="block rounded-md bg-gray-700 px-3 py-2 text-base font-medium text-white hover:bg-red-600">
                Log Out
            </a> --}}
            @if (Auth::check())
                <div class="md:block">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-red-600">Log
                            Out</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</nav>
