@extends('layouts.user')
@section('content')
<div class="uk-position-absolute uk-container" style="left:1; right:0;">
    <img src="{{ asset('user/pictures/BBO-logo-name.png') }}" width="200px" height="200px">
</div>


<div class="uk-position-absolute uk-height-viewport uk-flex uk-flex-middle">
    <div class="uk-flex uk-flex-column uk-background-default uk-box-shadow-medium">
        <a href="{{ route('login.facebook') }}" class="uk-padding-small">
            <span class="fab fa-facebook fa-2x :: uk-text-primary"></span>
        </a>
        <a href="{{ route('login.github') }}" class="uk-padding-small">
            <span class="fab fa-github fa-2x :: uk-text-primary"></span>
        </a>
        <a href="{{ route('login.google') }}" class="uk-padding-small">
            <span class="fab fa-google-plus fa-2x :: uk-text-primary"></span>
        </a>
    </div>
</div>








<div class="uk-flex uk-flex-middle uk-width-viewport uk-height-viewport" style="padding:10%">


    <div class="uk-margin-auto uk-box-shadow-large uk-width-1-2@s">
        <div class="cs-tile-secondary uk-padding">
            <div class="uk-text-center">
                <img src="{{ asset('user/pictures/BBO-logo-masuk.png') }}" width="150px" height="150px">
            </div>
            <form class="uk-position-relative" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="uk-margin-small-bottom">
                    <input id="name" type="text" class="uk-input uk-text-secondary @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="uk-margin-small-bottom">
                    <input id="email" type="email" class="uk-input uk-text-secondary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="uk-margin-small-bottom">
                    <input id="password" type="password" class="uk-input uk-text-secondary @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="uk-margin-small-bottom">
                    <input id="password-confirm" type="password" class="uk-input uk-text-secondary" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                </div>
                <div class="uk-position-absolute uk-width-expand uk-padding uk-padding-remove-vertical" style="top:120%;">
                    <button class="uk-button uk-button-primary uk-width-expand uk-box-shadow-large" type="submit">masuk</button>
                </div>
                <p class="existing-user text-center pt-4 mb-0">Already have an acount?&nbsp;<a href="{{ url('login') }}">Login</a></p>
            </form>
        </div>
        <br>

        <div class="uk-container">
            <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-expand uk-padding-small">
                    <a href="{{ route('login.google') }}" class="uk-button uk-button-default uk-width-expand uk-box-shadow-large">
                        <span class="fab fa-google"></span>
                    </a>
                </div>
                <p class="uk-flex uk-flex-middle">||</p>
                <div class="uk-width-expand uk-padding-small">
                    <a href="{{ route('login.facebook') }}" class="uk-button uk-button-default uk-width-expand uk-box-shadow-large">
                        <span class="fab fa-facebook"></span>
                    </a>
                </div>
            </div>
        </div>


        <div class="uk-box-shadow-medium uk-width-expand" style="top:1; bottom:0;">
            <div class="uk-container uk-text-center uk-padding-small">
                <h6><small>Copyright 2020 <a href="#">Baca Buku Online</a>, All Right Reserved.</small></h6>
            </div>
        </div>

    </div>


</div>
@endsection
