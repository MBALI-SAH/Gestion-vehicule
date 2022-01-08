<div class="row p-4 pt-5">
    <div class="card-header bg-white col-sm-12 col-md-6 col-lg-6  col-xl-6">
      <div class="card-header bg-primary">
        <h3 class="card-title"><i class="fa fa-car plus fa-x"></i> Formulaire de modification d'un véhicule</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" wire:submit.prevent="modifierVehicule()" >
        @csrf
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6  col-xl-6">
                <div class="form-group">
                  <label >Nom</label>
                  <input type="text" minlength="10" maxlength="14"    wire:model="nom_vehicule"
                      class="form-control  @error('nom_vehicule') is-invalid @enderror"  value="{{ old('nom_vehicule') }}" required>
                  @error('nom_vehicule')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-6  col-xl-6">
                <div class="form-group">
                  <label >Prix(5000000)</label>
                  <input type="text"  minlength="6" maxlength="25"  pattern="[0-9. ]+$"  wire:model="prix_vehicule"
                  class="form-control @error('prix_vehicule') is-invalid @enderror" value="{{ old('prix_vehicule') }}"  required>
                  @error('prix_vehicule')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
          </div>
        
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-6">
              <div class="form-group">
                <label >Marque</label>
                <select wire:model="marque_vehicule"
                    class="form-control @error('marque_vehicule') is-invalid @enderror" value="{{ old('marque_vehicule') }}" required>
                    @error('marque_vehicule')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  <option value="">---------</option>
                  <option value="Ferrari">Ferrari</option>
                  <option value="Porsche">Porsche</option>
                  <option value="Mercedes Benz">Mercedes Benz</option>
                  <option value="BMW">BMW</option>
                  <option value="Peugeot">Peugeot</option>
                  <option value="Peugeot">Renault</option>
                  <option value="Bugatti">Bugatti</option>
                  <option value="Bentley">Bentley</option>
                  <option value="Lotus Cars">Lotus Cars</option>
                </select>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6  col-xl-6">
              <div class="form-group">
          
                <label >Couleur</label>
                <select wire:model="couleur_vehicule"
                class="form-control @error('couleur_vehicule') is-invalid @enderror" value="{{ old('couleur_vehicule') }}" required>
                @error('couleur_vehicule')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <option value="">---------</option>
                <option value="Rouge">Rouge </option>
                <option value="Jaune ">Jaune </option>
                <option value="Orange">Orange</option>
                <option value="Bleu ">Bleu </option>
                <option value="Violet">Violet</option>
                <option value="Blanc">Blanc</option>
                <option value="Bugatti">Noir </option>
                </select>
                  @error('couleur_vehicule')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

              </div>
            </div>
          </div>
        
          <input type="text" wire:model='vehicule_id' hidden>

          <div class="form-group">
          
              <label >Nombre de versions</label>
              <input type="text"  wire:model="nombre_version" minlength="1" maxlength="25"  pattern="[0-9 ]+$" 
              class="form-control @error('nombre_version') is-invalid @enderror"  value="{{ old('nombre_version') }}" required>
              @error('nombre_version')
                <span class="text-danger">{{ $message }}</span>
              @enderror
      
          </div>

          <div class="form-group">
            <label >Image</label>
            <input type="file"  wire:model="image_vehicule"
            class="form-control @error('image_vehicules') is-invalid @enderror" multiple>
            @error('image_vehicules.*')
              <span class="text-danger">{{ $message }}</span>
            @enderror
            
            @if (isset($image_vehicules) )
                @foreach ( $image_vehicules as $image_vehicule)
                    <img class="w-25 h-10" src="{{ $image_vehicule->temporaryUrl() }}">
                @endforeach
            
            @else

                  <img class="w-25 h-10" src="{{  asset('storage/'. $image_vehicule)  }}">
            
            
            @endif
          </div>

        </div>
        <!-- /.card-body -->

        <div class="row card-footer">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary text-slate-800">Enregistrer</button>
            </div>
            <div class="col-md-8 ">
                <button type="button" class="btn btn-danger text-slate-800" wire:click.prevent="retourListeVehicule()">Retour à la liste</button>
            </div>
        </div>
      </form>
    </div>
</div>

