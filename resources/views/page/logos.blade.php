@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/logo_branding/1.jpg')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Desde s/.99</div>
                                <div class="project-title">Logos / Branding.</div>
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
                            <li class="fade-up" data-delay="10">Branding</li>
                            <li class="fade-up" data-delay="30">Identidad Corporativa</li>
                            <li class="fade-up" data-delay="50">Diseño de Marca</li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-9">
                        <h4 class="project-sectionTitle fade-up">Con nosotros tendrás la ayuda necesaria para realizar este cambio que tanto deseas y construir tu marca.</h4>
                        <p class="fade-up" data-delay="50">Escuchamos tus ideas, nos encargamos de crear y actualizar tu identidad, definir tu esencia y transmitir el mensaje correcto para generar impacto y recordación frente a tu público o futuros clientes.</p>
                    </div>
                </div>

                <!--PROJECT PERIOD-->
                <div class="row project-period mt-40">
                    <div class="col-md-3">
{{--                        <h4 class="project-sectionTitle fade-up">Period</h4>--}}
{{--                        <p class="fade-up" data-delay="50">January to June 2018</p>--}}
                    </div>

                    <!--PROJECT WEBSITE LINK-->
                    <div class="col-md-9">
                        <p class="fade-up" data-delay="50">En Nebula te ayudamos a definir el nombre comercial de tu empresa, diseñar un logo, crear el eslogan, diseñar el brochure, las tarjetas de presentación, y el papel y los sobres membretados; siempre de acuerdo al target, concepto e imagen que quieres que tu empresa proyecte. Se evalúa, público objetivo, nivel socio económico, edad, sexo, hábitos de consumo, etc.</p>
                    </div>

                </div>
            </div>
        </div>
        <!--PROJECT INFO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/logo_branding/3.jpg')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn fade-up">¡DESCUBRIMOS LA ESENCIA DE TU MARCA Y TRANSMITIMOS TU PASIÓN POR ELLA!</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/logo_branding/4.jpg')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Next</div>
                        <div class="next-title fade-up"><a href="{{route('tiendas_path')}}" class="cursor-link link-underline" data-type="page-transition">Tiendas / Online</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
