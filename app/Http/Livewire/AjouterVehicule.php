<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vehicule;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AjouterVehicule extends Component
{

     //Pour importer les photos et la pagination
     use WithFileUploads, WithPagination;

     // Utilise le theme de bootstrap pour la pagination
     protected $paginationTheme = "bootstrap";
     
    public $nouveauVehicule = [], $image_vehicules = [] ;

    public function render()
    {
        return view('livewire.ajouter-vehicule')
        ->extends('layouts.dashboard')
        ->section('contenu');;;
    }

    
    public function creerVehicule(){
 
        if(!empty($this->image_vehicules)){

            foreach ($this->image_vehicules as $image) {

                $image_pah =  $image->store('images', 'public');

                // $image->hashName()
                $this->nouveauVehicule['image_vehicule'] = $image_pah ;

                $this->nouveauVehicule['nom_utilisateur'] = auth()->user()->name;

                Vehicule::create($this->nouveauVehicule);

                $this->nouveauVehicule = [];

            }

        }

       

       

    }

}
