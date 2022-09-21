@extends('layout')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/produtos/cabina.png')}}" alt="">
        <h3>Soluções Inteligentes</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa">
    <div class="container-fluid m-5-hor">
     <div class="row p-200">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding">

                    <h2>Soluções Inteligentes</h2>
                
                    <p>               
                      
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, pariatur ullam aut architecto perspiciatis maiores in accusamus veniam distinctio totam, consequuntur laboriosam hic dicta sequi laudantium quibusdam, facere voluptatem cumque.
                    </p>


                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <section class="no-top no-bottom">
    <div class="container-fluid">
        <div class="grid produtos">
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/cabina.png')}}" alt="">
                <div class="legenda">
                    <p>Cabina Di Vetro</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/painel.png')}}" alt="">
                <div class="legenda">
                    <p>Painel Movie</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/porta_movie.png')}}" alt="">
                <div class="legenda">
                    <p>Porta Movie</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/scaffale.png')}}" alt="">
                <div class="legenda">
                    <p>Scaffale</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/adega.png')}}" alt="">
                <div class="legenda">
                    <p>Adega</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/del_metallo.png')}}" alt="">
                <div class="legenda">
                    <p>Del Metallo</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/luce_redondo.png')}}" alt="">
                <div class="legenda">
                    <p>Espelho Luce Redondo</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/luce_retangular.png')}}" alt="">
                <div class="legenda">
                    <p>Espelho Luce Retangular</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
@section('scripts')
<script>
    function irParaProduto(){
        window.location.href = "{{url('produtos/detalhes')}}";
    }
</script>
@endsection