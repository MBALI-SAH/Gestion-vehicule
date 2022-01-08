<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vehicule;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    //Pour importer les photos et la pagination
    use WithFileUploads, WithPagination;

    // Utilise le theme de bootstrap pour la pagination
    protected $paginationTheme = "bootstrap";

    public $image_vehicules = [] , $image ,$vehicule, $afficher_page_modifier;
    public $nom_vehicule,$prix_vehicule,$marque_vehicule,$couleur_vehicule,$nombre_version,$image_vehicule,$vehicule_id;

    /**
     * Declaration d'un tableau 
     * Ce tableau jouera de reception des données
     */
    public $nouveauVehicule = [];
   

    public function render()
    {
        return view('livewire.index',[
            'vehicules' => Vehicule::latest()->paginate(5),
        ]) 
        ->extends('layouts.dashboard')
        ->section('contenu');
    }

    public function pageModifierVehicule($id){

        $vehicule = Vehicule::find($id);

        $this->nom_vehicule = $vehicule->nom_vehicule ;
        $this->prix_vehicule = $vehicule->prix_vehicule  ;
        $this->marque_vehicule = $vehicule->marque_vehicule ;
        $this->couleur_vehicule = $vehicule->couleur_vehicule ;
        $this->nombre_version = $vehicule->nombre_version ;
        $this->image_vehicule = $vehicule->image_vehicule ;
        $this->vehicule_id = $vehicule->id ;
       

        $this->afficher_page_modifier = true;

    }

    public function retourListeVehicule(){

        $this->afficher_page_modifier = false;
    }

    public function modifierVehicule(){


        $vehicule = Vehicule::find($this->vehicule_id);

        
        $vehicule->nom_vehicule = $this->nom_vehicule;
        $vehicule->prix_vehicule = $this->prix_vehicule;
        $vehicule->couleur_vehicule = $this->couleur_vehicule;
        $vehicule->nombre_version = $this->nombre_version;

        if(!empty($this->image_vehicules)){

            foreach ($this->image_vehicules as $image) {

                $image_pah =  $image->store('images', 'public');

                // $image->hashName()
                //$this->nouveauVehicule['image_vehicule'] = $image_pah ;

                $vehicule->image_vehicule = $image_pah;

               
            }

        }
      
        $vehicule->nom_utilisateur = Auth::user()->name;



        $vehicule->save();

        $this->nom_vehicule ="";
        $this->prix_vehicule ="";
        $this->couleur_vehicule ="";
        $this->nombre_version ="";
        $this->image_vehicule ="";
       
        $this->afficher_page_modifier = true;
    }


    public function deleteVehicule(){


        $vehicule = Vehicule::find($this->vehicule_id);

        $vehicule->delete();


    }
}
