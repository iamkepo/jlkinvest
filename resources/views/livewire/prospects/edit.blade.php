<div class="flex flex-wrap p-6">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:px-3">
        <p class="text-xl pb-6 flex items-center">
             <i class="fas fa-user-plus mr-3"></i> Formulaire d'édition d'un prospect
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="updateProspect()">
                {{-- <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p> --}}
                <div class="">
                    <label class="block text-sm text-gray-600" for="designation">Designation</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded
                    @error('editProspect.designation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="designation" name="designation" type="text" wire:model="editProspect.designation" aria-label="designation">
                    @error('editProspect.designation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.email')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="email" name="email" type="text" wire:model="editProspect.email" aria-label="email">
                    @error('editProspect.email')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone1">Telephone 1</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.telephone1')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone1" name="telephone1" type="text" placeholder="" aria-label="telephone1" wire:model="editProspect.telephone1">
                    @error('editProspect.telephone1')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="telephone2">Telephone 2</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.telephone2')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="telephone2" name="telephone2" type="text"  placeholder="" aria-label="telephone2" wire:model="editProspect.telephone2">
                    @error('editProspect.telephone2')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="csp">CSP</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.csp')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="csp" name="csp" type="text" aria-label="csp" wire:model="editProspect.csp">
                        <option value=""></option>
                        <option value="Particulier">Particulier</option>
                        <option value="Société">Société</option>
                    </select>
                    @error('editProspect.csp')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="ppe">PPE</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.ppe')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="ppe" name="ppe" type="text" aria-label="ppe" wire:model="editProspect.ppe">
                        <option value=""></option>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                    @error('editProspect.ppe')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="pays">Pays</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.pays')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="pays" name="pays" type="text" placeholder="" aria-label="pays" wire:model="editProspect.pays">
                    @error('editProspect.pays')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="ville">Ville</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.ville')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="ville" name="ville" type="text" placeholder="" aria-label="ville" wire:model="editProspect.ville">
                    @error('editProspect.ville')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="rue">rue</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.rue')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="rue" name="rue" type="text" placeholder="" aria-label="rue" wire:model="editProspect.rue">
                    @error('editProspect.rue')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="adresse">Zip/code</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.zipcode')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="zipcode" name="zipcode" type="text" placeholder="" aria-label="zipcode" wire:model="editProspect.zipcode">
                    @error('editProspect.zipcode')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="profession">Profession</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.profession')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="profession" name="profession" type="text" placeholder="" aria-label="profession" wire:model="editProspect.profession">
                    @error('editProspect.profession')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="secteurActivite">Secteur d'Activité</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.secteurActivite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="secteurActivite" name="secteurActivite" type="text" placeholder="" aria-label="secteurActivite" wire:model="editProspect.secteurActivite">
                    @error('editProspect.secteurActivite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="societe">Société</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.societe')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="societe" name="societe" type="text" placeholder="" aria-label="societe" wire:model="editProspect.societe">
                    @error('editProspect.societe')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="presentation">Présentation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.presentation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="presentation" name="presentation" type="text" placeholder="" aria-label="presentation" wire:model="editProspect.presentation"> </textarea>
                    @error('editProspect.presentation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="originProspect">Origine du Prospect</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.originProspect')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="originProspect" name="originProspect" type="text" placeholder="" aria-label="originProspect" wire:model="editProspect.originProspect"></textarea>
                    @error('editProspect.originProspect')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="potentielRelation">Potentiel de la relation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.potentielRelation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                  @enderror" id="potentielRelation" name="potentielRelation" type="text" placeholder="" aria-label="potentielRelation" wire:model="editProspect.potentielRelation"></textarea>
                    @error('editProspect.potentielRelation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="pieceIdentite">Piece Identite</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.pieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="pieceIdentite" name="pieceIdentite" type="text" aria-label="pieceIdentite" wire:model="editProspect.pieceIdentite">
                        <option value=""></option>
                        <option value="CNI">CNI</option>
                        <option value="PASSEPORT">PASSEPORT</option>
                    </select>
                    @error('editProspect.pieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="numerosPieceIdentite">Numeros de la Piece d'Identite</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.numerosPieceIdentite')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="numerosPieceIdentite" name="numerosPieceIdentite" type="text" placeholder="" aria-label="numerosPieceIdentite" wire:model="editProspect.numerosPieceIdentite">
                    @error('editProspect.numerosPieceIdentite')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2 hidden">
                    <label class="block text-sm text-gray-600" for="photo">Photos</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editProspect.photo')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="photo" name="photo" type="file"  placeholder="" aria-label="photo" wire:model="editProspect.photo">
                    @error('editProspect.photo')
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
    <div class="w-full lg:w-1/2 my-6">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-book mr-2"></i> Planifier une activité
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="schedule()">

                <div class="">
                    <label class="block text-sm text-gray-600" for="typeActivity">Type d'Activité</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newActivite.typeActivity')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="typeActivity" name="typeActivity" type="text" aria-label="typeActivity" wire:model="newActivite.typeActivity">
                        <option value=""></option>
                        <option value="Rendez-vous">Rendez-vous</option>
                        <option value="Appelez">Appelez</option>
                    </select>
                    @error('newActivite.typeActivity')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="resume">Resume</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newActivite.resume')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="resume" name="resume" type="text" aria-label="resume" wire:model="newActivite.resume">
                    @error('newActivite.resume')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="dateEcheance">dateEcheance</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newActivite.dateEcheance')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="dateEcheance" name="dateEcheance" type="datetime-local" aria-label="dateEcheance" wire:model="newActivite.dateEcheance">
                    @error('newActivite.dateEcheance')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="observation">Observation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newActivite.observation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="observation" name="observation" type="text" aria-label="observation" wire:model="newActivite.observation"></textarea>
                    @error('newActivite.observation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Planifiez</button>
                </div>
            </form>
        </div>
    </div>
</div>
