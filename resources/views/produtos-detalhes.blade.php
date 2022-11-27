<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Villagio Alumunios | Página Inicial</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="/css/fullscreen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="/css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="/css/animated-on3step.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <link href="/css/owl.transitions.css" rel="stylesheet">
    <link href="/css/on3step-style.css" rel="stylesheet">
    <link href="/css/queries-on3step.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/produto.css?v=2">
    <link href="/css/app.css?v=11" rel="stylesheet">
</head>
{{-- se houver flag adicionar class "show" em body --}}


<body class="detalhes-produto">

    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
        <div class="mainpreloader">
            <span></span>
        </div>
    </div>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="/"><img src="/img/logo-preto.png" alt=""></a>
                </div>
            </div>
        </div>

        <main class="MainLayout_layoutPageContainer__Cg1fx">
            <section>
                <div class="ProductDetails_productDetailsContainer__zMch2">
                    <div class="ProductDetails_productDetailsTop__9MVAI">
                        <div class="Breadcrumbs_breadcrumbsContainer__I4T2S">

                            <a class="Breadcrumbs_breadcrumbsItem__frSck" href="/">Home</a><span class="Breadcrumbs_breadcrumbsSeparator__4hftg">/</span><a class="Breadcrumbs_breadcrumbsItem__frSck" href="/grupo-de-produtos/{{$produto->categoria}}">{{$produto->categoria_completa}}</a>
                            <span class="Breadcrumbs_breadcrumbsSeparator__4hftg">/</span><a class="Breadcrumbs_breadcrumbsItem__frSck" href="#">{{$produto->titulo}}</a>
                            <span class="Breadcrumbs_breadcrumbsSeparator__4hftg">/</span>
                        </div>
                        <div class="ProductDetails_productDetailsSliderControls__AXo9_">
                            <a href="{{route('produto', $produto->anterior()->slug)}}">
                            <svg id="prev_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 500 500" style="enable-background: new 0 0 500 500;" xml:space="preserve" width="25" height="25">
                                <style>
                                    .prev_svg__st0,
                                    .prev_svg__st1,
                                    .prev_svg__st2 {
                                        fill: none;
                                        stroke: #000;
                                        stroke-width: 33;
                                    }
                                    .prev_svg__st1,
                                    .prev_svg__st2 {
                                        stroke-width: 47.4811;
                                    }
                                    .prev_svg__st2 {
                                        stroke-width: 32.161;
                                    }
                                </style>
                                <path d="m338.16 24.56 23.13 20.46-181.35 204.96 181.35 205-23.13 20.46-199.45-225.46z"></path>
                            </svg>
                        </a>
                            <a href="{{route('produto', $produto->proximo()->slug)}}">
                            <svg id="next_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 500 500" style="enable-background: new 0 0 500 500;" xml:space="preserve" width="25" height="25">
                                <style>
                                    .next_svg__st0,
                                    .next_svg__st1,
                                    .next_svg__st2 {
                                        fill: none;
                                        stroke: #000;
                                        stroke-width: 33;
                                    }
                                    .next_svg__st1,
                                    .next_svg__st2 {
                                        stroke-width: 47.4811;
                                    }
                                    .next_svg__st2 {
                                        stroke-width: 32.161;
                                    }
                                </style>
                                <path d="m161.84 475.44-23.13-20.46 181.35-204.96-181.35-205 23.13-20.46 199.45 225.46z"></path>
                            </svg>
                        </a>
                        <a href="/grupo-de-produtos/{{$produto->categoria}}">
                            <svg id="gallery_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 500 500" style="enable-background: new 0 0 500 500;" xml:space="preserve" width="25" height="25">
                                <style>
                                    .gallery_svg__st0,
                                    .gallery_svg__st1,
                                    .gallery_svg__st2 {
                                        fill: none;
                                        stroke: #000;
                                        stroke-width: 33;
                                    }
                                    .gallery_svg__st1,
                                    .gallery_svg__st2 {
                                        stroke-width: 47.4811;
                                    }
                                    .gallery_svg__st2 {
                                        stroke-width: 32.161;
                                    }
                                </style>
                                <path
                                    d="M24 24h130.48v130.48H24zM184.76 24h130.48v130.48H184.76zM345.52 24H476v130.48H345.52zM24 184.76h130.48v130.48H24zM184.76 185.8h130.48v130.48H184.76zM345.52 185.8H476v130.48H345.52zM24 345.52h130.48V476H24zM184.76 345.52h130.48V476H184.76zM345.52 345.52H476V476H345.52z"
                                ></path>
                            </svg>
                        </a>
                        </div>
                    </div>
                    <div class="ProductDetails_productDetailsSlider__2dkUy">
                        <div class="ProductDetails_productDetailsSliderContainer__9o_Ur">
                            <div class="carousel-root">
                                <div class="carousel carousel-slider" style="width: 100%;">
                                    <div class="slider-wrapper axis-horizontal">

                                      <img src="{{asset('img/uploads/' . $produto->imagem)}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ProductDetails_productDetailsInfo__rPvyX">
                        <div class="ProductDetails_productDetailsInfoRow__sLjMj"><h1 class="ProductDetails_productDetailsInfoLabel__Kb7qU">{{$produto->titulo}}</h1></div>
                        <br>
                        <p>{!!$produto->descricao!!}</p>

                        @if($produto->utilizacao)
                        <span class="utilizacao"><strong>Utilização:</strong> {{$produto->utilizacao}} </span>
                        @endif

                        @if($produto->compativeis)
                       
                            @if($produto->puxadores) 
                            <span class="compativel">
                            <strong>Puxadores Compatíveis:</strong>
                            @foreach($produto->puxadores as $compativeis)
                            @if($compativeis->tipo == 'produto')
                            <a href="{{route('produto', $compativeis->compativel->slug)}}" target="_blank">{{$compativeis->nome}}</a>@if(!$loop->last),@endif

                            @else
                            {{$compativeis->nome}}@if(!$loop->last),@endif
                            @endif
                            {{-- separar com virgula se nao for o ultimo --}}
                            @endforeach 
                            </span>
                            @endif

                            @if($produto->divisores->count() > 0)
                            <span class="compativel">
                            <strong>Divisores Compatíveis:</strong>
                            @foreach($produto->divisores as $compativeis)
                            @if($compativeis->tipo == 'produto')
                            <a href="{{route('produto', $compativeis->compativel->slug)}}" target="_blank">{{$compativeis->nome}}</a>@if(!$loop->last),@endif

                            @else
                            {{$compativeis->nome}}@if(!$loop->last),@endif
                            @endif
                            {{-- separar com virgula se nao for o ultimo --}}
                            @endforeach
                            </span>
                            @endif
                   
                        @endif


                    </div>
                    @foreach($produto->imagens as $imagem)

                    <div class="ProductDetails_productDetailsLinks__c6tg8 ProductDetails_productDetailsLinksWithImage__dtlEG">
                        <div class="ImageBackground_imageBackground__SJ3M3 ImageBackground_imageBackgroundPlaceholder__Fc_CO ProductDetails_productDetailsImage__bD35o">
                            <span
                                style="
                                    box-sizing: border-box;
                                    display: block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                "
                            >
                                <img
                                    alt="Detail image"
                                    src="{{asset('img/uploads/' . $imagem->imagem)}}"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="Image_image__7bYel Image_imageLoaded__WPgjZ"
                                    style="
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        right: 0;
                                        box-sizing: border-box;
                                        padding: 0;
                                        border: none;
                                        margin: auto;
                                        display: block;
                                        width: 0;
                                        height: 0;
                                        min-width: 100%;
                                        max-width: 100%;
                                        min-height: 100%;
                                        max-height: 100%;
                                        object-fit: cover;
                                        object-position: center center;
                                    "
                                    sizes="100vw"
                                 
                                />
                                
                            </span>

                            
                        </div>
                    </div>

                    @endforeach
                   
                </div>
            </section>
        </main>
        

        
        
    </div>

    <footer class="choc">
        <div class="container-fluid m-5-hor">
            <!-- animate row -->
            <div class="row position-relative">
                <div class="col-xs-12 col-sm-9">
                    <div class="row onStep" data-animation="fadeIn" data-time="500">
                        <div class="col-xs-12">
                                <span class="txtBig">Follow us</span> 
                                <div class="socialContainer"> 
                                    <a href="https://www.facebook.com/villaggioaluminiosoficial" target="_blank" title="Villaggio Facebook"> 
                                        <svg class="icoFacebook icoSocial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"> <g> <path fill="#787878" d="M11.688,8.702l0.367-2.845H9.238V4.042c0-0.823,0.23-1.385,1.41-1.385l1.506-0.001V0.112 C11.895,0.078,11.001,0,9.959,0C7.788,0,6.302,1.326,6.302,3.76v2.097H3.846v2.845h2.457V16h2.936V8.702H11.688z"></path> </g>
                                        </svg> 
                                    </a> 
                                    <a href="https://www.instagram.com/villaggioaluminios/" target="_blank" title="Villaggio Instagram"> 
                                        <svg class="icoInstagram icoSocial" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><defs></defs> <path fill="#787878" d="M8,1.441c2.136,0,2.389,0.008,3.232,0.046c0.78,0.036,1.204,0.166,1.486,0.275	c0.373,0.146,0.64,0.319,0.92,0.599c0.28,0.28,0.453,0.546,0.598,0.92c0.11,0.282,0.24,0.706,0.275,1.485	C14.55,5.611,14.559,5.864,14.559,8c0,2.136-0.008,2.389-0.047,3.232c-0.036,0.78-0.166,1.204-0.275,1.486	c-0.145,0.373-0.318,0.64-0.598,0.92c-0.28,0.28-0.547,0.453-0.92,0.598c-0.282,0.11-0.706,0.24-1.486,0.275	C10.389,14.55,10.136,14.559,8,14.559s-2.389-0.008-3.233-0.047c-0.78-0.036-1.203-0.166-1.485-0.275	c-0.374-0.145-0.64-0.318-0.92-0.598c-0.28-0.28-0.453-0.547-0.599-0.92c-0.109-0.282-0.24-0.706-0.275-1.486	C1.45,10.389,1.441,10.136,1.441,8c0-2.136,0.008-2.389,0.046-3.233c0.036-0.78,0.166-1.203,0.275-1.485	c0.146-0.374,0.319-0.64,0.599-0.92s0.546-0.453,0.92-0.599c0.282-0.109,0.706-0.24,1.485-0.275C5.611,1.45,5.864,1.441,8,1.441 M8,0C5.827,0,5.555,0.009,4.702,0.048C3.85,0.087,3.269,0.222,2.76,0.42C2.233,0.624,1.787,0.898,1.343,1.343	C0.898,1.787,0.624,2.233,0.42,2.76C0.222,3.269,0.087,3.85,0.048,4.702C0.009,5.555,0,5.827,0,8s0.009,2.445,0.048,3.298	c0.039,0.852,0.174,1.433,0.372,1.942c0.204,0.526,0.478,0.972,0.923,1.417c0.444,0.445,0.891,0.718,1.417,0.923	c0.509,0.198,1.09,0.333,1.942,0.372C5.555,15.991,5.827,16,8,16s2.445-0.009,3.298-0.048c0.852-0.039,1.433-0.174,1.942-0.372	c0.526-0.205,0.972-0.478,1.417-0.923c0.445-0.445,0.718-0.891,0.923-1.417c0.198-0.509,0.333-1.09,0.372-1.942	C15.991,10.445,16,10.173,16,8s-0.009-2.445-0.048-3.298C15.913,3.85,15.778,3.269,15.58,2.76c-0.205-0.526-0.478-0.973-0.923-1.417	c-0.445-0.445-0.891-0.719-1.417-0.923c-0.509-0.198-1.09-0.333-1.942-0.372C10.445,0.009,10.173,0,8,0"></path> <path fill="#787878" d="M8,3.892C5.731,3.892,3.892,5.731,3.892,8S5.731,12.108,8,12.108S12.108,10.269,12.108,8	S10.269,3.892,8,3.892 M8,10.667c-1.473,0-2.667-1.194-2.667-2.667S6.527,5.333,8,5.333S10.667,6.527,10.667,8	S9.473,10.667,8,10.667"></path> <path fill="#787878" d="M13.23,3.729c0,0.53-0.43,0.96-0.96,0.96s-0.96-0.43-0.96-0.96s0.43-0.96,0.96-0.96S13.23,3.199,13.23,3.729	"></path></svg> 
                                    </a> 
                                    <a href="https://www.youtube.com/channel/UCdqWA2p6S3E4sVxCk67FrMQ" target="_blank" title="Villaggio YouTube">
                                        <svg class="icoYt icoSocial" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px" height="16px" viewBox="0 -1 20 16" enable-background="new 0 -1 20 16" xml:space="preserve"> <path fill="#787878" d="M19.545,2.192c-0.229-0.857-0.911-1.541-1.769-1.768C16.226,0,9.985,0,9.985,0S3.733,0.011,2.183,0.434	c-0.858,0.229-1.542,0.912-1.77,1.77C0,3.756,0,7.001,0,7.001s0,3.246,0.424,4.807c0.228,0.859,0.911,1.542,1.768,1.771	C3.744,14,9.985,14,9.985,14s6.24,0,7.791-0.422c0.857-0.229,1.54-0.911,1.769-1.771c0.425-1.551,0.425-4.807,0.425-4.807	S19.97,3.756,19.545,2.192z M7.988,9.996V4.004l5.185,2.997L7.988,9.996z"></path></svg> 
                                    </a>
                                    <a href="https://br.pinterest.com/villaggioaluminios/" target="_blank" title="Villaggio Pinterest">
                                        <svg class="icoPinterest icoSocial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"> <path fill="#787878" d="M6.893,10.583C6.473,12.785,5.96,14.897,4.44,16c-0.469-3.328,0.689-5.828,1.226-8.483 C4.75,5.973,5.777,2.867,7.711,3.633c2.379,0.94-2.06,5.738,0.92,6.336c3.111,0.626,4.383-5.399,2.453-7.358 c-2.788-2.83-8.118-0.066-7.462,3.984c0.159,0.991,1.183,1.291,0.409,2.658C2.247,8.858,1.715,7.45,1.783,5.573 c0.11-3.071,2.76-5.221,5.417-5.519c3.361-0.376,6.516,1.234,6.949,4.395c0.49,3.568-1.516,7.434-5.11,7.154 C8.066,11.529,7.656,11.047,6.893,10.583"></path></svg> 
                                    </a>
                                    <a href="https://www.linkedin.com/in/villaggio-vidros-e-alum%C3%ADnios-629114200/" target="_blank" title="Villaggio LinkedIn">
                                        <svg class="icoLinkedIn icoSocial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="16px" viewBox="0 0 15 16" enable-background="new 0 0 15 16" xml:space="preserve"> <g> <path fill="#787878" d="M0.231,4.966h3.112v9.997H0.231V4.966z M1.787-0.003c0.995,0,1.801,0.808,1.801,1.801S2.782,3.6,1.787,3.6 c-0.999,0-1.803-0.808-1.803-1.801S0.788-0.003,1.787-0.003"></path> <path fill="#787878" d="M5.293,4.966h2.98v1.366h0.042c0.415-0.786,1.429-1.615,2.943-1.615c3.146,0,3.727,2.07,3.727,4.761v5.484 h-3.105v-4.86c0-1.16-0.023-2.651-1.616-2.651c-1.618,0-1.866,1.264-1.866,2.565v4.946H5.293V4.966z"></path> </g></svg> 
                                    </a>
                                    <div class="clearfix"></div> 
                                </div> 
                                <div class="clearfix"></div> 
                        </div>


                            <div class="col-sm-12"> 
                                <div id="footerLine"> 
                                    <div class="line"></div> 
                                </div> 
                            </div>

                            <div class="col-sm-12"> 
                                <div id="navFooterContainer"> 
                                    <ul class="nav navFooter"> 
                                        <li> 
                                            <a href="#"> 
                                                <span class="item"> 
                                                    <span data-hover="Portugues">Portugues</span> 
                                                </span> 
                                            </a> 
                                        </li> 
                                        <li class="active"> 
                                            <a href="#"> 
                                                <span class="item"> 
                                                    <span data-hover="Inglês">Inglês</span> 
                                                </span> 
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#"> 
                                                <span class="item"> 
                                                    <span data-hover="Espanhol">Espanhol</span> 
                                                </span> 
                                            </a> 
                                        </li> 
                                    </ul> 
                                    <div class="spacer40"></div> 
                                    <ul class="nav navFooter navFooterBottom">
                                        <li class="width100Xs"> 
                                            <a class="item" href="">
                                                <span data-hover="Contacts">Produtos</span>
                                            </a> 
                                        </li> 
                                        <li>
                                            <a class="item" href="">
                                                <span data-hover="Privacy policy">Projetos</span>
                                            </a> 
                                        </li> 
                                        <li class="width50Xs"> 
                                            <a class="item" href="">
                                                <span data-hover="Cookie policy">Contato</span>
                                            </a> 
                                        </li>
                                        <li id="credits" class="width100Xs">
                                            <a class="item" href="" target="_blank">
                                                <span data-hover="NewVisibility design">Portal</span>
                                            </a> 
                                        </li>   
                                    </ul> 
                                </div> 
                            </div>

                            <div class="col-sm-12 address"> 
                                <p>Villaggio. Rua Vale das Palmeiras, 3250 | Colônia Japonesa | Ivoti | RS </p>
                            </div>
                        
                        </div>
                </div>

                <div class="col-xs-12 col-sm-3 logo-container">
                    <img src="{{asset('img/logo-preto.png')}}" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- /#modal-video -->
    <!-- plugin JS -->
    <script src="/plugin/pluginson3step.js"></script>
    
    <!-- slider revolution  -->
    <script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- on3step JS -->
    <script src="/js/on3step.js"></script>
    <script src="/js/plugin-set.js"></script>
    <!-- bootstrap script -->
    <script src="/plugin/bootstrap.min.js"></script>
    <script src="/js/app.js?v=2"></script>
    
    <script>
     var windowWidth = $(window).width();
       var windowHeight = $(window).height();

            $(window).resize(function() {
                if(windowWidth != $(window).width() || windowHeight != $(window).height()) {
                    location.reload();
                    return;
            }
    });
    </script>

    @yield('scripts')
</body>

</html>
