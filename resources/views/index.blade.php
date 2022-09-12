@extends('layout')
@section('header')
<div class="video">
    <div class="video__caption">
        <div class="video__fold">
            <video autoplay="autoplay" preload="none" loop="loop" muted="muted" playsinline="playsinline" class="video__element play-on-load"><source src="video/otimizado.mp4" type="video/mp4"></video>					<div class="loader" style="display: none;">
                <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(1 1)" stroke-width="2">
                            <circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle>
                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"></animateTransform>
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="video__controls">
            <a href="javascript:void(0);" class="video__play video__pause">Play</a>				</div>
    </div>
</div>
@endsection
@section('content')
        <section id="about-us" class="h-bg no-padding col-content">
            <div class="container-fluid">
                <div class="row p-60 justify-content-center">
                    <div class="col-md-8">
                    <div style="background-image: url(&quot;img/institucional.png&quot;);background-repeat: no-repeat;height: 70vh;background-size: cover;" class="image-container col-lg-12 pull-left onStep animated fadeInLeft" data-animation="fadeInLeft" data-time="500">
                        <div id="icone-play" class="icone-play">
                            <svg x="0px" y="0px" width="136px" height="136px" viewBox="0 0 136 136" enable-background="new 0 0 136 136" xml:space="preserve"> <path fill="none" stroke="#000" stroke-width="0.6" stroke-miterlimit="10" d="M131.417,49.657C133.098,55.481,134,61.636,134,68 c0,36.452-29.548,66-66,66S2,104.452,2,68C2,31.547,31.548,2,68,2C98.086,2,123.469,22.13,131.417,49.657"></path> <polygon fill="none" stroke="#000" stroke-width="0.6" stroke-miterlimit="10" points="89.311,68 71.947,78.023 54.583,88.053 54.583,68 54.583,47.949 71.947,57.975 "></polygon></svg>
                        </div>
                    </div>
                </div>
                    {{-- <div class="col-lg-6 p-90 onStep"  data-animation="fadeInRight" data-time="500">
                        <div class="sp-padding">
                            <h3 class="bg-dots">
                                Vídeo
                                Chamada
                                <span class="devider-cont"></span>
                            </h3>

                            <p>
                                Aqui ficará um vídeo que pode ser usado para divulgar a empresa ou ainda apresentar algum novo projeto.
                                Junto com ele poderia ficar um texto e até mesmo algumas métricas. Sed ut perspiciatis unde omnis iste natus
                                errorsit voluptatem accusantium natus error sit.Mauris interdum libero vitae tellus
                                vestibulum, nec sollicitudin dui mollis.</p>

                            <div class="count-about">
                                <span class="numb">365</span>
                                <span class="detail">Projetos</span>
                            </div>
                            <div class="count-about">
                                <span class="numb">120</span>
                                <span class="detail">Clientes</span>
                            </div>
                            <div class="count-about">
                                <span class="numb">363</span>
                                <span class="detail">Entregas</span>
                            </div>
                            <div class="count-about">
                                <span class="numb">6</span>
                                <span class="detail">Anos</span>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div> --}}

                </div>
            </div>
        </section>
        <!-- section -->
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
        <!-- section end -->


        <section id="call-action" class="col-content stripe-bg">
            <div class="container-fluid m-5-hor">
             <div class="row p-180">
          
                       
          
                        <div class="col-md-6 onStep" data-animation="fadeIn" data-time="500">
                          <div class="sp-padding">
                            <h2 class="full">
                                Nós somos um time <strong>criativo</strong> para construir seu sonho ou sua estrutura. 
                                <span class="devider-cont"></span>
                            </h2>          
          
                            <p>               
                              
                            A Villaggio é uma das <strong>mais tradicionais marcas de vidro e alumínio para o setor moveleiro do país</strong>. Inspirados no design europeu, somos uma empresa brasileira com raízes italianas que atua no mercado há mais de 22 anos. 
                            Possuímos um dos mais modernos parques tecnológicos do setor, com máquinas e equipamentos de última geração para oferecer soluções inteligentes e acabamentos impecáveis, tudo isso alinhados a processos produtivos ecologicamente corretos.
                            </p>
          
                           
                          </div>   
                        </div>

                        <div class="col-md-offset-1 col-md-5 onStep" data-animation="fadeIn" data-time="500">
                            <div class="sp-padding-no-hide">
                              <div class="full-dots"></div>
                              <div class="features">
                                  <div class="bg-img-3-img">
                                    <img class="features" alt="img" src="img/bg-serv-4.jpeg">
                                  </div>
                              </div>
                            </div>
                          </div>
                       
                     
                                  
             </div>
            </div>
           </section>

           <section class="no-top no-bottom">
            <div class="container-fluid">
                <div class="row goldpage-choc">

                    <div class="col-lg-7 col-lg-offset-1 col-md-12 text-center">
                        <h3>Procurando por qualidade no seu próximo projeto?</h3>
                    </div>

                    <div class="col-lg-3  col-md-12">
                        <div class="btn-content">
                            <span class="shine"></span>
                            <a href="#">Fale Conosco</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    


        <!-- gallery -->
        <section>
            <div class="container-fluid m-5-hor">
                <div class="row">

                    <div class="onStep" data-animation="fadeInUp" data-time="500">
                        <div id="owl-gal" class="owl-carousel">

                            <div class="item">
                                <div class="gal-home big-img">
                                    <a href="img/gallery-home/img1.jpeg">
                                        <div class="hovereffect">
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img1.jpeg">
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
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img2.jpeg">
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
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img3.jpeg">
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
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img4.jpeg">
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
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img5.jpeg">
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
                                            <img alt="imageportofolio" class="img-responsive"
                                                src="img/gallery-home/img6.jpeg">
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