@extends('layouts.app')
@section('section')
    <!--PAGE CONTENT START-->
    <div class="page-content">

        <!--PROJECT HERO SECTION START-->
        <div class="project-hero">

            <!--PROJECT HERO BACKGROUND IMAGE-->
            <div class="hero-image-wrapper">
                <div class="hero-bg-image" style="background-image: url('{{asset('images/pagina-web-2/1.jpg')}}')"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hero-content">
                            <div class="hero-inner">
                                <div class="project-subtitle">Pida Cotización</div>
                                <div class="project-title">Apps + Sistemas a Medida.</div>
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
                    <div class="col-md-6">
                        <h4 class="project-sectionTitle fade-up">Apps</h4>
                        <p>Desarrollamos aplicaciones móviles nativas para sistemas operativo iOS (iPhone e iPad) y Android. Ventajas:</p>

                        <!--PROJECT SERVICES LIST-->
                        <ul class="project-servicesList">
                            <li class="fade-up" data-delay="10">
                                <h4>1. Nuevo canal de venta</h4>
                                <p>Fortalecerás tu marca y abrirás un nuevo canal de venta donde los usuarios podrán realizar una compra o solicitar tus servicios.</p>

                            </li>
                            <li class="fade-up" data-delay="30">
                                <h4>2. Fidelización de clientes</h4>
                                <p>Tener una App permitirá a tus clientes tener más información de valor sobre tu marca y así lograrás una mejor fidelización.</p>
                            </li>
                            <li class="fade-up" data-delay="50">
                                <h4>Reforzamiento de marca</h4>
                                <p>Cuando un cliente usa regularmente tu aplicación móvil, se acordará de tu marca. Lo que te ayuda a posicionarte mejor.</p>
                            </li>
                        </ul>
                    </div>

                    <!--PROJECT SUMMARY-->
                    <div class="col-md-6">
                        <h4 class="project-sectionTitle fade-up">Sistemas.</h4>
                        <p>Con un sistema a medida implementado en su negocio, usted podrá reducir costos y aumentar sus ingresos. Nuestros sistemas se adaptan a las necesidades de su empresa. Nuestro principal objetivo es brindarle una solución eficiente y efectiva para simplificar sus procesos.</p>
                        <h4>ERP (Enterprise Resource Planning)</h4>
                        <p>Engloba las funciones internas de la empresa: compras, ventas, gestión de la producción, planificación, etc.</p>
                        <h4>BI (Business Intelligence)</h4>
                        <p>Sistema para empresas que maneja toda la información diaria y estratégica. Ayuda a la toma rápida de decisiones y permite conocer las desviaciones de los objetivos.</p>
                        <h4>Recursos Humanos</h4>
                        <p>Gestiona el activo más importante de la empresa: el personal.  Evalúe el desempeño y lleve el registro de la documentación de sus empleados de manera digital.</p>
                        <h4>ERP para PYMES</h4>
                        <p>Recomendado para pequeñas y medianas empresas porque se adapta al tamaño, los recursos y procesos, facilita el manejo de la información, minimizar costes y centralizar la información.</p>
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
                <img src="{{asset('images/pagina-web-2/4.jpg')}}" alt="logos">
            </div>
        </div>
        <!--PROJECT FULL PARALLAX  IMAGE END-->



        <!--NEXT PROJECT LINK START-->
        <div class="next-project pt-row pb-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="next-subtitle fade-up">Siguiente </div>
                        <div class="next-title fade-up"><a href="{{route('turismo_path')}}" class="cursor-link link-underline" data-type="page-transition">Marketing Turístico</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--NEXT PROJECT LINK END-->

    </div>
    <!--PAGE CONTENT END-->
@endsection
