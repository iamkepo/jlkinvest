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
        $this->plannings =Activite::where("user_id",'=',Auth::user()->id)->get();
        return view('livewire.plannings')
                ->extends("layouts.app")
                ->section("container");
    }
}
