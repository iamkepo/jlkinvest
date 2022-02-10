<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prospect;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProspectDatatable extends LivewireDatatable
{
    //public $model = Prospect::class;

    public $complex = false;
    public function builder()
    {
        if(Auth::user()->role_name == "admin"){
            $this->complex = true;
            return Prospect::query();
        }else{
            return Prospect::latest()->Where('user_id',Auth::user()->id );
        }
    }
    function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->sortBy('id'),
            Column::name('designation')
                    ->defaultSort('asc')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('email')
                    ->label('Email')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('tel')
                    ->label('Phone')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('pays')
                    ->label('pays')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('ville')
                    ->label('ville')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('zip')
                    ->label('zip')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('profession')
                    ->label('profession')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('secteurAct')
                    ->label('secteurAct')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('user.name')
                    ->label('commerciale en charge')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('status')
                    ->label('status')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            DateColumn::name('clientAt')
                    ->label('clientAt')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            BooleanColumn::name('ppe')
                    ->label('ppe')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            DateColumn::name('created_at')
                    ->label('Date')
                    ->filterable(),
            Column::callback(['id', 'designation'], function ($id, $designation) {
                    return view('components.table-actions', ['id' => $id, 'name' => $designation]);
            })->unsortable()
        ];
    }

}
