<?php

namespace App\Http\Livewire;
use App\Models\Activite;
use Livewire\Component;
use App\Models\Prospect;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class Activites extends Component
{
    use WithPagination;
    public $search;
    public $currentPage = PAGELIST;
    public $editActivite = [];

    public function rules(){
      if ($this->currentPage === PAGEEDITFORM) {
        return [
            'editActivite.typeActivity' => 'required',
            'editActivite.resume' => 'required',
            'editActivite.dateEcheance' => 'required'
        ];
      }
      return [
            'newActivite.typeActivity' => 'required',
            'newActivite.resume' => 'required',
            'newActivite.dateEcheance' => 'required'
      ];
    }
    public function render()
    {
        return view('livewire.activites.index',[
            'Activites' => Activite::latest()
                            ->where("user_id",'=',Auth::user()->id)
                            ->where("resume", 'like','%'.$this->search.'%')
                            ->paginate(5)
        ])
        ->extends("layouts.app")
        ->section("container");
    }

    public function goToListeActivite(){
        $this->currentPage = PAGELIST;
        $this->editActivite = [];
    }

    public function goToAddActivite(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditActivite($id){
        $this->editActivite = Activite::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }

    public function updateActivite(){
      //Vérifiez que les information envoyées par l'Activité s sont correctes
      $validationAttributes = $this->validate();
      Activite::find($this->editActivite['id'])->update($validationAttributes["editActivite"]);

      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Activité  mise à jour avec success!"]);

    }

    public function AddActivite(){
        //Vérifiez que les information envoyées par l'Activité s sont correctes
        $validationAttributes = $this->validate();
        $validationAttributes['newActivite']['photo']="https://via.placeholder.com/640x480.png/005588?text=aliquam";
        $validationAttributes['newActivite']['password']="$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";

        //Ajoutez un nouvelle Activité
        Activite::create($validationAttributes['newActivite']);

        $this->newActivite = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Activité  créé avec success!"]);
    }

    public function comfirmeDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmeMessage",["message" =>[
          "text" => "Vous être sur le point de supprimer $name de la liste des Activités. Voulez-vous continuer?",
          "title" => "Etes-vous sûr de continuer",
          "type" => "warning",
          "data" => [
            "Activite_id" => $id
          ]
          ]]);
    }

    public function deleteActivite($id){
      Activite::destroy($id);
      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Activité supprimé avec success!"]);
    }

}
