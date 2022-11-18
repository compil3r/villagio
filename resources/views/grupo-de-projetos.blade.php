@extends('layout_fixo')

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title text-center">
                    <h2>Projetos</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>
   <section class="no-top no-bottom">
    <div class="container-fluid">
        <div class="grid produtos">
           
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto('casacor')">
                <img src="{{asset('img/uploads/'.$produto->imagem)}}" alt="">
                <div class="legenda">
                    <p>{{$produto->titulo}}</p>
                </div>
            </div>
     
        </div>
    </div>
</section>



@endsection
@section('scripts')
<script>
    function irParaProduto(produto){
        window.location.href = '/produto/'+produto;
    }
</script>
@endsection