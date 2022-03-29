<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Produits extends Component
{
    use WithPagination;
    public $idBtnAddClicked = false;
    public $search;
    public $currentPage = PAGELIST;

    public $newProduit = [];
    public $editProduit = [];

    public function rules(){
      if ($this->currentPage === PAGEEDITFORM) {
        return [
          'editProduit.name' => 'required',
          'editProduit.email' => ['required','email', Rule::unique("Produits","email")->ignore($this->editProduit['id'])],
          'editProduit.sex' => 'required',
          'editProduit.telephone1' => ['required',Rule::unique("Produits","telephone1")->ignore($this->editProduit['id'])],
          'editProduit.pieceIdentite' => 'required',
          'editProduit.numerosPieceIdentite' => ['required',Rule::unique("Produits","numerosPieceIdentite")->ignore($this->editProduit['id'])],
          'editProduit.role_id' => 'required|numeric',
        ];
      }
      return [
              'newProduit.name' => 'required',
              'newProduit.email' => 'required|email|unique:Produits,email',
              'newProduit.sex' => 'required',
              'newProduit.telephone1' => 'required|unique:Produits,telephone1',
              'newProduit.pieceIdentite' => 'required',
              'newProduit.numerosPieceIdentite' => 'required|unique:Produits,numerosPieceIdentite',
              'newProduit.role_id' => 'required|numeric',
              'newProduit.pays' => 'required',
      ];
    }
    public function render()
    {
        return view('livewire.produits.index',[
            'Produits' => Produit::latest()
                            ->where("name", 'like','%'.$this->search.'%')
                            ->paginate(5)
        ])
        ->extends("layouts.app")
        ->section("container");
    }

    public function goToListeProduit(){
        $this->currentPage = PAGELIST;
        $this->editProduit = [];
    }

    public function goToAddProduit(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditProduit($id){
        $this->editProduit = Produit::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }

    public function updateProduit(){
      //Vérifiez que les information envoyées par l'utilisateurs sont correctes
      $validationAttributes = $this->validate();
      Produit::find($this->editProduit['id'])->update($validationAttributes["editProduit"]);

      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur mise à jour avec success!"]);

    }

    public function AddProduit(){
        //Vérifiez que les information envoyées par l'utilisateurs sont correctes

        $validationAttributes = $this->validate();
        $this->newProduit['photo']="https://via.placeholder.com/640x480.png/005588?text=aliquam1";
        $this->newProduit['password']="$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        //dump($validationAttributes['newProduit']);
        //Ajoutez un nouvelle utilisateur
        Produit::create($this->newProduit);

        $this->newProduit = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur créé avec success!"]);
    }

    public function comfirmeDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmeMessage",["message" =>[
          "text" => "Vous être sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
          "title" => "Etes-vous sûr de continuer",
          "type" => "warning",
          "data" => [
            "Produit_id" => $id
          ]
          ]]);
    }

    public function deleteProduit($id){
      Produit::destroy($id);
      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur supprimé avec success!"]);
    }

}
