<div class=" uk-margin-medium-top">

    <h1 class="b-h1 uk-margin-remove-top"> Blog </h1>
    
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        @foreach ($blogs as $blog)
        <div>
            <div class="uk-card b-card-rl">
                <img src="{{$blog->img}}" alt="Retos sexuales">
                <div class="b-blog-ct">
                    <h2 class="b-h2-w uk-margin-remove-bottom ">{{$blog->titulo}}</h2>
                    <label class="b-small ">10 marzo 2020</label>
                    <br>
                    <button class="uk-button b-button uk-width-1-1 uk-margin-small-top" type="button">Ver más</button>
                </div>
                <img class="b-share" src="{{asset('img/share.svg')}}" alt="">
                <img class="b-heartbr" src="{{asset('img/heartbr.svg')}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
    
</div>
