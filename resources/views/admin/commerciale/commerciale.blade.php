@extends('layouts.app')
@section('sidebar')
    @include('layouts.sidebar.commerciale')
@endsection
@section('container')
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Commerciale</h1>
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->

        <div class="flex flex-wrap">
            <a href="{{ route('prospect.create') }}" class="px-5 py-4 mb-2 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple" id="delete-btn">
                Ajouter un commerciale
            </a>

            @if ($commerciale->isEmpty())
                <div class="flex justify-center items-center p-3">
                    Aucune Donné sur vos commerciaux!
                </div>
            @else
                <div class="overflow-scroll">
                    <livewire:user-datatable dates="created_at|l jS F Y \à H\hi" hideable="select" exportable />
                </div>
            @endif

        </div>

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 my-8 mx-4">
        </div>
    </main>
@stop

