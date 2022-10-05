@extends('layout')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/bg-serv-1.jpeg')}}" alt="">
        <h3>Produtos</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa">
    <div class="container-fluid m-5-hor">
     <div class="row p-200">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding">

                    <h2>Conheça os nossos <em>produtos</em></h2>
                
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
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto('solucoes-inteligentes')">
                <img src="{{asset('img/produtos/destaque/solucoes.png')}}" alt="">
                <div class="legenda">
                    <p>Soluções Inteligentes</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto('perfis-para-portas')">
                <img src="{{asset('img/produtos/destaque/perfis.png')}}" alt="">
                <div class="legenda">
                    <p>Perfis para Portas</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/puxadores.png')}}" alt="">
                <div class="legenda">
                    <p>Puxadores</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/divisorias.png')}}" alt="">
                <div class="legenda">
                    <p>Divisórias de Ambientes</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/acessorios.png')}}" alt="">
                <div class="legenda">
                    <p>Acessórios</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/acabamentos.png')}}" alt="">
                <div class="legenda">
                    <p>Acabamentos</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/sistemas.png')}}" alt="">
                <div class="legenda">
                    <p>Sistemas</p>
                </div>
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto()">
                <img src="{{asset('img/produtos/destaque/esquadrias.png')}}" alt="">
                <div class="legenda">
                    <p>Esquadrias</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('modal')
<div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" alt="" id="imagemModal">
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
    console.log('ué')
    $(document).ready(function(){
        
       /** //isotop when image is loaded
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
          
        });

        $grid.imagesLoaded().progress( function() {
            $grid.isotope('layout');
        });
**/

        //animato to show on scroll 1 by 1
        $('.onStep').each(function(){
            $(this).appear(function() {
                $(this).delay(100).animate({opacity:1,left:"0px"},1000);
            });
        });

    });

    function irParaProduto(categoria){
        console.log(categoria)
        window.location.href = "grupo-de-produtos/" + categoria;
    }
</script>
@endsection