<div class="flex flex-wrap p-6">
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
             <i class="fas fa-Produit-plus mr-3"></i> Formulaire de création d'un nouveaux produit
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="AddProduit()">
                {{-- <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p> --}}
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Name</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded
                    @error('newProduit.name')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="name" name="name" type="text" wire:model="newProduit.name" aria-label="name">
                    @error('newProduit.name')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="fournisseur">Fournisseur</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.fournisseur')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="fournisseur" name="fournisseur" type="text" wire:model="newProduit.fournisseur" aria-label="fournisseur">
                    @error('newProduit.fournisseur')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="categories">Catégorie</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.fournisseur')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="fournisseur" name="fournisseur" type="text" wire:model="newProduit.fournisseur" aria-label="fournisseur">
                    @error('newProduit.fournisseur')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="taux_souscription">Taux de Souscription</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.taux_souscription')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="taux_souscription" name="taux_souscription" type="number" aria-label="taux_souscription" wire:model="newProduit.taux_souscription">
                    @error('newProduit.taux_souscription')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="taux_rachat">Taux de Rachat</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.taux_rachat')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="taux_rachat" name="taux_rachat" type="number" placeholder="" aria-label="taux_rachat" wire:model="newProduit.taux_rachat">
                    @error('newProduit.telephone1')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="numAgrement">NUMÉRO D’AGRÉMENT</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.numAgrement')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="numAgrement" name="numAgrement" type="text"  placeholder="" aria-label="numAgrement" wire:model="newProduit.numAgrement">
                    @error('newProduit.numAgrement')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="valeurLiquidativeOrigine">VALEUR LIQUIDATIVE D’ORIGINE</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.valeurLiquidativeOrigine')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="valeurLiquidativeOrigine" name="valeurLiquidativeOrigine" type="number" aria-label="valeurLiquidativeOrigine" wire:model="newProduit.valeurLiquidativeOrigine">
                    @error('newProduit.valeurLiquidativeOrigine')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="block text-sm text-gray-600">
                    <label class="block text-sm text-gray-600" for="souscriptionMinimal">SOUSCRIPTION MINIMALE</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.souscriptionMinimal')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="souscriptionMinimal" name="souscriptionMinimal" type="number" placeholder="" aria-label="souscriptionMinimal" wire:model="newProduit.numerossouscriptionMinimalPieceIdentite">
                    @error('newProduit.souscriptionMinimal')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="budgetPrevisionCom">BUDGET PREVISION COM</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded @error('newProduit.budgetPrevisionCom')
                    border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red
                    @enderror" id="budgetPrevisionCom" name="budgetPrevisionCom" type="number"  placeholder="" aria-label="budgetPrevisionCom" wire:model="newProduit.budgetPrevisionCom">
                    @error('newProduit.budgetPrevisionCom')
                      <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="mt-6">
                    <button class="inline-block mt-2 w-1/2 px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enregistrer</button>
                    <button class="inline-block mt-2 -mx-1 pl-1 w-1/2 px-4 py-1 text-white font-light tracking-wider bg-red-500 rounded" type="button" wire:click='goToListeProduit()'>Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>
