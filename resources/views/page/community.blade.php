@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/community-manager/2.jpg')}}')"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Desde s/.350</div>
                                <div class="project-title">Community Manager.</div>
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
                        <h4 class="project-sectionTitle fade-up">Services</h4>

                        <!--PROJECT SERVICES LIST-->
                        <ul class="project-servicesList">
                            <li class="fade-up" data-delay="10">Community Manager</li>
                            <li class="fade-up" data-delay="30">Actualización de Redes</li>
                            <li class="fade-up" data-delay="50">Video Portadas</li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-9">
                        <h4 class="project-sectionTitle fade-up">Tenemos la estrategia en RRSS que necesita tu negocio</h4>
                        <p class="fade-up" data-delay="50">Nos encargamos de gestionar, desarrollar y monitorear tu marca en redes sociales. Gestionamos tu emprendimiento a nivel online, CREANDO y manteniendo relaciones estables y duraderas con tus clientes, fans y usuarios en general.</p>
                    </div>
                </div>

                <!--PROJECT PERIOD-->
{{--                <div class="row project-period mt-40">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <h4 class="project-sectionTitle fade-up">Period</h4>--}}
{{--                        <p class="fade-up" data-delay="50">January to June 2018</p>--}}
{{--                    </div>--}}

{{--                    <!--PROJECT WEBSITE LINK-->--}}
{{--                    <div class="col-md-9">--}}
{{--                        <a href="https://www.behance.net/gallery/65179653/Fitness-Editorial" target="_blank" class="link-underline cursor-link fade-up" data-delay="0">Visit Live Version</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div>
        </div>
        <!--PROJECT INFO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/community-manager/3.jpg')}}" alt="community manager">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="text-animate text-fadeInUp">SOCIAL MEDIA MARKETING</h3>
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <p>El Social Media Marketing es una de las formas más poderosas del Marketing digital, diseñado para mejorar la visibilidad de tu marca, incrementar el engagement, conseguir los KPI’ claves y mejorar tu ROI.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/community-manager/4.jpg')}}" alt="community manager">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente</div>
                        <div class="next-title fade-up"><a href="{{route('logos_path')}}" class="cursor-link link-underline" data-type="page-transition">Logos / Branding</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
