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


<section id="call-action" class="col-content white-bg" style="padding-bottom: 10%; ">
    <div class="container-fluid m-5-hor">
        <div class="row p-180" style="display: flex">
            <div class="col-md-7 onStep" data-animation="fadeInLeft" data-time="500">
                <div class="sp-padding" style="overflow: initial; padding: 0; padding-right: 60px;">
                    <img style="width: 100%" src="{{ asset('img/uploads/' . $inicial->imagemInicial) }}" alt="logo" class="img-fluid">
                </div>
            </div>

            <div class="col-md-5 onStep" style="text-align: left; display: flex; align-items: end;" data-animation="fadeInRight" data-time="500">
                <div class="sp-padding-no-hide" style="padding-bottom: 37px">
                  {!!$inicial->textoInicial!!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section about -->
<section id="about-us-1" class="h-bg col-content color-page pt-0" style="height: auto; padding-bottom: 10% ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 grid-4"> 
                <div class="container-fluid">
                    <div class="grid produtos">
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="400" onclick="irParaProduto('{{$inicial->link1}}')" style="height: 20vw">
                            <img src="{{asset('img/uploads/' . $inicial->imagem1)}}" alt="">
                            <div class="legenda">
                                <p>{{$inicial->titulo1}}</p>
                            </div>
                        </div>
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="400" onclick="irParaProduto('{{$inicial->link2}}')" style="height: 20vw">
                            <img src="{{asset('img/uploads/' . $inicial->imagem2)}}" alt="">
                            <div class="legenda">
                                <p>{{$inicial->titulo2}}</p>
                            </div>
                        </div>
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="400" onclick="irParaProduto('{{$inicial->link3}}')" style="height: 20vw">
                            <img src="{{asset('img/uploads/' . $inicial->imagem3)}}" alt="">
                            <div class="legenda">
                                <p>{{$inicial->titulo3}}</p>
                            </div>
                        </div>
                        <div class="grid-item onStep" data-animation="bounceIn" data-time="650" onclick="irParaProduto('{{$inicial->link4}}')" style="height: 20vw">
                            <img src="{{asset('img/uploads/' . $inicial->imagem4)}}" alt="">
                            <div class="legenda">
                                <p>{{$inicial->titulo4}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
                <div class="col-md-6  grid-1">
                <div class="container-fluid">
                    <div class="grid produtos">
                    <div class="grid-item onStep" data-animation="bounceIn" data-time="450" onclick="irParaProduto('{{$inicial->link5}}')" style="height: 40vw">
                        <img src="{{asset('img/uploads/' . $inicial->imagem5)}}" alt="">
                        <div class="legenda">
                            <p>{{$inicial->titulo5}}</p>
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
  <section class="bgsubgray p-relative pt-0" aria-label="about">
    <div class="container-fluid">
      <div class="row p-180 pt-0">
        @foreach($posts as $post)
        <div class="col-md-4 mb-md-0 mb-5 onStep" data-animation="fadeIn" data-time="500">
          <div class="images"><img alt="imgservice" src="{{asset('img/uploads/' . $post->imagem)}}" class="w-gallery"></div>
          <h6 style="font-size: 20px">{{$post->titulo}}</h6>
          <span class="date-post" style="margin-left: 0; color: rgb(77, 77, 77)"><i class="ti-calendar" style="margin-right: 5px"></i>{{$post->created_at->format('d/m/Y')}}</span>
          <span class="date-post"><i class="ti-tag" style="margin-right: 0px; color: rgb(77, 77, 77)"></i>
            {{-- break tags in comma and foreach --}}
            @foreach(explode(',', $post->tags) as $tag)


              <a href="{{url("blog/tag/" . str_replace('#', '', trim($tag)))}}">{{$tag}}</a>
            @endforeach
          </span>
        
        
            <p style="font-weight: 500">{{$post->descricao}}</p>


          
          <p class="saibaMais"><a class="shin col px-0" href="{{url("blog/" . $post->id)}}">
                               Leia Mais
                                </a></p>
        </div>
        @endforeach
    
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
            window.location.href = produto;
        }
    </script>
@section('scripts')

@endsection
