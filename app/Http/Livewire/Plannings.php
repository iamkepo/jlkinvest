<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Activite;
use Illuminate\Support\Facades\Auth;

class Plannings extends Component
{
    public $plannings = [];
    public function render()
    {
        $this->plannings =json_encode(Activite::where("user_id",'=',Auth::user()->id)->get());

        $this->plannings = alterKeyJson($this->plannings, 'dateEcheance', 'start');

        return view('livewire.plannings')
                ->extends("layouts.app")
                ->section("container");
    }
}
