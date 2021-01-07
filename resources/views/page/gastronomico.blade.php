@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/marketing-gastronomico/1.png')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Pida Cotización</div>
                                <div class="project-title">Marketing Gastronómico.</div>
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
{{--                    <div class="col-md-3">--}}
{{--                        <h4 class="project-sectionTitle fade-up">Servicios</h4>--}}

{{--                        <!--PROJECT SERVICES LIST-->--}}
{{--                        <ul class="project-servicesList">--}}
{{--                            <li class="fade-up" data-delay="10">Fotoproducto</li>--}}
{{--                            <li class="fade-up" data-delay="30">Producción de Videos</li>--}}
{{--                            <li class="fade-up" data-delay="50">Sesión Fotográfica</li>--}}
{{--                            <li class="fade-up" data-delay="50">Fotomontajes</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-12">
{{--                        <h4 class="project-sectionTitle fade-up">Introducción.</h4>--}}
                        <p class="fade-up" data-delay="50">En NEBULA nos encargamos de elaborar un plan de marketing gastronómico que genere resultados. Primero en conjunto definiremos a nuestro buyer persona para poder satisfacer sus necesidades culinarias.</p>
                        <p><b>Plan ejemplo</b></p>
                        <ul>
                            <li>Situación actual: cómo está el restaurante o negocio en estos momentos.</li>
                            <li>Objetivos: aquí debemos tener claro cuál es la meta a conseguir. ¿Llegar a nuevos clientes? ¿Fidelizar a los clientes actuales? ¿Introducir una nueva carta?</li>
                            <li>Estrategia: qué estrategia usaremos para alcanzar el objetivo que nos hemos marcado. Por ejemplo, para conseguir nuevos clientes, podemos implantar una estrategia de marketing de contenidos incluyendo fotos profesionales. Igualmente reforzamiento del branding, marketing social , fidelización, estrategia de email marketing entre otras.</li>
                            <li>Acciones: en conjunto con nuestro equipo de especialistas en NEBULA.</li>
                            <li>Medir:  resultados de cada campaña.</li>
                        </ul>
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
                <img src="{{asset('images/marketing-gastronomico/3.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn fade-up">¿Estas sacando el máximo provecho a tu restaurante?
                            <br>
                            El arte de gestionar correctamente el restauranteHI es tan importante, o más, que el arte de cocinar.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/marketing-gastronomico/2.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente </div>
                        <div class="next-title fade-up"><a href="{{route('web_path')}}" class="cursor-link link-underline" data-type="page-transition">Páginas Web</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
