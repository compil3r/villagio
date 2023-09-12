@extends('layout_fixo')
@section('content')
  
  <!-- section -->
  <section aria-label="section-blog  mt-10" id="content">
    <div class="container-fluid m-5-hor">
      <div class="row">
        <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px">
            <h1>
                Resultados para #{{$tag}}
            </h1>
        </div>
    
        
                @foreach($posts as $post)
                <div class="col-md-3 mb-md-0 mb-5 onStep" data-animation="fadeIn" data-time="500">
                  <div class="images"><img alt="imgservice" src="{{asset('img/uploads/' . $post->imagem)}}" class="w-gallery"></div>
                  <h6 style="font-size: 20px">{{$post->titulo}}</h6>
                  <span class="date-post" style="margin-left: 0; color: rgb(77, 77, 77)"><i class="ti-calendar" style="margin-right: 5px"></i>{{$post->created_at->format('d/m/Y')}}</span>
                  <span class="date-post"><i class="ti-tag" style="margin-right: 0px; color: rgb(77, 77, 77)"></i>
                    {{-- break tags in comma and foreach --}}
                    @foreach(explode(',', $post->tags) as $tag)
        
        
                      <a href="{{url("blog/tag/" . str_replace('#', '', $tag))}}">{{$tag}}</a>
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
  <!-- section end -->
  
@endsection