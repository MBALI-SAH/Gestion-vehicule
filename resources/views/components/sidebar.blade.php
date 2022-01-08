<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
      <div class="card bg-dark">
        <div class="card-body bg-dark box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/user.png') }}" alt="">
          </div>
           <!-- Cette foncton est initialisee dans le fichier app/helpers/helpers.php-->
          <h3 class="profile-username text-center ellipsis "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ Auth::user()->name}} </font></font></h3>

          <p class="text-muted text-center mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          <!-- Cette foncton est initialisee dans le fichier app/helpers/helpers.php-->
          {{ Auth::user()->email}} 
          </font></font></p>

          <ul class="list-group bg-dark mb-3">
              <li class="list-group-item">
                <a href="#" class="d-flex align-items-center"><i class="fa fa-lock pr-2"></i><b>Mot de passe</b></a>
              </li>
              <li class="list-group-item">
                <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b>Mon profile</b></a>
              </li>
          </ul>
          <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
             Déconnexion
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
        <!-- /.card-body -->
      </div>
  </aside>