@extends('layouts.app')

@section('content')

<div class="uk-text-center">
    <h1 class="b-h1 uk-margin-top">Crear una cuenta</h1>
    <h2 class="b-h2 uk-margin-remove-top">Regístrate para obtener beneficios Kinky.</h2>
</div>

<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div class="uk-margin-large-right">
        <div class="uk-card b-display">
            <div class=" uk-margin-small-right">
                <img src="{{asset('img/heart.svg')}}"  alt="">
            </div>
            <p class="b-content uk-margin-remove-top"><strong>Guarda</strong> tus Love Hotels y Habitaciones
                <br>
                favoritas.
            </p>
        </div>
    </div>
    <div class="uk-margin-remove-top">
        <div class="uk-card b-display">
            <div class=" uk-margin-small-right">
                <img src="{{asset('img/mail.svg')}}"  alt="">
            </div>
            <p class="b-content uk-margin-remove-top"><strong>Recibe</strong> el mejor contenido.</p>
        </div>
    </div>
    <div class="uk-margin-remove-top">
        <div class="uk-card b-display">
            <div class=" uk-margin-small-right">
                <img src="{{asset('img/like.svg')}}"  alt="">
            </div>
            <p class="b-content uk-margin-remove-top"><strong>Califica</strong> los Love Hotels y sus
                <br>
                habitaciones.
            </p>
        </div>
    </div>
</div>

@include('components.form')

@endsection

