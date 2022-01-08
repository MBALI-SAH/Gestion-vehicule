@extends('layouts.app')

@section('content')
    <div class="container login">
        <div class="row mt-4">
            <section class="col-md-4"></section>
            <section class="col-md-4" style="background-color: rgb(226 232 240);">
                <div  class="text-center mt-4 mb-4">
                    <a href="http://" style="color:#b3b6b6;font-size:1.8rem">Gistion Véhicule v.1</a>
                </div>
            
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3 mt-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <span class="fas fa-envelope">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3 mt-4">
                        <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password">
                        <span class="fas fa-lock">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </span>
                    </div>
                    
                    <div class="row mb-3">
                        <div>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row text-center">
                        <!-- /.col -->
                        <div class="col-4 mt-4 ">
                            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                
                <p class="mb-0 ">
                    @if (Route::has('register'))
                        <p class="nav-item text-center">
                            <a class="nav-link" href="{{ route('login') }}">{{ __("Connexion") }}</a>
                        </p>
                    @endif
                </p>
            </section>
            <section class="col-md-4"></section>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
