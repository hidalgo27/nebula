@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/campanas-publicitarias/1.png')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Desde s/.50</div>
                                <div class="project-title">Publicidad Online Google & Facebook.</div>
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
                        <h4 class="project-sectionTitle fade-up">Publicidad.</h4>
                        <p class="fade-up" data-delay="50">Este modelo publicitario forma parte de lo que se conoce como SEM (Search Engine Marketing), en el cual el cliente puede colocar anuncios -de forma relevante- en los resultados de búsqueda o en portales relacionados directamente con la temática de su negocio.Su negocio no se puede quedar atrás. Una campaña de SEM es fundamental para aumentar sus ventas  o conseguir cualquier otro de sus objetivos en Internet. Usted sólo pagará a Google por cada clic que los clientes hagan en su anuncio.</p>
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
                <img src="{{asset('images/campanas-publicitarias/2.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn fade-up"> Contamos con expertos en gestión de publicidad de Google, que le ayudarán a dirigir todos los procesos de una campaña de SEM.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/campanas-publicitarias/4.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente </div>
                        <div class="next-title fade-up"><a href="{{route('aplicaciones_path')}}" class="cursor-link link-underline" data-type="page-transition">Apps + Sistemas a Medida</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
