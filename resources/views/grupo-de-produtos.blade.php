@extends('layout_fixo')

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa">
    <div class="container-fluid m-5-hor">
     <div class="row p-200">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding">

                    <h2>{{$nome}}</h2>
                
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
            @foreach ($produtos as $produto)
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="irParaProduto('{{$produto->slug}}')">
                <img src="{{asset('img/uploads/'.$produto->imagem)}}" alt="">
                <div class="legenda">
                    <p>{{$produto->titulo}}</p>
                </div>
            </div>
            @endforeach
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