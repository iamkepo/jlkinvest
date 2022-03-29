<div class="flex flex-wrap p-6">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
             <i class="fas fa-user-plus mr-3"></i> Formulaire de création d'un nouvel utilisateur
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="AddUser()">
                {{-- <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p> --}}
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Name</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded
                    @error('newUser.name')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="name" name="name" type="text" wire:model="newUser.name" aria-label="name">
                    @error('newUser.name')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.email')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="email" name="email" type="text" wire:model="newUser.email" aria-label="email">
                    @error('newUser.email')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="sex">Sex</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.sex')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="sex" name="sex" type="text" aria-label="Sex" wire:model="newUser.sex">
                        <option value=""></option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                    @error('newUser.sex')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone1">Telephone 1</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.telephone1')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone1" name="telephone1" type="text" placeholder="" aria-label="telephone1" wire:model="newUser.telephone1">
                    @error('newUser.telephone1')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone2">Telephone 2</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.telephone2')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone2" name="telephone2" type="text"  placeholder="" aria-label="telephone2" wire:model="newUser.telephone2">
                    @error('newUser.telephone2')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="pays">Pays</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.pays')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="pays" name="pays" type="text"  placeholder="" aria-label="pays" wire:model="newUser.pays">
                    @error('newUser.pays')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="pieceIdentite">Piece Identite</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.pieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="pieceIdentite" name="pieceIdentite" type="text" aria-label="pieceIdentite" wire:model="newUser.pieceIdentite">
                        <option value=""></option>
                        <option value="CNI">CNI</option>
                        <option value="PASSPORT">PASSEPORT</option>
                    </select>
                    @error('newUser.pieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="numerosPieceIdentite">Numeros de la Piece d'Identite</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.numerosPieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="numerosPieceIdentite" name="numerosPieceIdentite" type="text" placeholder="" aria-label="numerosPieceIdentite" wire:model="newUser.numerosPieceIdentite">
                    @error('newUser.numerosPieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2 hidden">
                    <label class="block text-sm text-gray-600" for="photo">Photos</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.photo')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="photo" name="photo" type="file"  placeholder="" aria-label="photo" wire:model="newUser.photo">
                    @error('newUser.photo')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="role">Roles</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.role_id')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="role_id" name="role_id" type="text" aria-label="role_id" wire:model="newUser.role_id">
                        <option value="2">Commerciale</option>
                        <option value="1">Administrateur</option>
                    </select>
                    @error('newUser.role_id')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2 hidden">
                    <label class="block text-sm text-gray-600" for="password">Mot de passe</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('newUser.password')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="password" name="password" type="text" disabled placeholder="Default Password: password" aria-label="password" value="password" wire:model="newUser.password">
                    @error('newUser.password')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                {{-- <p class="text-lg text-gray-800 font-medium py-4">Payment information</p> --}}
                {{-- <div class="">
                    <label class="block text-sm text-gray-600" for="cus_name">Card</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
                </div> --}}
                <div class="mt-6">
                    <button class="inline-block mt-2 w-1/2 px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enregistrer</button>
                    <button class="inline-block mt-2 -mx-1 pl-1 w-1/2 px-4 py-1 text-white font-light tracking-wider bg-red-500 rounded" type="button" wire:click='goToListeUser()'>Annuler</button>
                </div>
            </form>
        </div>
        {{-- <p class="pt-6 text-gray-600">
            Source: <a class="underline" href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
        </p> --}}
    </div>
    {{-- <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <svg class="svg-inline--fa fa-list fa-w-16 mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg><!-- <i class="fas fa-list mr-3"></i> --> Contact Form
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl">
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Your Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Message</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" required="" placeholder="Your inquiry.." aria-label="Email"></textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div> --}}
</div>
