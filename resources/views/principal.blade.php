@extends('layouts.app')
<a class="uk-position-top-right uk-margin-medium-top uk-margin-small-right uk-link-muted" href="{{url('/')}}" uk-icon="icon:  sign-out; ratio: 2"></a>

@section('content')


<h1 class="b-h1 uk-margin-remove-top"> Slider </h1>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">
    <ul class="uk-slider-items uk-grid">
        @foreach ($clasificaciones as $clasificacion)
        <li class="uk-width-3-4 b-width b-rel">
            <div class="uk-cover-container b-panel">
                <img src="{{$clasificacion->imagen}}" alt="{{$clasificacion->slug}}">
            </div>
            <a href="#{{$clasificacion->slug}}" uk-toggle>
                <img class="b-back" src="{{asset('img/elipse.svg')}}" alt="">
                <img class="b-info" src="{{asset('img/info.svg')}}" alt=""> 
            </a>
            <h2 class="b-tittle">{{$clasificacion->nombre}}</h2>
            <div class="uk-inline b-icon">
                <button uk-icon="icon: more-vertical" type="button"></button>
                <div class="b-list" uk-dropdown="pos: top-right">
                    <ul class="uk-nav uk-dropdown-nav">
                        @foreach ($atracciones as $atraccion) 
                        @if($atraccion->idc ==  $clasificacion->id)
                            <li class="b-li">
                                <a class="b-option" href="#">{{$atraccion->anombre}}</a>
                            </li> 
                        @endif 
                        @endforeach
                    </ul>
                </div>
            </div>
        </li>

        <div id="{{$clasificacion->slug}}" class="uk-flex-bottom" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical b-modal">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="b-h2">{{$clasificacion->nombre}}</h2>
                <p class="b-p">{{$clasificacion->descripcion}}</p>
            </div>
        </div>
          
        @endforeach
    </ul>

    
    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>


@include('components.blogCards')

@endsection