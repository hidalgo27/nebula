@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/marketing-turistico/1.png')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Pida Cotización</div>
                                <div class="project-title">Marketing Turístico.</div>
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
                            <li class="fade-up" data-delay="10">Agencias de Viaje</li>
                            <li class="fade-up" data-delay="30">Hoteles y Hospedajes</li>
                            <li class="fade-up" data-delay="50">Restaurantes Turísticos</li>
                            <li class="fade-up" data-delay="50">Operadores de Tours</li>
                            <li class="fade-up" data-delay="50">Empresas de transporte turístico</li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-9">
                        <h4 class="project-sectionTitle fade-up">Introducción.</h4>
                        <p class="fade-up" data-delay="50">El viaje de cualquier cliente en el rubro del turismo no empieza en el momento de subir al avión. Su viaje empieza meses antes cuando navega a través de muchas paginas web y empieza a planificar sus vacaciones. ¿Está vuestra empresa presente en ese momento clave? Si no cuentas con una estrategia de marketing turístico adaptada a las exigencias del sector, tu respuesta será un no.</p>
                    </div>
                </div>

                <!--PROJECT PERIOD-->
                                <div class="row project-period mt-40">
                                    <div class="col-md-3">
{{--                                                                <h4 class="project-sectionTitle fade-up">Period</h4>--}}
{{--                                                                <p class="fade-up" data-delay="50">January to June 2018</p>--}}
                                    </div>

                                    <!--PROJECT WEBSITE LINK-->
                                    <div class="col-md-9">
                                        <p class="fade-up" data-delay="50">En NEBULA utilizamos herramientas de inteligencia para sacar el máximo partido a la estacionalidad propia de este sector; te ayudamos a alcanzar a tu público objetivo en el momento preciso en el que busca información para sus vacaciones; y empleamos las mejores estrategias de fidelización.</p>
                                    </div>

                                </div>
            </div>
        </div>
        <!--PROJECT INFO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/marketing-turistico/2.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn fade-up">Consiga más PAXS con NEBULA. Una solución todo-en-uno dentro de su presupuesto!</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/marketing-turistico/3.png')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente </div>
                        <div class="next-title fade-up"><a href="{{route('gastronomico_path')}}" class="cursor-link link-underline" data-type="page-transition">Marketing Gastronómico</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection

