<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DossierDemande;

class DossierDemandeForm extends Component
{
    public $numero_demande;

    public $date_demande;

    public $type_demande;
    public $montant_frais;
    public $refugie_reconnu;
    public $actiris;
    public $vdab;
    public $statut;

    public function submit()

    {

        $validatedData = $this->validate([

            'numero_demande' => 'required',
            'date_demande' => 'required',
            'type_demande' => 'required',
            'montant_frais' => 'required',
            'refugie_reconnu' => 'required',
            'actiris' => 'required',
            'vdab' => 'required',
            'statut' => 'required',

        ]);

  

        DossierDemande::create($validatedData);

  

        return redirect()->to('/form');

    }

  
    
    public function render()
    {
        return view('livewire.dossier-demande-form');
    }
}
