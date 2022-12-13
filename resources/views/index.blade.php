@extends('layout')
@section('header')
<div class="image-header">
    <div id="overlay"></div>
    <img src="{{asset('img/fundo.png')}}" alt="">
</div>
@endsection
@section('content')
<section id="about-us" class="h-bg col-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sp-padding pb-0 text-center">
                    {{-- <h3 class="bg-dots  onStep"  data-animation="fadeInUp" data-time="500">
                        Alguma Chamada de Escolha
                        <span class="devider-cont"></span>
                    </h3> --}}
                    {{-- <div class="onStep"   data-animation="fadeInUp" data-time="600">
                    <div class="owl-carousel imagem-produtos-container" >
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
                    </div> --}}
                {{-- </div> --}}
                {{-- video novaid.mp4 --}}
                <video style="width: 70%" class="onStep"  data-animation="fadeInUp" data-time="500" src="{{ asset('video/novaid.mp4') }}" autoplay loop muted controls></video>
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
            <div class="col-md-6 onStep" data-animation="fadeInLeft" data-time="500">
                <div class="sp-padding">
                    <h2 class="full">
                        Nós somos um time <strong>criativo</strong> para construir seu sonho ou sua estrutura.
                        <span class="devider-cont"></span>
                    </h2>

                </div>
            </div>

            <div class="col-md-6 onStep" data-animation="fadeInRight" data-time="500">
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
<section id="about-us-1" class="h-bg col-content color-page pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 grid-4"> 
                <div class="container-fluid">
                    <div class="grid produtos">
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="400" onclick="irParaProduto('solucoes-inteligentes')">
                            <img src="{{asset('img/produtos/destaque/solucoes.png')}}" alt="">
                            <div class="legenda">
                                <p>Soluções Inteligentes</p>
                            </div>
                        </div>
                        <div class="grid-item onStep " data-animation="bounceIn" data-time="500" onclick="irParaProduto('perfis-para-portas')">
                            {{-- just text --}}
                            <div class="grid-text">
                                <span>
                                    Perfis para Portas
                                </span>
                                   

                            </div>
                         
                        </div>
                        <div class="grid-item onStep " data-animation="bounceIn" data-time="600" onclick="irParaProduto('perfis-para-portas')">
                            {{-- just text --}}
                            <div class="grid-text">
                                <span>
                                    DIVISÓRIAS DE AMBIENTES
                                   
                                </span>
                                   

                            </div>
                         
                        </div>
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="650" onclick="irParaProduto('divisorias-de-ambientes')">
                            <img src="{{asset('img/produtos/destaque/divisorias.png')}}" alt="">
                            <div class="legenda">
                                <p>Divisórias de Ambientes</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
                <div class="col-md-6  grid-1">
                <div class="container-fluid">
                    <div class="grid produtos">
                    <div class="grid-item onStep" data-animation="bounceIn" data-time="450" onclick="irParaProduto('esquadrias')">
                        <img src="{{asset('img/produtos/destaque/acessorios.png')}}" alt="">
                        <div class="legenda">
                            <p>Esquadrias</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                   
            </div>

            {{-- <div class="col-lg-6">
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
                data-animation="fadeInLeft" data-time="0"></div> --}}


        </div>
    </div>
</section>
<!-- section about end -->

<!-- section about -->



<!-- gallery -->
  <!-- about home -->
  <section class="bgsubgray p-relative" aria-label="about">
    <div class="container-fluid">
      <div class="row p-180 pt-0">

        <div class="col-md-4 mb-md-0 mb-5 onStep" data-animation="fadeIn" data-time="500">
          <div class="images"><img alt="imgservice" src="{{asset('img/produtos/adega.png')}}" class="w-gallery"></div>
          <h6>Materia Blog 1</h6>
          <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
          <p class="saibaMais"><a class="shin col px-0" href="#">
                                Saiba mais
                                </a></p>
        </div>

        <div class="col-md-4 mb-md-0 mb-5 onStep" data-animation="fadeIn" data-time="500">
            <div class="images"><img alt="imgservice" src="{{asset('img/produtos/cabina.png')}}" class="w-gallery"></div>

          <h6>Interior Design</h6>
          <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
          <p class="saibaMais"><a class="shin col px-0" href="#">
                                  Saiba Mais
                                </a></p>
        </div>

        <div class="col-md-4 onStep" data-animation="fadeIn" data-time="500">
            <div class="images"><img alt="imgservice" src="{{asset('img/produtos/del_metallo.png')}}" class="w-gallery"></div>
         
          <h6>Architecture Design</h6>
          <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia </p>
          <p class="saibaMais"><a class="shin col px-0" href="#">
                                  Saiba Mais
                                </a></p>
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

    <script>
        function irParaProduto(produto) {
            window.location.href = '/grupo-de-produtos/' + produto;
        }
    </script>
@section('scripts')

@endsection
