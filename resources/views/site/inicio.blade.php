@extends('app')

@section('content')
<div role="main" class="main">
    <div class="slider-container rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider manual">
            <ul>
                <li data-transition="fade" data-title="Advocate Team" data-thumb="{{ asset('img/demos/law-firm/slides/slide-law-firm-1.jpg') }}">

                    <img src="{{ asset('img/demos/law-firm/slides/slide-law-firm-1.jpg') }}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption top-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="y:[-300%];opacity:0;s:500;">TEXTO 01</div>

                    <div class="tp-caption main-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-45"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5"
                         data-mask_in="x:0px;y:0px;">{{ $data['titulo']->valor }}</div>

                    <div class="tp-caption bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="5"
                         data-start="2000"
                         style="z-index: 5"
                         data-transform_in="y:[100%];opacity:0;s:500;">Descrição 01</div>

                    <a class="tp-caption btn btn-primary btn-lg"
                       data-hash
                       data-hash-offset="85"
                       href="#home-intro"
                       data-x="right" data-hoffset="100"
                       data-y="center" data-voffset="80"
                       data-start="2500"
                       data-whitespace="nowrap"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Solicite uma consulta</a>

                </li>
                <li data-transition="fade" data-title="Practice Areas" data-thumb="{{ asset('img/demos/law-firm/slides/slide-law-firm-2-thumb.jpg') }}">

                    <img src="{{ asset('img/demos/law-firm/slides/slide-law-firm-2.jpg') }}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-205"
                         data-start="1000"
                         style="z-index: 5; font-size: 40px;"
                         data-transform_in="y:[-300%];opacity:0;s:500;">ÁREAS DE ATUAÇÃO</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-145"
                         data-start="1500"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Criminal Law</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-100"
                         data-start="1800"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Business Law</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-55"
                         data-start="2100"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Health Law</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-10"
                         data-start="2400"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Divorce Law</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="35"
                         data-start="2700"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Capital Law</div>

                    <div class="tp-caption tp-caption-overlay-opacity bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="80"
                         data-start="3000"
                         data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Accident Law</div>

                    <a class="tp-caption btn btn-primary btn-lg"
                       data-hash
                       data-hash-offset="85"
                       href="#practice-areas"
                       data-x="right" data-hoffset="100"
                       data-y="center" data-voffset="150"
                       data-start="3500"
                       data-whitespace="nowrap"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Saiba Mais <i class="fa fa-long-arrow-right"></i></a>

                </li>
                <li data-transition="fade" data-title="Welcome to Porto" data-thumb="{{ asset('img/demos/law-firm/slides/slide-law-firm-3.jpg') }}">

                    <img src="{{ asset('img/demos/law-firm/slides/slide-law-firm-3.jpg') }}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption top-label"
                         data-x="left" data-hoffset="100"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="y:[-300%];opacity:0;s:500;">BEM VINDO À</div>

                    <div class="tp-caption main-label"
                         data-x="left" data-hoffset="100"
                         data-y="center" data-voffset="-45"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5"
                         data-mask_in="x:0px;y:0px;">{{ $data['titulo']->valor }}</div>

                    <div class="tp-caption bottom-label"
                         data-x="left" data-hoffset="100"
                         data-y="center" data-voffset="5"
                         data-start="2000"
                         style="z-index: 5"
                         data-transform_in="y:[100%];opacity:0;s:500;">Descrição 02</div>

                    <a class="tp-caption btn btn-primary btn-lg"
                       href="http://themeforest.net/item/porto-responsive-html5-template/4106987"
                       data-x="left" data-hoffset="100"
                       data-y="center" data-voffset="80"
                       data-start="2500"
                       data-whitespace="nowrap"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Saiba Mais</a>

                </li>
            </ul>
        </div>
    </div>
    <section class="section section-default section-no-border mt-none">
        <div class="container">
            <div class="row mb-xl">
                <div class="col-md-7">
                    <h2 class="mt-xl mb-none">Quem Somos</h2>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="mt-lg">{{ $data['quemsomos']->valor }}</p>

                    <a class="mt-md" href="demo-law-firm-about-us.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <h4 class="mt-xl mb-none">Nosso Compromisso</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="mt-lg">{{ $data['nossocompromisso']->valor }}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="practice-areas">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Áreas de Atuação</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>

        <div class="row mt-lg">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/criminal-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Criminal Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/business-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Business Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/health-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Health Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-md mb-xl">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/divorce-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Divorce Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/capital-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Capital Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="{{ asset('img/demos/law-firm/icons/accident-law.png') }}" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Accident Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-none">
                <section class="section section-primary match-height mt-xl" style="background-image: url({{ asset('img/patterns/fancy.jpg') }});">
                    <div class="row">
                        <div class="col-half-section col-half-section-right">
                            <h2 class="mb-none">Depoimentos</h2>
                            <div class="divider divider-light divider-small mb-xl">
                                <hr>
                            </div>

                            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': false, 'dots': true}">
                                <div>
                                    <div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
                                        <blockquote>
                                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="{{ asset('img/clients/client-1.jpg') }}" class="img-responsive img-circle" alt="">
                                            </div>
                                            <p><strong>John Smith</strong><span class="text-light">CEO & Founder - Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
                                        <blockquote>
                                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="{{ asset('img/clients/client-2.jpg') }}" class="img-responsive img-circle" alt="">
                                            </div>
                                            <p><strong>Jessica Smith</strong><span class="text-light">Marketing - Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
                                        <blockquote>
                                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="{{ asset('img/clients/client-3.jpg') }}" class="img-responsive img-circle" alt="">
                                            </div>
                                            <p><strong>Bob Smith</strong><span class="text-light">COO - Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6 p-none visible-md visible-lg">
                <section class="parallax section section-parallax match-height mt-xl" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ asset('img/demos/law-firm/parallax/parallax-law-firm.jpg') }}" style="min-height: 450px;">
                </section>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h2 class="mt-xl mb-none">Advogados</h2>
                    <div class="divider divider-primary divider-small divider-small-center mb-xl">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row mt-lg">
                <div class="owl-carousel owl-theme owl-team-custom show-nav-title" data-plugin-options="{'items': 4, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-22.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">David Doe</h4>
                        <p class="mb-none">Criminal Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-23.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Jeff Doe</h4>
                        <p class="mb-none">Business Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="mailto:mail@example.com"><i class="fa fa-envelope"></i><span>Email</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-24.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Craig Doe</h4>
                        <p class="mb-none">Divorce Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-25.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Richard Doe</h4>
                        <p class="mb-none">Accident Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-29.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Amanda Doe</h4>
                        <p class="mb-none">Health Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="{{ asset('img/team/team-30.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Jessica Doe</h4>
                        <p class="mb-none">Capital Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="parallax section section-text-light section-parallax section-center mt-xl" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/demos/law-firm/parallax/parallax-law-firm-2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="counters counters-text-light">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-user-following icons"></i>
                            <strong data-to="25000" data-append="+">0</strong>
                            <label>Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-diamond icons"></i>
                            <strong data-to="15">0</strong>
                            <label>Years in Business</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-badge icons"></i>
                            <strong data-to="3">0</strong>
                            <label>Awards</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-paper-plane icons"></i>
                            <strong data-to="178">0</strong>
                            <label>Successful Stories</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Últimas Notícias</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mt-xl">
            <div class="col-md-6">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="demo-law-firm-news-detail.html">
										<img src="{{ asset('img/demos/law-firm/blog/blog-law-firm-1.jpg') }}" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="demo-law-firm-news-detail.html">Award of Honor</a></h2>
										<span class="post-meta">
											<span>January 10, 2017 | <a href="#">John Doe</a></span>
										</span>
										<p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
										<a class="mt-md" href="demo-law-firm-news-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

            </div>
            <div class="col-md-6">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="demo-law-firm-news-detail.html">
										<img src="{{ asset('img/demos/law-firm/blog/blog-law-firm-2.jpg') }}" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="demo-law-firm-news-detail.html">The Best Lawyer</a></h2>
										<span class="post-meta">
											<span>January 10, 2017 | <a href="#">John Doe</a></span>
										</span>
										<p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
										<a class="mt-md" href="demo-law-firm-news-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

            </div>
        </div>
    </div>

    <section class="section section-background section-footer" style="background-image: url({{ asset('img/demos/law-firm/contact/contact-background.jpg') }}); background-position: 50% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <h2 class="mt-xl mb-none">Solicite uma consulta gratuita</h2>
                    <p>Consult with our experienced team for complete solutions to your legal issues.</p>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <form id="contactForm" action="php/contact-form.php" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" value="" placeholder="Seu nome" data-msg-required="Por favor digite seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" value="" placeholder="Seu e-mail *" data-msg-required="Por favor digite seu endereço de e-mail." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" value="" placeholder="Assunto" data-msg-required="Por favor digite o assunto." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea maxlength="5000" placeholder="Mensagem *" data-msg-required="Por favor digite a mensagem." rows="3" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary mb-xl" data-loading-text="Carregando...">

                                <div class="alert alert-success hidden" id="contactSuccess">
                                    Sua mensagem foi enviada com sucesso.
                                </div>

                                <div class="alert alert-danger hidden" id="contactError">
                                    Erro ao enviar a mensagem.
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection