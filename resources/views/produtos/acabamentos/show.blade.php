@extends('layout_fixo')

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title text-center">

                    <h2>{{$acabamento->nome}}</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>
   <section class="no-top no-bottom">
    <div class="container">
        <p>
            {{$acabamento->descricao}} 
        </p>

        <div class="grid produtos" style="margin-bottom: 40px">
          
            @foreach($itens as $item)
            <div class="grid-item acabamentos onStep" data-animation="fadeIn" data-time="500" onclick="abrirFoto('{{asset('img/acabamentos/' . $item->imagem)}}')" style="height: 208px">
                <img src="{{asset('img/acabamentos/'.$item->imagem)}}" alt="">
                <div class="legenda" style="padding: 30px 0px">
                    <p style="font-size: 13px">{{$item->nome}}</p>
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