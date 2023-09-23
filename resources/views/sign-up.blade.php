@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="border-radius: 1rem; background-color:#4a05cb;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    Eternal Dreams - Membres
                                    <h2 class="fw-bold mb-2 text-uppercase"><br>S'inscrire</h2>
                                    <p class="text-white-50 mb-5">Créer vos identifiants !</p>

                                    <div class="form-outline mb-4">
                                        <input id="name" id="typeNameX"  type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name..." required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input id="email" id="typeEmailX" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email..." required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Mot de passe ...">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input id="password-confirm" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation Mot de passe...">
                                        <!-- Utilisation de "password_confirmation" comme nom -->
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>



                                    <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                        {{ __('S\'inscrire') }}
                                    </button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Vous avez un compte ? <a href="/login" class="text-white-50 fw-bold">Connectez vous !</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>






@endsection
