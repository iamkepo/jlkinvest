<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;

use Livewire\Component;

class UserDatatable extends LivewireDatatable
{
    public $model = User::class;
    function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->sortBy('id'),
            Column::name('name')
                    ->defaultSort('asc')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('email')
                    ->label('email')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            Column::name('phone_number')
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
            Column::name('role_name')
                    ->label('Role')
                    ->searchable()
                    ->hideable()
                    ->filterable(),
            DateColumn::name('created_at')
                    ->label('Date')
                    ->filterable(),
            BooleanColumn::name('status')
                    ->label('status')
                    ->filterable(),
        ];
    }
}
