<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Activite;
use App\Models\Prospect;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class Prospects extends Component
{
    use WithPagination;
    public $idBtnAddClicked = false;
    public $search;
    public $currentPage = PAGELIST;

    public $newProspect = [];
    public $editProspect = [];
    public $newActivite = [];


    public function rules(){
      if ($this->currentPage === PAGEEDITFORM) {
        return [
          'editProspect.designation' => 'required',
          'editProspect.email' => ['required','email', Rule::unique("Prospects","email")->ignore($this->editProspect['id'])],
          'editProspect.telephone1' => ['required',Rule::unique("Prospects","telephone1")->ignore($this->editProspect['id'])],
          'editProspect.pieceIdentite' => 'required',
          'editProspect.numerosPieceIdentite' => ['required',Rule::unique("Prospects","numerosPieceIdentite")->ignore($this->editProspect['id'])],
          'editProspect.csp' => 'required',
          'editProspect.pays' => 'required',
          'editProspect.ville' => 'required',
          'editProspect.profession' => 'required',
          'editProspect.secteurActivite' => 'required',
          'editProspect.presentation' => 'required',
          'editProspect.originProspect' => 'required',
          'editProspect.ppe' => 'required',
        ];
      }
      return [
        'newProspect.designation' => 'required',
        'newProspect.email' => 'required|email|unique:Prospects,email',
        'newProspect.telephone1' => 'required|unique:Prospects,telephone1',
        'newProspect.pieceIdentite' => 'required',
        'newProspect.numerosPieceIdentite' => 'required|unique:Prospects,numerosPieceIdentite',
        'newProspect.csp' => 'required',
        'newProspect.pays' => 'required',
        'newProspect.ville' => 'required',
        'newProspect.profession' => 'required',
        'newProspect.secteurActivite' => 'required',
        'newProspect.presentation' => 'required',
        'newProspect.originProspect' => 'required',
        'newProspect.ppe' => 'required',
      ];
    }
    public function render()
    {

        return view('livewire.prospects.index',[
            'Prospects' => Prospect::latest()
                            ->where("user_id",'=',Auth::user()->id)
                            ->where("designation", 'like','%'.$this->search.'%')
                            ->paginate(5)
        ])
        ->extends("layouts.app")
        ->section("container");
    }

    public function goToListeProspect(){
        $this->currentPage = PAGELIST;
        $this->editProspect = [];
    }

    public function goToAddProspect(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditProspect($id){
        $this->editProspect = Prospect::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }

    public function updateProspect(){
      //Vérifiez que les information envoyées par l'utilisateurs sont correctes
      $validationAttributes = $this->validate();

      Prospect::find($this->editProspect['id'])->update($validationAttributes["editProspect"]);

      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Prospect mise à jour avec success!"]);

    }

    public function AddProspect(){
        //Vérifiez que les information envoyées par l'utilisateurs sont correctes
        $validationAttributes = $this->validate();
        $validationAttributes['newProspect']['user_id']=Auth::user()->id;
        //Ajoutez un nouvelle prospect
        Prospect::create($validationAttributes['newProspect']);

        $this->newProspect = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Prospect créé avec success!"]);

    }

    public function comfirmeDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmeMessage",["message" =>[
          "text" => "Vous être sur le point de supprimer $name de la liste de vos propects. Voulez-vous continuer?",
          "title" => "Etes-vous sûr de continuer",
          "type" => "warning",
          "data" => [
            "Prospect_id" => $id
          ]
          ]]);
    }

    public function deleteProspect($id){
      Schema::disableForeignKeyConstraints();
      Prospect::destroy($id);
      $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Prospect supprimé avec success!"]);
    }

    public function schedule(){
       $validationAttributes = $this->validate([
        'newActivite.typeActivity' => 'required',
        'newActivite.resume' => 'required',
        'newActivite.dateEcheance' => 'required',
       ]);

       $this->newActivite['prospect_id'] = $this->editProspect['id'];
       $this->newActivite['user_id'] = Auth::user()->id;
       $this->newActivite['statut'] = Auth::user()->id;
       $this->newActivite['reference'] = "ref_".Auth::user()->id."_".$this->editProspect['id']."_".((lastIdActivities()) + 1);
       $this->newActivite['statut'] = "en cours";
       $this->newActivite['title']= $this->editProspect['designation'];

       Activite::create($this->newActivite);
       $this->newActivite = [];

       $this->dispatchBrowserEvent("showSuccessMessage",["message" =>"Activite créé avec success!"]);
    }

}
