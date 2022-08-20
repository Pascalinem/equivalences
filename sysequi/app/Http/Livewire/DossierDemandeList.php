<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\DossierDemande;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DossierDemandeList extends LivewireDatatable
{
    public $model = DossierDemande::class;
    public function columns()
    {
        return [

            Column::name('numero_demande')
                ->label('Numero Demande')
                ->filterable()
                ->searchable(),

            
            Column::name('type_demande')
                ->label('Type Demande')
                ->filterable()
                ->searchable(),

            Column::name('montant_frais')
            ->label('Montant Frais')
            ->filterable()
            ->searchable(),

            Column::name('refugie_reconnu')
            ->label('Réfugié Reconnu')
            ->filterable()
            ->searchable(),

            Column::name('actiris')
            ->label('Actiris')
            ->filterable()
            ->searchable(),

        ];
    }

    
}
