@extends('layout_fixo')

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title text-center">

                    <h2>Acabamentos</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>
   <section class="no-top no-bottom">
    <div class="container">
        <h3>
            Dekton®
        </h3>
        <p>
            O Dekton® possui várias propriedades que o tornam versátil para aplicações em móveis e portas. Além da sua elevada resistência aos raios UV, o material possui grande resistência à abrasão e manchas.
        </p>

        <div class="grid produtos">
          
            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Dekton aeris.png')}}')">
                <img src="{{asset('img/acabamentos/Dekton aeris.png')}}" alt="">
                <div class="legenda">
                    <p>Aeris</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Dekton kelya.png')}}')">
                <img src="{{asset('img/acabamentos/Dekton kelya.png')}}" alt="">
                <div class="legenda">
                    <p>Kelya</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Dekton kovik.png')}}')">
                <img src="{{asset('img/acabamentos/Dekton kovik.png')}}" alt="">
                <div class="legenda">
                    <p>Kovik</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Dekton opera.png')}}')">
                <img src="{{asset('img/acabamentos/Dekton opera.png')}}" alt="">
                <div class="legenda">
                    <p>Opera</p>
                </div>
            </div>
        </div>



        <h3 style="margin-top: 80px">
            Couros
        </h3>
        <p>
            Utilização de couro ecológico como revestimento. A Revesti é composta por quatro variações de cores que traduzem a elegância europeia.
        </p>

        <div class="grid produtos">
          
            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Revesti courino bege.png')}}')">
                <img src="{{asset('img/acabamentos/Revesti courino bege.png')}}" alt="">
                <div class="legenda">
                    <p>Bege</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Revesti courino branco.jpg')}}')">
                <img src="{{asset('img/acabamentos/Revesti courino branco.jpg')}}" alt="">
                <div class="legenda">
                    <p>Branco</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Revesti courino marrom.png')}}')">
                <img src="{{asset('img/acabamentos/Revesti courino marrom.png')}}" alt="">
                <div class="legenda">
                    <p>Marrom</p>
                </div>
            </div>

            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/Revesti courino preto.jpg')}}')">
                <img src="{{asset('img/acabamentos/Revesti courino preto.jpg')}}" alt="">
                <div class="legenda">
                    <p>Preto</p>
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
<script>
   
   function abrirFoto(url){
        $('#imagemModal').attr('src', url);
        $('#modalImagem').modal('show');
    }
</script>
@endsection