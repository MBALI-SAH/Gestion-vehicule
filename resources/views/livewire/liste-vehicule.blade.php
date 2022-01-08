<div class="row p-4 pt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary  align-items-center">

          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4  col-xl-4">
              <h3 class="card-title "><i class="fa fa-car fa-x" ></i>Liste des nouveaux véhicules</h3>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  col-xl-4">
              <a href="{{ route('ajouterVehicule') }}" class="btn btn-link text-white mr-4 d-block">
                <i class="fa fa-car plus"></i>
                Ajouter un véhicules
              </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4  col-xl-4">
              <div class="input-group input-group-md" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                {{-- <th style="width:5%;"></th> --}}
                <th style="width:20%;">Image</th>
                <th style="width:20%;">Prix</th>
                <th style="width:25%;">Nom</th>
                <th style="width:20%;">Marque</th>
                <th style="width:20%;">Couleur</th>
                <th style="width:25%;">Type de véhicule</th>
                <th style="width:25%;"class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($vehicules as $vehicule)
                    <tr>
                        <td> 
                          @if ($vehicule->image_vehicule != "" || $vehicule->image_vehicule != NULL )
                              <img src="{{ asset('storage/'. $vehicule->image_vehicule) }}" alt="" srcset="" width="60">
                          @else
                              {{-- <img src="{{ asset('assets/images/') }}/{{ $vehicule->image_vehicule }}" alt="" srcset="" width="60"> --}}
                          @endif
                          
                        </td>
                        <td>
                            {{ $vehicule->prix_vehicule  }}
                        </td>
                        <td>
                            {{ $vehicule->nom_vehicule   }}
                        </td>
                        <td>{{ $vehicule->marque_vehicule   }} </td>
                        <td>
                            {{ $vehicule->couleur_vehicule  }}
                        </td>
                        <td>
                            {{ $vehicule->nombre_version }}
                        </td>
                
                        <td class="text-center">
                            <button class="btn btn-link" title="Modifier" wire:click="pageModifierVehicule('{{$vehicule->id}}')">
                                <i class="far fa-edit"></i>
                            </button>
                            <button class="btn btn-link" title="Supprimer" wire:click="deleteVehicule('{{ $vehicule->id }} ')" >
                                <i class="far fa-trash-alt text-red-700"></i>
                            </button>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <!-- Card-footer-->
        <div class="card-footer">
            <div class="float-right">
                {{-- $vehicules->links() --}}
            </div>
        </div>
        <!-- /.Card-footer-->
      </div>
      <!-- /.card -->
    </div>
</div>