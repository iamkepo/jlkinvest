<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="#" class="text-white text-3xl flex font-semibold uppercase">
            jlkinvest
        </a>
        <div class=" text-white font-semibold uppercase">
            <div class="text-sm my-2 elipsis">{{ Auth::user()->name }}</div>
            <div class="text-xs">{{ Auth::user()->role->name }}</div>
        </div>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-2"></i>
            Dashboard
        </a>
        <a href="{{ route('planning.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ setMenuActive('planning.index') }}">
            <i class="fas fa-calendar mr-2"></i>
            Plannings
        </a>
        <a href="{{ route('prospect.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ setMenuActive('prospect.index') }}">
            <i class="fas fa-address-book mr-2"></i>
            Prospects
        </a>
        <a href="{{ route('activite.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ setMenuActive('activite.index') }}">
            <i class="fas fa-book mr-2"></i>
            Activités
        </a>
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-dollar-sign mr-2"></i>
            Transaction
        </a>
        {{-- <hr class="border-b-2 border-gray-400 my-8 mx-4"> --}}
        @can("Administrateur")
        <a href="{{ route('admin.user.index') }}" class="flex items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ setMenuActive('admin.user.index') }}">
            <i class="fas fa-user-tie mr-2"></i>
            Utilisateurs
        </a>
        <a href="{{ route('admin.produit.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ setMenuActive('admin.produit.index') }}">
            <i class="fas fa-archive mr-2"></i>
            Produits
        </a>
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-balance-scale mr-2"></i>
            Commissions
        </a>
        @endcan
    </nav>

</aside>
