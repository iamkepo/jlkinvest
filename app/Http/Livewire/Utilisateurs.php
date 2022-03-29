<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Utilisateurs extends Component
{
    use WithPagination;
    public $idBtnAddClicked = false;
    public $search;
    public $currentPage = PAGELIST;

    public $newUser = [];
    public $editUser = [];

    public function rules(){
      if ($this->currentPage === PAGEEDITFORM) {
        return [
          'editUser.name' => 'required',
          'editUser.email' => ['required','email', Rule::unique("users","email")->ignore($this->editUser['id'])],
          'editUser.sex' => 'required',
          'editUser.telephone1' => ['required',Rule::unique("users","telephone1")->ignore($this->editUser['id'])],
          'editUser.pieceIdentite' => 'required',
          'editUser.numerosPieceIdentite' => ['required',Rule::unique("users","numerosPieceIdentite")->ignore($this->editUser['id'])],
          'editUser.role_id' => 'required|numeric',
        ];
      }
      return [
              'newUser.name' => 'required',
              'newUser.email' => 'required|email|unique:users,email',
              'newUser.sex' => 'required',
              'newUser.telephone1' => 'required|unique:users,telephone1',
              'newUser.pieceIdentite' => 'required',
              'newUser.numerosPieceIdentite' => 'required|unique:users,numerosPieceIdentite',
              'newUser.role_id' => 'required|numeric',
              'newUser.pays' => 'required',
      ];
    }
    public function render()
    {
        return view('livewire.utilisateurs.index',[
            'users' => User::latest()
                            ->where("name", 'like','%'.$this->search.'%')
                            ->paginate(5)
        ])
        ->extends("layouts.app")
        ->section("container");
    }

    public function goToListeUser(){
        $this->currentPage = PAGELIST;
        $this->editUser = [];
    }

    public function goToAddUser(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditUser($id){
        $this->editUser = User::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }

    public function updateUser(){
      //Vérifiez que les information envoyées par l'utilisateurs sont correctes
      $validationAttributes = $this->validate();
      User::find($this->editUser['id'])->update($validationAttributes["editUser"]);

      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur mise à jour avec success!"]);

    }

    public function AddUser(){
        //Vérifiez que les information envoyées par l'utilisateurs sont correctes

        $validationAttributes = $this->validate();
        $this->newUser['photo']="https://via.placeholder.com/640x480.png/005588?text=aliquam1";
        $this->newUser['password']="$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        //dump($validationAttributes['newUser']);
        //Ajoutez un nouvelle utilisateur
        User::create($this->newUser);

        $this->newUser = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur créé avec success!"]);
    }

    public function comfirmeDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmeMessage",["message" =>[
          "text" => "Vous être sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
          "title" => "Etes-vous sûr de continuer",
          "type" => "warning",
          "data" => [
            "user_id" => $id
          ]
          ]]);
    }

    public function deleteUser($id){
      User::destroy($id);
      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Utilisateur supprimé avec success!"]);
    }

}
