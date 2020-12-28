@extends('layouts.app')
@section('content')


    <!--PIXI SLIDER START-->
    <div id="pixi-slider">

        <div class="slider-wrapper">
            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/pagina-web/9.png')}}" class="slide-item__image" alt="paginas web">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Desde s/.750</div>
                        <h2 class="item-title" data-splitting >Paginas Web.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/community-manager/6.png')}}" class="slide-item__image" alt="community manager">
                </div>
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.350</div>
                        <h2 class="item-title" data-splitting>Community Manager.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver detalles</a>
                    </div>
                </div>
            </div>


            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/logo_branding/6.png')}}" class="slide-item__image" alt="logos branding">
                </div>
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.99</div>
                        <h2 class="item-title" data-splitting>Logos / Branding.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/tiendas-online/1.png')}}" class="slide-item__image" alt="tiendas online">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.1200</div>
                        <h2 class="item-title" data-splitting >Tiendas Online.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>

            </div>


            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/marketing-gastronomico/1.png')}}" class="slide-item__image" alt="Fotoproducto">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Desde s/.20</div>
                        <h2 class="item-title" data-splitting >Fotoproducto + Producción audiovisual.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/campanas-publicitarias/8.png')}}" class="slide-item__image" alt="publicidad online">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Desde s/.50</div>
                        <h2 class="item-title" data-splitting >Publicidad Online Google & Facebook.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/pagina-web-2/63.png')}}" class="slide-item__image" alt="app">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Pida Cotización</div>
                        <h2 class="item-title" data-splitting >Apps + Sistemas a Medida.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/marketing-turistico/1.png')}}" class="slide-item__image" alt="app">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Pida Cotización</div>
                        <h2 class="item-title" data-splitting >Marketing Turístico.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="{{asset('images/marketing-gastronomico/6.png')}}" class="slide-item__image" alt="app">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Pida Cotización</div>
                        <h2 class="item-title" data-splitting >Marketing Gastronómico.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>


        </div>

        <!--PIXI SLIDER NAVIGATION START-->
        <div class="arrows-wrap">
            <div class="slider-nav slider-nav--prev parallax-wrap" data-nav="previous">
                <div class="parallax-icon">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="slider-nav slider-nav--next parallax-wrap" data-nav="next">
                <div class="parallax-icon">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
        <!--PIXI SLIDER NAVIGATION END-->

        <div id="canvas-container"></div>

    </div>
    <!--PIXI SLIDER END-->

@endsection
