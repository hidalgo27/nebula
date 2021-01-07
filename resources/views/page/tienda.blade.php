@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">
            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/tiendas-online/1.png')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Desde s/.1200</div>
                                <div class="project-title">Tiendas Online.</div>
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
                            <li class="fade-up" data-delay="10">Tienda Bronce</li>
                            <li class="fade-up" data-delay="30">Tienda Plata</li>
                            <li class="fade-up" data-delay="50">Tienda Oro</li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-9">
                        <h4 class="project-sectionTitle fade-up">E-Commerce</h4>
                        <p class="fade-up" data-delay="50">Desarrollamos tiendas online administrables a través de la cual podrás gestionar tus productos, precios, stock y clientes; para pequeñas, medianas y grandes empresas que deseen  aumentar considerablemente sus ventas en muy corto tiempo.</p>
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
{{--                        <a href="https://www.behance.net/gallery/87206167/HOFO" target="_blank" class="link-underline cursor-link fade-up" data-delay="0">Visit Live Version</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div>
        </div>
        <!--PROJECT INFO END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/tiendas-online/3.png')}}" alt="">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--PROJECT INTRO START-->
        <div class="project-intro pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h3 class="text-center text-animate text-fadeIn">EL FUTURO DEL COMERCIO ELECTRÓNICO ES TUYO</h3>
                        <p class="fade-up text-center" data-delay="50">La mejores tiendas online no son solo las que se ven mejor, sino la que es capaz de generar mayores oportunidades de negocio, y para ello la visibilidad de calidad es fundamental.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--PROJECT INTRO END-->

        <!--PROJECT IMAGE CAROUSEL START-->
        <div class="project-image-carousel">
            <div class="container">
                <div class="row">
                    <div class="col owl-carousel owl-theme link-popup fade-up">

                        <!--CAROUSEL ITEM-->
                        <a href="{{asset('images/tiendas-online/5.png')}}" class="image-link">
                            <img src="{{asset('images/tiendas-online/5.png')}}" alt="e-commerce">
                        </a>

                        <!--CAROUSEL ITEM-->
                        <a href="{{asset('images/tiendas-online/6.png')}}" class="image-link">
                            <img src="{{asset('images/tiendas-online/6.png')}}" alt="e-commerce">
                        </a>

                        <!--CAROUSEL ITEM-->
                        <a href="{{asset('images/tiendas-online/8.png')}}" class="image-link">
                            <img src="{{asset('images/tiendas-online/8.png')}}" alt="e-commerce">
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <!--PROJECT IMAGE CAROUSEL END-->

        <!--PROJECT FULL PARALLAX IMAGE START-->
        <div class="project-image pt-row">
            <div class="project-image--full bg-parallax fade-up">
                <img src="{{asset('images/tiendas-online/3.png')}}" alt="e-commerce">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX IMAGE END-->

        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente</div>
                        <div class="next-title fade-up"><a href="{{route('fotoproducto_path')}}" class="cursor-link link-underline" data-type="page-transition">Fotoproducto + Producción audiovisual.</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
