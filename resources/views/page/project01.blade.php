@extends('layouts.app')
@section('content')
    <!--SCROLL CONTENT START-->
    <div id="scroll-content">

        <!--PAGE CONTENT START-->
        <div class="page-content">

            <!--HERO SECTION START-->
            <div class="project-hero">

                <!--PROJECT HERO BACKGROUND IMAGE-->
                <div class="hero-image-wrapper">
                    <div class="hero-bg-image" style="background-image: url('images/projects/project1/1.jpg')"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="hero-content">
                                <div class="hero-inner">
                                    <div class="project-subtitle">Model Design</div>
                                    <div class="project-title">Golf Watch</div>
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
                            <h4 class="project-sectionTitle fade-up">Services</h4>

                            <!--PROJECT SERVICES LIST-->
                            <ul class="project-servicesList">
                                <li class="fade-up" data-delay="10">Photography</li>
                                <li class="fade-up" data-delay="30">Motion Design</li>
                                <li class="fade-up" data-delay="50">Visual Design</li>
                            </ul>
                        </div>

                        <!--PROJECT SUMMARY-->
                        <div class="col-md-9">
                            <h4 class="project-sectionTitle fade-up">Summary</h4>
                            <p class="fade-up" data-delay="50">A watch is a portable timepiece intended to be carried or worn by a person. It is designed to keep a consistent movement despite the motions caused by the person's activities. A wristwatch is designed to be worn around the wrist, attached by a watch strap or other type of bracelet, including metal bands, leather straps or any other kind of bracelet. A pocket watch is designed for a person to carry in a pocket, often attached to a chain. The study of timekeeping is known as horology.</p>
                        </div>
                    </div>

                    <!--PROJECT PERIOD-->
                    <div class="row project-period mt-40">
                        <div class="col-md-3">
                            <h4 class="project-sectionTitle fade-up">Period</h4>
                            <p class="fade-up" data-delay="50">January to June 2018</p>
                        </div>

                        <!--PROJECT WEBSITE LINK-->
                        <div class="col-md-9">
                            <a href="https://www.behance.net/gallery/93523479/VC-T7" target="_blank" class="link-underline cursor-link fade-up" data-delay="0">Visit Live Version</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--PROJECT INFO END-->

            <!--PROJECT FULL PARALLAX IMAGE START-->
            <div class="project-image">
                <div class="project-image--full bg-parallax fade-up">
                    <img src="images/projects/project1/2.jpg" alt="">
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
                            <a href="images/projects/project1/3.jpg" class="image-link fade-up">
                                <img src="images/projects/project1/3.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-40">
                        <div class="col-6">
                            <a href="images/projects/project1/4.jpg" class="image-link fade-up">
                                <img src="images/projects/project1/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="images/projects/project1/5.jpg" class="image-link fade-up">
                                <img src="images/projects/project1/5.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-40">
                        <div class="col">
                            <a href="images/projects/project1/6.jpg" class="image-link fade-up">
                                <img src="images/projects/project1/6.jpg" alt="">
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
                            <div class="next-subtitle fade-up">Next</div>
                            <div class="next-title fade-up"><a href="project02.html" class="cursor-link link-underline" data-type="page-transition">Sports Fitness</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--NEXT PROJECT LINK END-->

        </div>
        <!--PAGE CONTENT END-->

        <!--FOOTER START-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="copyright-text">
                            <p>&copy; 2020 Kurt. All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="scroll-top" class="back-top">
                            <span>Back To Top</span>
                            <div class="arrow-up">
                                <div class="parallax-wrap">
                                    <div class="parallax-icon">
                                        <i class="fas fa-arrow-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!--FOOTER END-->

    </div>
    <!--SCROLL CONTENT END-->
@endsection
