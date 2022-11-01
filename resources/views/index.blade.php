@extends('layout')
@section('header')
<div class="video">
    <div class="video__caption">
        <div class="video__fold">
            <video autoplay="autoplay" preload="none" loop="loop" muted="muted" playsinline="playsinline"
                class="video__element play-on-load">
                <source src="video/otimizado.mp4" type="video/mp4"></video>
            <div class="loader" style="display: none;">
                <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(1 1)" stroke-width="2">
                            <circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle>
                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18"
                                    dur="1s" repeatCount="indefinite"></animateTransform>
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="video__controls">
            <a href="javascript:void(0);" class="video__play video__pause">Play</a> </div>
    </div>
</div>
@endsection
@section('content')
<section id="about-us" class="h-bg no-padding col-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 onStep" data-animation="fadeInRight" data-time="500">
                <div class="sp-padding pb-0">
                    <h3 class="bg-dots">
                        Alguma Chamada de Escolha
                        <span class="devider-cont"></span>
                    </h3>

                    <div class="owl-carousel imagem-produtos-container">
                        <div class="img-item" id="produto1"
                            style="background-image: url({{ asset('img/produtos/slide/1.png') }})">
                        </div>
                        <div class="img-item" id="produto2"
                            style="background-image: url({{ asset('img/produtos/slide/2.JPG') }})">
                        </div>
                        <div class="img-item" id="produto3"
                            style="background-image: url({{ asset('img/produtos/slide/3.jpg') }})">
                        </div>
                        <div class="img-item" id="produto4"
                            style="background-image: url({{ asset('img/produtos/slide/4.png') }})">
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</section>
{{-- <!-- section -->
        <section class="choc-features no-bottom no-top no-padding">

            <!-- text -->
            <div class="container-fluid">
                <div class="row">

                    <div class="no-gutter">

                        <div class="col-md-4">
                            <div class="features no-margin">
                                <div class="bg-img" style="background-image: url('img/bg-serv-1.jpeg')">
                                    <div class="overlay"></div>
                                    <h3 class="heading color autoheight">Minimalismo</h3>
                                    <p class="content autoheight-1">Qui ut ceteros comprehensam. Cu eos sale
                                        sanctus eligendi, id ius elitr saperet,ocurreret
                                        pertinacia pri an. No mei nibh consectetuer</p>
                                    <a href="#"><span class="shine"></span>Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="features no-margin">
                                <div class="bg-img" style="background-image: url('img/bg-serv-2.jpeg')">
                                    <div class="overlay"></div>
                                    <h3 class="heading color autoheight">Interior</h3>
                                    <p class="content autoheight-1">Qui ut ceteros comprehensam. Cu eos sale
                                        sanctus eligendi, id ius elitr saperet,ocurreret
                                        pertinacia pri an. No mei nibh consectetuer</p>
                                    <a href="#"><span class="shine"></span>Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="features no-margin">
                                <div class="bg-img" style="background-image: url('img/bg-serv-3.jpeg')">
                                    <div class="overlay"></div>
                                    <h3 class="heading color autoheight">Arquitetura</h3>
                                    <p class="content autoheight-1">Qui ut ceteros comprehensam. Cu eos sale
                                        sanctus eligendi, id ius elitr saperet,ocurreret
                                        pertinacia pri an. No mei nibh consectetuer</p>
                                    <a href="#"><span class="shine"></span>Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- section end --> --}}


<section id="call-action" class="col-content white-bg">
    <div class="container-fluid m-5-hor">
        <div class="row p-180">
            <div class="col-md-6 onStep" data-animation="fadeIn" data-time="500">
                <div class="sp-padding">
                    <h2 class="full">
                        Nós somos um time <strong>criativo</strong> para construir seu sonho ou sua estrutura.
                        <span class="devider-cont"></span>
                    </h2>

                </div>
            </div>

            <div class="col-md-6 onStep" data-animation="fadeIn" data-time="500">
                <div class="sp-padding-no-hide">
                    <p>
                        A Villaggio é uma das <strong>mais tradicionais marcas de vidro e alumínio para o setor
                            moveleiro do país</strong>. Inspirados no design europeu, somos uma empresa brasileira com
                        raízes italianas que atua no mercado há mais de 22 anos.
                        Possuímos um dos mais modernos parques tecnológicos do setor, com máquinas e equipamentos de
                        última geração para oferecer soluções inteligentes e acabamentos impecáveis, tudo isso alinhados
                        a processos produtivos ecologicamente corretos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section about -->
<section id="about-us-1" class="h-bg no-padding col-content color-page">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sp-padding">
                            <h3>
                                Perfection concept
                              
                            </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="image-container col-lg-6 image-container-sm pull-left onStep"
                        data-animation="fadeInLeft" data-time="0"></div>
                    <div class="image-container col-lg-6 image-container-sm pull-left onStep"
                        data-animation="fadeInLeft" data-time="0"></div>
                    <div class="col-lg-6">
                        <div class="sp-padding">
                            <h3>
                                Perfection concept
                               
                            </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>

            <div class="image-container col-lg-6 hidden-md hidden-sm hidden-xs pull-left onStep"
                data-animation="fadeInLeft" data-time="0"></div>


        </div>
    </div>
</section>
<!-- section about end -->

<!-- section about -->



<!-- gallery -->
<section class="p-relative">
    <div class="container-fluid m-5-hor">
        <div class="row">

            <div class="onStep" data-animation="fadeInUp" data-time="500">
                <div id="owl-gal" class="owl-carousel">

                    <div class="item">
                        <div class="gal-home big-img">
                            <a href="img/gallery-home/img1.jpeg">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img1.jpeg">
                                    <div class="overlay">
                                        <h3>Scandinavian Residence
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gal-home">
                            <a href="#">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img2.jpeg">
                                    <div class="overlay">
                                        <h3>Brown Perspective
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gal-home big-img">
                            <a href="img/gallery-home/big/img3.jpg">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img3.jpeg">
                                    <div class="overlay">
                                        <h3>Artificial Design
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gal-home big-img">
                            <a href="img/gallery-home/big/img4.jpg">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img4.jpeg">
                                    <div class="overlay">
                                        <h3>Scandinavian Residence
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gal-home">
                            <a href="#">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img5.jpeg">
                                    <div class="overlay">
                                        <h3>Brown Perspective
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gal-home big-img">
                            <a href="img/gallery-home/big/img6.jpg">
                                <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="img/gallery-home/img6.jpeg">
                                    <div class="overlay">
                                        <h3>Artificial Design
                                            <span class="devider"></span>
                                        </h3>
                                        <p>Mais Detalhes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- gallery end -->


@endsection

@section('modal')
<div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-label"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="embed-responsive embed-responsive-16by9">
                    <video src="video/institucional.mp4" controls id="video-modal"></video>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
