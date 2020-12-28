@extends('layouts.app')
@section('section')


        <!--PAGE CONTENT START-->
        <div class="page-content">

            <!--HERO SECTION START-->
            <div class="project-hero">

                <!--PROJECT HERO BACKGROUND IMAGE-->
                <div class="hero-image-wrapper">
                    <div class="hero-bg-image" style="background-image: url('{{asset('images/pagina-web/7.png')}}')"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="hero-content">
                                <div class="hero-inner">
                                    <div class="project-subtitle">Desde s/.750</div>
                                    <div class="project-title">Paginas Web.</div>
                                </div>
                                <div id="scroll-down" class="btn-down cursor-hide">
                                    <div class="icon-scroll"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--HERO SECTION END-->

            <!--PROJECT INFO START-->
            <div class="project-info pt-row pb-row">
                <div class="container">

                    <!--PROJECT SERVICES-->
                    <div class="row project-services">
                        <div class="col-md-3">
                            <h4 class="project-sectionTitle fade-up">Servicios</h4>

                            <!--PROJECT SERVICES LIST-->
                            <ul class="project-servicesList">
                                <li class="fade-up" data-delay="10">Diseño de Paginas Web</li>
                                <li class="fade-up" data-delay="30">Hosting & Dominios</li>
                                <li class="fade-up" data-delay="50">SEO</li>
                            </ul>
                        </div>

                        <!--PROJECT SUMMARY-->
                        <div class="col-md-9">
                            <h4 class="project-sectionTitle fade-up">Introducción</h4>
                            <p class="fade-up" data-delay="50">Creamos páginas web a medida con alto nivel gráfico, intuitivas, emotivas, aplicando diseño inteligente que cumpla con sus objetivos de negocio.
                                Contamos con especialistas en diseño para que tu web sea visible desde cualquier dispositivo ya sea smartphone, tablet o computadora de escritorio.
                            </p>
                        </div>
                    </div>

                    <!--PROJECT PERIOD-->
                    <div class="row project-period mt-40">
                        <div class="col-md-3">
{{--                            <h4 class="project-sectionTitle fade-up">Period</h4>--}}
{{--                            <p class="fade-up" data-delay="50">January to June 2018</p>--}}
                        </div>

                        <!--PROJECT WEBSITE LINK-->
                        <div class="col-md-9">
{{--                            <a href="https://www.behance.net/gallery/93523479/VC-T7" target="_blank" class="link-underline cursor-link fade-up" data-delay="0">Visit Live Version</a>--}}
                            <p>Optimizamos y pulimos cada detalle para que tu nueva página web sea escalable, medible y compatible con otras acciones futuras, como el SEO.</p>
                        </div>

                    </div>
                </div>
            </div>
            <!--PROJECT INFO END-->

            <!--PROJECT FULL PARALLAX IMAGE START-->
            <div class="project-image">
                <div class="project-image--full bg-parallax fade-up">
                    <img src="{{asset('images/pagina-web/1.png')}}" alt="paginas web">
                </div>
            </div>
            <!--PROJECT FULL PARALLAX IMAGE END-->

            <!--PROJECT INTRO START-->
            <div class="project-intro pt-row pb-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h3 class="text-center text-animate text-fadeIn fade-up" data-splitting="words">I’ve always loved watches my whole life. When I was growing up, I always thought of having a great watch as that next step – of making it, of a rite of passage.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--PROJECT INTRO END-->

            <!--PROJECT IMAGES START-->
            <div class="project-images link-popup">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{asset('images/pagina-web/portafolio/gotoperu.png')}}" class="image-link fade-up">
                                <img src="{{asset('images/pagina-web/portafolio/gotoperu.png')}}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-40">
                        <div class="col-6">
                            <a href="{{asset('images/pagina-web/portafolio/kaoba.png')}}" class="image-link fade-up">
                                <img src="{{asset('images/pagina-web/portafolio/kaoba.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('images/pagina-web/portafolio/orion.png')}}" class="image-link fade-up">
                                <img src="{{asset('images/pagina-web/portafolio/orion.png')}}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-40">
                        <div class="col">
                            <a href="{{asset('images/pagina-web/portafolio/isabel.png')}}" class="image-link fade-up">
                                <img src="{{asset('images/pagina-web/portafolio/isabel.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--PROJECT IMAGES END-->

            <!--NEXT PROJECT LINK START-->
            <div class="next-project pt-row pb-row">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="next-subtitle fade-up">Siguiente</div>
                            <div class="next-title fade-up"><a href="{{route('web_path')}}" class="cursor-link link-underline" data-type="page-transition">Community Manager</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--NEXT PROJECT LINK END-->

        </div>
        <!--PAGE CONTENT END-->


@endsection
