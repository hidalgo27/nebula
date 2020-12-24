@extends('layouts.app')
@section('content')

    <div id="scroll-content">
    </div>

<div class="page-content">

    <!--PIXI SLIDER START-->
    <div id="pixi-slider">

        <div class="slider-wrapper">
            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project1/1.jpg" class="slide-item__image" alt="Project Image">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.750</div>
                        <h2 class="item-title" data-splitting >Paginas Web.</h2>
                        <a href="{{route('web_path')}}" data-type="page-transition" class="item-link link-underline cursor-link">Ver detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project2/1.jpg" class="slide-item__image" alt="Project Image">
                </div>
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.350</div>
                        <h2 class="item-title" data-splitting>Community Manager.</h2>
                        <a href="project02.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver detalles</a>
                    </div>
                </div>
            </div>


            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project3/1.jpg" class="slide-item__image" alt="Project Image">
                </div>
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.99</div>
                        <h2 class="item-title" data-splitting>Logos / Branding.</h2>
                        <a href="project03.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project4/1.jpg" class="slide-item__image" alt="Project Image">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">desde s/.1200</div>
                        <h2 class="item-title" data-splitting >Tiendas Online.</h2>
                        <a href="project04.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>

            </div>


            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project5/1.jpg" class="slide-item__image" alt="Project Image">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Desde s/.20</div>
                        <h2 class="item-title" data-splitting >Fotoproducto + Producción audiovisual.</h2>
                        <a href="project05.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project5/1.jpg" class="slide-item__image" alt="Project Image">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Desde s/.50</div>
                        <h2 class="item-title" data-splitting >Publicidad Online Google & Facebook.</h2>
                        <a href="project05.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!--SLIDER ITEM-->
            <div class="slider-item">
                <div class="slide-image">
                    <img src="images/projects/project5/1.jpg" class="slide-item__image" alt="Project Image">
                </div>

                <div class="slide-content">
                    <div class="slide-content-inner">
                        <div class="item-cat">Pida Cotización</div>
                        <h2 class="item-title" data-splitting >Apps + Sistemas a Medida.</h2>
                        <a href="project05.html" data-type="page-transition" class="item-link link-underline cursor-link">Ver Detalles</a>
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

</div>
@endsection
