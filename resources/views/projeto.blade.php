@extends('layout_fixo')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/bg-serv-1.jpeg')}}" alt="">
        <h3>{{$projeto->titulo}}</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep text-center" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title">
                    <h2>{{$projeto->titulo}}</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <section class="no-top no-bottom">
    <div class="container-fluid">
        <div class="grid produtos">
            @foreach($imagens as $imagem)
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/projetos/'. $projeto->id . '/' . $imagem->getFilename())}}')">
                <img src="{{asset('img/projetos/'. $projeto->id . '/' . $imagem->getFilename())}}" alt="">
            </div>
            @endforeach
            
        </div>

        {{-- show paginations link with url --}}
       {{$imagens->links('vendor.pagination.simple-tailwind')}}
        

        
    </div>
</section>



@endsection

@section('modal')
<div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" alt="" id="imagemModal" style="max-height: 90vh">
          {{-- next image button --}}
            <button type="button" class="btn btn-primary" id="nextImage" style="position: absolute; top: 50%; right: -80px; transform: translateY(-50%); z-index: 9999; background-color: transparent; border: none; color: white; font-size: 5rem; opacity: 0.8">
                <span class="ti-arrow-right"></span>
            </button>
            {{-- previous image button --}}
            <button type="button" class="btn btn-primary" id="previousImage" style="position: absolute; top: 50%; left: -80px; transform: translateY(-50%); z-index: 9999; background-color: transparent; border: none; color: white; font-size: 5rem; opacity: 0.8">
                <span class="ti-arrow-left"></span>
            </button>
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

    function abrirFoto(url){
        $('#imagemModal').attr('src', url);
        $('#modalImagem').modal('show');
    }

    //next image button
 

    function nextImage() {
        var url = $('#imagemModal').attr('src');
        var urlArray = url.split('/');
        var last = urlArray[urlArray.length - 1];
        var lastNumber = parseInt(last.split('.')[0]);
        var nextNumber = lastNumber + 1;
        // test if next image exists
        // use laravel count $imagens
        if(nextNumber <= {{$imagens->count()}}){
            var nextUrl = urlArray.slice(0, urlArray.length - 1).join('/') + '/' + nextNumber + '.jpg';
            $('#imagemModal').attr('src', nextUrl);
        }
    }
    $('#nextImage').click(function(){
       nextImage()
    });

    // if user press right arrow key
    $(document).keydown(function(e) {
        switch(e.which) {
            case 39: // right
            nextImage()
            break;

            default: return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
    function previousImage() {
        var url = $('#imagemModal').attr('src');
        var urlArray = url.split('/');
        var last = urlArray[urlArray.length - 1];
        var lastNumber = parseInt(last.split('.')[0]);
        var nextNumber = lastNumber - 1;
        // test if nextNumber is 0
        if(nextNumber == 0){
            nextNumber = 1;
        }
        var nextUrl = urlArray.slice(0, urlArray.length - 1).join('/') + '/' + nextNumber + '.jpg';
        $('#imagemModal').attr('src', nextUrl);
    }
    //previous image button
    $('#previousImage').click(function(){
        previousImage()
    });

    // if user press left arrow key
    $(document).keydown(function(e) {
        switch(e.which) {
            case 37: // left
            previousImage()
            break;

            default: return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
</script>
@endsection