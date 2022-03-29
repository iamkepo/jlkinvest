@include('layouts.header')
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/image_login.jpg') }}" alt="Office" />
            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/login-office-dark.jpeg" alt="Office" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Login
              </h1>
              @if ($errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-2">
                    <label class="block text-sm text-gray-700 dark:text-gray-400" for="name">Email</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('title') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus  aria-label="Name">
                    @error('title')
                        <span class="text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-700 dark:text-gray-400" for="email">Password</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="password" name="password" required autocomplete="current-password" placeholder="***********" aria-label="password">
                </div>
                <div class="mt-6">
                    <button class=" text-white font-light tracking-wider bg-gray-900 block w-full px-4 py-2 mt-4 text-sm  leading-5 text-center transition-colors duration-150  border border-transparent rounded-lg active:bg-purple-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-purple" type="submit">Log in</button>
                </div>
            </form>
            <hr class="my-8" />
            </div>
          </div>
        </div>
      </div>
@include('layouts.script')
