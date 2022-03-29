<!DOCTYPE html>
<html lang="fr">
    @include('layouts.header')
    <body class="bg-gray-100 font-family-karla flex">
    @include('layouts.sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('layouts.navbar')

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            @yield('container')
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.script')

    </body>
</html>

