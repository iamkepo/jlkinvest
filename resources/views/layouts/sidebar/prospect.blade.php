<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="#" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            <img src="{{ asset('img/logo.jpg') }}" class="object-cover" alt="logo">
        </a>
        <a href="#" class="mt-3 text-white text-2xl flex justify-center logo font-semibold uppercase">
            invest
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/" class="flex items-center text-white opacity-75 hover:opacity-100  py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('prospect.index') }}" class="flex items-center text-white active-nav-link  py-4 pl-6 nav-item">
            <i class="fas fa-users mr-3"></i>
            Prospect
        </a>



        <hr class="border-b-2 border-gray-400 my-8 mx-4">
        @if ((Auth::user()->role_name) == 'admin')
            <a href="{{ route('commerciale.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-tie mr-3"></i>
                Commerciale
            </a>
        @endif

        {{-- <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
    </nav>
    {{-- <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Upgrade to Pro!
    </a> --}}
</aside>
