@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/fotoproductos/1.jpg')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Desde s/.20</div>
                                <div class="project-title">Fotoproducto + Producción audiovisual.</div>
                            </div>
                            <div id="scroll-down" class="btn-down cursor-hide">
                                <div class="icon-scroll"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT HERO SECTION END-->

        <!--PROJECT INFO START-->
        <div class="project-info pt-row pb-row">
            <div class="container">

                <!--PROJECT SERVICES-->
                <div class="row project-services">
                    <div class="col-md-3">
                        <h4 class="project-sectionTitle fade-up">Servicios</h4>

                        <!--PROJECT SERVICES LIST-->
                        <ul class="project-servicesList">
                            <li class="fade-up" data-delay="10">Fotoproducto</li>
                            <li class="fade-up" data-delay="30">Producción de Videos</li>
                            <li class="fade-up" data-delay="50">Sesión Fotográfica</li>
                            <li class="fade-up" data-delay="50">Fotomontajes</li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-9">
                        <h4 class="project-sectionTitle fade-up">Introducción.</h4>
                        <p class="fade-up" data-delay="50">Uno de los principales motivos para contar con buenas imágenes de tus productos en tu ecommerce es la posibilidad de diferenciarte de tu competencia. Si tus imágenes son de calidad y captan la atención, seguramente otorgarán personalidad a tu web y harán que destaque del resto de páginas similares.</p>
                    </div>
                </div>

                <!--PROJECT PERIOD-->
{{--                <div class="row project-period mt-40">--}}
{{--                    <div class="col-md-3">--}}
{{--                        --}}{{--                        <h4 class="project-sectionTitle fade-up">Period</h4>--}}
{{--                        --}}{{--                        <p class="fade-up" data-delay="50">January to June 2018</p>--}}
{{--                    </div>--}}

{{--                    <!--PROJECT WEBSITE LINK-->--}}
{{--                    <div class="col-md-9">--}}
{{--                        <p class="fade-up" data-delay="50">la imagen de cualquier negocio es vital para convencer y comunicar, sobre todo para generar confianza en el terreno de la venta online.</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div>
        </div>
        <!--PROJECT INFO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/fotoproductos/2.jpg')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn fade-up">la imagen de cualquier negocio es vital para convencer y comunicar, sobre todo para generar confianza en el terreno de la venta online.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/fotoproductos/3.jpg')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente </div>
                        <div class="next-title fade-up"><a href="{{route('publicidad_path')}}" class="cursor-link link-underline" data-type="page-transition">Publicidad Online Google & Facebook</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
