@extends('layout_fixo')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/bg-serv-1.jpeg')}}" alt="">
        <h3>Produtos</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep text-center" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title">
                    <h2>Produtos</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <section class="no-top no-bottom">
    <div class="container-fluid">
        <div class="grid produtos">
            @foreach($categorias as $categoria)
    
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto('{{$categoria->slug}}')">
                <img src="{{asset('img/uploads/categorias/' . $categoria->imagem)}}" alt="">
                <div class="legenda">
                    <p>{{$categoria->titulo}}</p>
                </div>
            </div>
            @endforeach
            
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