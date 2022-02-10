@include('layouts.header')
@yield('sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button class="relative w-1/2 bg-white cta-btn font-semibold  flex flex-col items-center justify-end">
                     <div style="margin-right: -180px;" class="my-2">{{ Auth::user()->name }}</div>
                     <div class="hidden">Role : {{ Auth::user()->role_name }}</div>

                </button>
                <button @click="isOpen = !isOpen" class="realtive flex justify-center items-center z-200 w-12 h-12 rounded-full overflow-hidden border-4 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 cta-btn" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                      </svg>
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>

                <div x-show="isOpen" class="absolute w-32 z-500 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            @yield('container')
            @include('layouts.footer')
        </div>


@include('layouts.script')
