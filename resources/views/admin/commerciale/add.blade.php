@extends('layouts.app')
@section('sidebar')
    @include('layouts.sidebar.commerciale')
@endsection
@section('container')
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Ajouter un commerciale</h1>
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        <!--Console Content-->

        <div class="flex flex-wrap">
            <div class="leading-loose max-w-lg">
                <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('commerciale.store') }}" >
                    @csrf
                    <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('name') is-invalid @enderror" id="name" name="name" type="text" required="" placeholder="Designation"  value="{{ old('name') }}" aria-label="Name">
                        @error('name')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Email</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded @error('email') is-invalid @enderror" id="email" name="email" type="text" required="" placeholder="Email" aria-label="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="Block text-sm text-gray-600" for="tel">Phone</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('tel') is-invalid @enderror" id="tel" name="tel" type="tel"  placeholder="Tel" aria-label="tel" value="{{ old('tel') }}">
                        @error('tel')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="Block text-sm text-gray-600" for="ville">Address</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('ville') is-invalid @enderror" id="ville" name="ville" type="text" required="" placeholder="Ville" aria-label="ville" value="{{ old('ville') }}">
                        @error('ville')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="hidden text-sm text-gray-600" for="pays">Country</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('pays') is-invalid @enderror" id="pays" name="pays" type="text" required="" placeholder="Pays" aria-label="pays" value="{{ old('pays') }}">
                        @error('pays')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="hidden text-sm text-gray-600" for="zip_code">Zip</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('zip_code') is-invalid @enderror" id="zip_code" name="zip_code" type="text" required="" placeholder="Zip" aria-label="zip_code" value="{{ old('zip_code') }}">
                        @error('zip_code')
                            <div class="">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-6 justify-end space-x-3">
                        <button class="px-3 py-1 text-white font-light tracking-wider bg-blue-900 rounded" type="submit">Enregistrez</button>
                        {{-- <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900" id="close-modal">Cancel</button> --}}
                        {{-- <button class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">Delete</button> --}}
                    </div>
                </form>
            </div>
        </div>

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 my-8 mx-4">
        </div>
    </main>
@stop

