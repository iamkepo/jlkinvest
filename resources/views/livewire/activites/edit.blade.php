<div class="flex flex-wrap p-6">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
             <i class="fas fa-user-plus mr-3"></i> Formulaire d'édition des activité
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="updateActivite()">
                <p class="text-lg text-gray-800 font-medium pb-4">Reférence : {{ $editActivite['reference'] }} </p>
                <div class="">
                    <label class="block text-sm text-gray-600" for="typeActivity">Type d'Activité</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.typeActivity')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="typeActivity" name="typeActivity" type="text" aria-label="typeActivity" wire:model="editActivite.typeActivity">
                        <option value=""></option>
                        <option value="Rendez-vous">Rendez-vous</option>
                        <option value="Appelez">Appelez</option>
                    </select>
                    @error('editActivite.typeActivity')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="resume">Resume</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.resume')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="resume" name="resume" type="text" aria-label="resume" wire:model="editActivite.resume">
                    @error('editActivite.resume')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="dateEcheance">dateEcheance</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.dateEcheance')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="dateEcheance" name="dateEcheance" type="datetime-local" aria-label="dateEcheance" wire:model="editActivite.dateEcheance">
                    @error('editActivite.dateEcheance')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="observation">Observation</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.observation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="observation" name="observation" type="text" aria-label="observation" wire:model="editActivite.observation"></textarea>
                    @error('editActivite.observation')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="besoinDuClient">besoin Du Client</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.besoinDuClient')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="besoinDuClient" name="besoinDuClient" type="text" aria-label="besoinDuClient" wire:model="editActivite.besoinDuClient"></textarea>
                    @error('editActivite.besoinDuClient')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="objectifDeCollecte">Objectif de la Collecte</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.observation')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="objectifDeCollecte" name="objectifDeCollecte" type="number" aria-label="objectifDeCollecte" wire:model="editActivite.objectifDeCollecte">
                    @error('editActivite.objectifDeCollecte')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="ressourceCollecte">Ressource de la Collecte</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.ressourceCollecte')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="ressourceCollecte" name="ressourceCollecte" type="number" aria-label="ressourceCollecte" wire:model="editActivite.ressourceCollecte">
                    @error('editActivite.ressourceCollecte')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="produitsCom">produits Commercialiser</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.produitsCom')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="produitsCom" name="produitsCom" type="text" aria-label="produitsCom" wire:model="editActivite.produitsCom">
                    @error('editActivite.produitsCom')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="actionEntreprendre">Action a Entreprendre</label>
                    <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.actionEntreprendre')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="actionEntreprendre" name="actionEntreprendre" type="text" aria-label="actionEntreprendre" wire:model="editActivite.actionEntreprendre"></textarea>
                    @error('editActivite.actionEntreprendre')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="statut">statut</label>
                    <select class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('editActivite.statut')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="statut" name="statut" type="text" aria-label="statut" wire:model="editActivite.statut">
                        <option value="">Aboutir</option>
                        <option value="">Non Abouti</option>
                    </select>
                    @error('editActivite.statut')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Valider L'activite</button>
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" wire:click.prevent="goToListeActivite()">Retour</button>
                </div>
            </form>
        </div>
    </div>
</div>
