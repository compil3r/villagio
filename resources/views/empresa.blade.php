@extends('layout')
@section('header')
    <div class="image-header">
        <div id="overlay" class="bottom"></div>
        <img src="{{asset('img/bg-serv-1.jpeg')}}" alt="">
        <h3>Empresa</h3>
    </div>
@endsection

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal">
    <div class="container-fluid m-5-hor">
     <div class="row p-180">
  
               
  
                <div class="col-md-12 onStep" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding">
                
                    <p>               
                      
                    A Villaggio é uma das <strong>mais tradicionais marcas de vidro e alumínio para o setor moveleiro do país</strong>. Inspirados no design europeu, somos uma empresa brasileira com raízes italianas que atua no mercado há mais de 22 anos. 
                    Possuímos um dos mais modernos parques tecnológicos do setor, com máquinas e equipamentos de última geração para oferecer soluções inteligentes e acabamentos impecáveis, tudo isso alinhados a processos produtivos ecologicamente corretos.
                    </p>

                    <p>
                        Dominamos todos os processos industriais e contamos com infinitas possibilidades de cores e acabamentos para que possamos oferecer o que há de melhor e mais inovador no mundo do alumínio, vidro e estrutura metálica para o setor moveleiro.
                    </p>
                        <br>
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
        <div class="row goldpage-choc">

            <div class="col-lg-7 col-lg-offset-1 col-md-12 text-center">
                <h3>Procurando por qualidade no seu próximo projeto?</h3>
            </div>

            <div class="col-lg-3  col-md-12">
                <div class="btn-content">
                    <span class="shine"></span>
                    <a href="#">Fale Conosco</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection