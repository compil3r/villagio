@extends('layout')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/empresa.jpg')}}" alt="">
        <h3>Empresa</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa">
    <div class="container-fluid m-5-hor">
     <div class="row p-200">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding">

                    <h2>Saiba mais sobre <em>quem somos</em></h2>
                
                    <p>               
                      
                    A Villaggio é uma das <strong>mais tradicionais marcas de vidro e alumínio para o setor moveleiro do país</strong>. Inspirados no design europeu, somos uma empresa brasileira com raízes italianas que atua no mercado há mais de 22 anos. 
                    Possuímos um dos mais modernos parques tecnológicos do setor, com máquinas e equipamentos de última geração para oferecer soluções inteligentes e acabamentos impecáveis, tudo isso alinhados a processos produtivos ecologicamente corretos.
                    </p>

                    <p>
                        Dominamos todos os processos industriais e contamos com infinitas possibilidades de cores e acabamentos para que possamos oferecer o que há de melhor e mais inovador no mundo do alumínio, vidro e estrutura metálica para o setor moveleiro.
                    </p>
                       <hr>
                    <h4>Tradição</h4>
                    <p>
                        Há mais de 22 anos atuando no mercado, a Villaggio foi construída sob uma base familiar sólida, com valores baseados no respeito e no desenvolvimento humano e industrial. Prezamos nossas raízes e acreditamos que o crescimento acontece a partir de uma união perfeita entre tradição e inovação.
                    </p>

                    <h4>Inovação</h4>
                    <p>
                        Referência nacional na produção de portas de alumínio e vidro, a Villaggio conta com um moderno parque industrial composto por maquinários de última geração, que garantem a qualidade e exatidão dos produtos fabricados.
                    </p>
                    <h4>Diferenciais</h4>
                    <ul class="list-no-padding">
                        <li>Somos uma empresa veriticalizada;</li>
                        <li>Nossos produtos são finalizados com pintura eletrostática, que garante um acabamento ultra resistente;</li>
                        <li>Produtos totalmente personalizáveis, editados milímetro a milímetro;</li>
                        <li>Fornecedores de alto padrão;</li>
                        <li>Alta inspeção de qualidade;</li>
                        <li>Garantia de 3 anos.</li>
                    </ul>

                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <section class="no-top no-bottom">
    <div class="container-fluid">
        <div class="grid">
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


<section class="timeline">
    <div class="container-fluid">
        <ul class="years">
            <li class="active" data-year="2000">2000</li>
            <li data-year="2006">2006</li>
            <li data-year="2007">2007</li>
            <li data-year="2010">2010</li>
            <li data-year="2011">2011</li>
            <li data-year="2017">2017</li>
            <li data-year="2018">2018</li>
            <li data-year="2019">2019</li>
            <li data-year="2020">2020</li>
            <li data-year="2022">2022</li>
        </ul>

        <div class="year">
            <div class="content">
                <div class="title">2000</div>
                <div class="text">
                    <p>
                        Em janeiro nasce a Villaggio, uma empresa de representação comercial de acessórios para móveis.
                    </p>
                </div>
            </div>
            <div class="image">
                <img src="{{asset('img/bg-serv-1.jpeg')}}" alt="">
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

    
    modalImagem = function(id){
            console.log(id)
            $('#modalImagem').modal('show')
            $('#modalImagem').find('img').attr('src', `{{asset('img/colaboradores/${id}.jpg')}}`)
        }

        //timeline

        let years = {
            2000: {
                title: '2000',
                text: 'Em janeiro nasce a Villaggio, uma empresa de representação comercial de acessórios para móveis.'
            },
            2006: {
                title: '2006',
                text: 'Inauguração da primeira loja Villaggio no centro de Novo Hamburgo, iniciando a distribuição de acessórios para móveis no Vale dos Sinos.'
            },
            2007: {
                title: '2007',
                text: 'A Villaggio abre em Ivoti o primeiro parque industrial, iniciando a fabricação própria de suas primeiras portas de alumínio.'
            },
            2010: {
                title: '2010',
                text: 'Com a aquisição de novas máquinas, deu-se início ao beneficiamento e comercialização de vidros lapidados.'
            },
            2011: {
                title: '2011',
                text: 'Participação da primeira feira FIMMA, iniciando sua expansão nacional.'
            },
            2017: {
                title: '2017',
                text: 'Início da construção de uma nova sede em Ivoti, com um moderno parque fabril de 4.800m².'
            },
            2018: {
                title: '2018',
                text: 'Lançamento da Linha Del Metallo, agregando a indústria a fabricação de estruturas metálicas produzidas em aço carbono.'
            },
            2019: {
                title: '2019',
                text: 'Lançamento da Personi, uma marca voltada a construção civil, promovendo soluções em esquadrias de alumínio para o alto padrão.'
            },
            2020: {
                title: '2020',
                text: 'Mudança para o novo parque industrial do grupo ADR Design.'
            },
            2022: {
                title: '2022',
                text: 'Ano de reestruturação, o grupo ADR Design unifica as suas marcas tornando-se apenas VILLAGGIO, e lançando a Villaggio Arch l Home, marca voltada aos franqueados.'
            },
        }

        $('.years li').click(function(){
            $('.years li').removeClass('active')
            $(this).addClass('active')

            let year = $(this).data('year')

            $('.year .content .title').html(years[year].title)
            $('.year .content .text').html(years[year].text)
            $('.year .image img').attr('src', `{{asset('img/bg-serv-2.jpeg')}}`)

        })
</script>
@endsection