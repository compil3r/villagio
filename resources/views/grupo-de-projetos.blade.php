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
           @foreach($projetos as $projeto)
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProjeto('{{$projeto->slug}}')">
                <img src="{{asset('img/projetos/'.$projeto->imagem)}}" alt="">
                <div class="legenda">
                    <p>{{$projeto->titulo}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection
@section('scripts')
<script>
    function irParaProjeto(projeto){
        window.location.href = '/projeto/'+projeto;
    }
</script>
@endsection