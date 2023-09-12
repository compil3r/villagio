@extends('layout')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/empresa.jpg')}}" alt="">
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa">
    <div class="container-fluid m-5-hor">
     <div class="row p-200">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title">

                    <h2>Quem somos</h2>
                
                    <p>      
                        A Villaggio é uma das <strong>mais tradicionais marcas de vidro e alumínio para o setor moveleiro e construção civil do país</strong>. Inspirados no design europeu, somos uma empresa brasileira com raízes italianas que atua no mercado há mais de 23 anos. Possuímos um dos mais modernos parques tecnológicos do setor, com máquinas e equipamentos de última geração. Oferecemos soluções inteligentes e acabamentos impecáveis, sempre alinhados a processos produtivos ecologicamente corretos.
         
                      
                    </p>

                    <p>
                        Dominamos todos os processos industriais e contamos com infinitas possibilidades de cores e acabamentos para que possamos oferecer o que há de melhor e mais inovador dentro de nossos segmentos.
                    </p>
        
                    <h4>Tradição</h4>
                    <p>
                        A Villaggio foi construída sob uma base familiar sólida, com valores baseados no respeito e no desenvolvimento humano e industrial. Prezamos nossas raízes e acreditamos que o crescimento acontece a partir de uma união perfeita entre tradição e inovação.
                    </p>

                    <h4>Inovação</h4>
                    <p>
                        Referência nacional na produção de portas e esquadrias em alumínio e vidro, a Villaggio conta com um moderno parque industrial composto por maquinários de última geração, que garantem a qualidade e exatidão dos produtos fabricados.
                    </p>
                    <h4>Diferenciais</h4>
                    <ul class="list-no-padding">
                        <li>Somos uma empresa veriticalizada;</li>
                        <li>Nossos produtos são finalizados com pintura eletrostática a pó, que garante acabamento ultra resistente;</li>
                        <li>Produtos totalmente personalizáveis, editados milímetro a milímetro;</li>
                        <li>Fornecedores de alto padrão;</li>
                        <li>Alta inspeção de qualidade;</li>
                        <li>Garantia de 3 anos para os produtos do setor moveleiro;</li>
                        <li>Garantia de * anos para os produtos do setor da construção civil.</li>
                    </ul>

                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <section class="no-top no-bottom p-relative">
    <div class="container-fluid">
        <div class="grid grid-empresa">
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(1)">
                <img src="{{asset('img/colaboradores/1.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(2)">
                <img src="{{asset('img/colaboradores/2.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(3)">
                <img src="{{asset('img/colaboradores/3.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(4)">
                <img src="{{asset('img/colaboradores/4.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(5)">
                <img src="{{asset('img/colaboradores/5.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(6)">
                <img src="{{asset('img/colaboradores/6.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(7)">
                <img src="{{asset('img/colaboradores/7.jpg')}}" alt="">
            </div>
            <div class="grid-item onStep" data-animation="fadeIn" data-time="500" onclick="modalImagem(8)">
                <img src="{{asset('img/colaboradores/8.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>



<section class="timeline p-relative">
    <div class="container-fluid">
        <ul class="years">
            @foreach ($anos as $ano)
                <li class="{{$ano == $anos[0] ? 'active' : ''}}" data-year="{{$ano->titulo}}">{{$ano->titulo}}</li>

            @endforeach
       
        </ul>

        <div class="year">
            <div class="content">
                {{-- <div class="title">2000</div> --}}
                <div class="text">
                    <p>
                       {{$anos[0]->descricao}}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="p-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <video src="{{asset('video/institucional2.mp4')}}" controls style="padding: 0 25%; width: 100%">
                </video>
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
        // $('.onStep').each(function(){
        //     $(this).appear(function() {
        //         $(this).delay(100).animate({opacity:1,left:"0px"},1000);
        //     });
        // });

    });

    
    modalImagem = function(id){
            console.log(id)
            $('#modalImagem').modal('show')
            $('#modalImagem').find('img').attr('src', `{{asset('img/colaboradores/${id}.jpg')}}`)
        }

        //timeline
        let years = {
            @foreach ($anos as $ano)
                '{{$ano->titulo}}': `{{$ano->descricao}}`,
            @endforeach
        }

        $('.years li').click(function(){
            $('.years li').removeClass('active')
            $(this).addClass('active')

            let year = $(this).data('year')

            $('.year .content .title').html(year)
            $('.year .content .text').html(years[year])
            $('.year .image img').attr('src', `{{asset('img/bg-serv-2.jpeg')}}`)

        })
</script>
@endsection