<div class="flex flex-wrap p-6">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
             <i class="fas fa-user-plus mr-3"></i> Formulaire de création d'un nouvaux prospect
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="AddProspect()">
                {{-- <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p> --}}
                <div class="">
                    <label class="block text-sm text-gray-600" for="designation">Designation</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded
                    @error('newProspect.designation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="designation" name="designation" type="text" wire:model="newProspect.designation" aria-label="designation">
                    @error('newProspect.designation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.email')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="email" name="email" type="text" wire:model="newProspect.email" aria-label="email">
                    @error('newProspect.email')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone1">Telephone 1</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.telephone1')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone1" name="telephone1" type="text" placeholder="" aria-label="telephone1" wire:model="newProspect.telephone1">
                    @error('newProspect.telephone1')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone2">Telephone 2</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.telephone2')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone2" name="telephone2" type="text"  placeholder="" aria-label="telephone2" wire:model="newProspect.telephone2">
                    @error('newProspect.telephone2')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="csp">CSP</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.csp')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="csp" name="csp" type="text" aria-label="csp" wire:model="newProspect.csp">
                        <option value=""></option>
                        <option value="Particulier">Particulier</option>
                        <option value="Société">Société</option>
                    </select>
                    @error('newProspect.csp')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="ppe">PPE</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.ppe')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="ppe" name="ppe" type="text" aria-label="ppe" wire:model="newProspect.ppe">
                        <option value=""></option>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                    @error('newProspect.ppe')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="pays">Pays</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.pays')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="pays" name="pays" type="text" placeholder="" aria-label="pays" wire:model="newProspect.pays">
                    @error('newProspect.pays')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="ville">Ville</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.ville')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="ville" name="ville" type="text" placeholder="" aria-label="ville" wire:model="newProspect.ville">
                    @error('newProspect.ville')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="rue">rue</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.rue')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="rue" name="rue" type="text" placeholder="" aria-label="rue" wire:model="newProspect.rue">
                    @error('newProspect.rue')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="adresse">Zip/code</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.zipcode')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="zipcode" name="zipcode" type="text" placeholder="" aria-label="zipcode" wire:model="newProspect.zipcode">
                    @error('newProspect.zipcode')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="profession">Profession</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.profession')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="profession" name="profession" type="text" placeholder="" aria-label="profession" wire:model="newProspect.profession">
                    @error('newProspect.profession')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="secteurActivite">Secteur d'Activité</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.secteurActivite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="secteurActivite" name="secteurActivite" type="text" placeholder="" aria-label="secteurActivite" wire:model="newProspect.secteurActivite">
                    @error('newProspect.secteurActivite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="societe">Société</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.societe')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="societe" name="societe" type="text" placeholder="" aria-label="societe" wire:model="newProspect.societe">
                    @error('newProspect.societe')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="presentation">Présentation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.presentation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="presentation" name="presentation" type="text" placeholder="" aria-label="presentation" wire:model="newProspect.presentation"> </textarea>
                    @error('newProspect.presentation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="originProspect">Origine du Prospect</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.originProspect')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="originProspect" name="originProspect" type="text" placeholder="" aria-label="originProspect" wire:model="newProspect.originProspect"></textarea>
                    @error('newProspect.originProspect')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="potentielRelation">Potentiel de la relation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.potentielRelation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="potentielRelation" name="potentielRelation" type="text" placeholder="" aria-label="potentielRelation" wire:model="newProspect.potentielRelation"></textarea>
                    @error('newProspect.potentielRelation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="pieceIdentite">Piece Identite</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.pieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="pieceIdentite" name="pieceIdentite" type="text" aria-label="pieceIdentite" wire:model="newProspect.pieceIdentite">
                        <option value=""></option>
                        <option value="CNI">CNI</option>
                        <option value="PASSEPORT">PASSEPORT</option>
                    </select>
                    @error('newProspect.pieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="numerosPieceIdentite">Numeros de la Piece d'Identite</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.numerosPieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="numerosPieceIdentite" name="numerosPieceIdentite" type="text" placeholder="" aria-label="numerosPieceIdentite" wire:model="newProspect.numerosPieceIdentite">
                    @error('newProspect.numerosPieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2 hidden">
                    <label class="block text-sm text-gray-600" for="photo">Photos</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProspect.photo')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="photo" name="photo" type="file"  placeholder="" aria-label="photo" wire:model="newProspect.photo">
                    @error('newProspect.photo')
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
                    <button class="inline-block mt-2 -mx-1 pl-1 w-1/2 px-4 py-1 text-white font-light tracking-wider bg-red-500 rounded" type="button" wire:click='goToListeProspect()'>Retour</button>
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
