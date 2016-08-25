<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Home | LCD</title>
        <meta name="author" content="Absoluta Cine" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fullPage.css"/>
        <link rel="stylesheet" type="text/css" href="assets/js/swiper/css/swiper.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
       
    </head>
    <body onload="init()">
        <!-- Loader -->
        <div id="loader">
            <div class="load_inner absolute">
                <div class="spinner relative">
                    <div class="double-bounce1 absolute"></div>
                    <div class="double-bounce2 absolute"></div>
                </div>
                <div class="full center_aligner txt">Carregando...</div>
            </div>
        </div>
        <!-- End Loader -->
        <!-- Cabeçalho -->
        <header>
            <ul id="menu">
                <li class="left logo_bg relative" data-menuanchor="home">
                    <a class="logo transition" href="#home" title="LCDPro"></a>
                </li>
                <li class="left relative" data-menuanchor="somos_assim">
                    <a href="#somos_assim" class="left transition" title="A LCDPro">
                        A LCDPro
                    </a>
                </li>
                <li class="left relative" data-menuanchor="servicos">
                    <a href="#servicos" class="left" title="Serviços">
                        Serviços
                    </a>
                </li>
                <li class="left relative" data-menuanchor="contato">
                    <a href="#contato" title="Contato">
                        Contato
                    </a>
                </li>
            </ul>
        </header>
        <!-- Cabeçalho Fim -->
        <!-- Cabeçalho 2 -->
        <div class="header2">
            <ul id="mini-menu">
                <li data-menuanchor="home" class="left logo_bg">
                    <a class="mini-logo full center_aligner" href="#home"></a>
                </li>
                <li class="left">
                    <button class="menu left transition">
                        <ul class="lines">
                            <li class="line1">
                                <hr class="anim4 left">
                                <hr class="anim1 right">
                            </li>
                            <li class="line2">
                                <hr class="anim2 left">
                                <hr class="anim5 right">
                            </li>
                            <li class="line3">
                                <hr class="anim3 left">
                                <hr class="anim6 right">
                            </li>
                        </ul>
                    </button>
                </li>
                <li class="left">
                    <ul class="submenu">
                        <li class="left center_aligner" data-menuanchor="somos_assim">
                            <a class="full" href="#somos_assim">
                                A LCD Pro
                            </a>
                        </li>
                        <li class="left center_aligner" data-menuanchor="servicos">
                            <a class="full" href="#servicos">
                                Serviços
                            </a>
                        </li>
                        <li class="left" data-menuanchor="contato">
                            <a class="full center_aligner" href="#contato">
                                Contato
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Cabeçalho 2 Fim -->
        <!-- Mídias Sociais -->
        <div class="media">
            <li class="left">
                <a class="link_branco" title="Nossa Fanpage no Facebook" href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="left">
                <a class="link_branco" title="Nossa conta no Instagram" href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </div>
        <!-- Mídias Sociais Fim -->
        <!-- FullPage -->
        <div id="fullpage">
            <!-- Banner Sessão 1 -->
            <section id="banner">
                <!-- Swiper -->
                <div class="swiper-container">
                    <!-- <div class="swiper-wrapper" data-0="top:0%;" data-1500="top:-100%;"> -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url('assets/img/bg/bg-1-01.jpg')"></div>
                        <div class="swiper-slide" style="background-image:url('assets/img/bg/bg-1-02.jpg')"></div>
                        <div class="swiper-slide" style="background-image:url('assets/img/bg/bg-1-03.jpg')"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <!-- Add Arrows -->
                    <!-- <div class="swiper-button-next swiper-button-white"></div> -->
                    <!-- <div class="swiper-button-prev swiper-button-white"></div> -->
                </div>
            </section>
            <!-- Banner Sessão 1 Fim-->
            <!-- Sessão 2 Somos Assim -->
            <section id="somos">
                <div class="content relative h-full">
                    <div class="bg" data-0="background-position:0 30%;" data-800="background-position:0 0%;" data-2500="background-position:0 -30%;"></div>
                    <div class="inner">
                        <div class="left pc-50">
                            <div class="logo margin_center animate animated slideInLeft"></div>
                            <div class="som-e-ilu margin_center animate animated_TWO slideInLeft"></div>
                            <div class="prof margin_center animate animated_THREE slideInLeft"></div>
                        </div>
                        <div class="left pc-50">
                            <h2 class="lighten full animate animated_ONE slideInRight">
                                <strong class="left animate animated_TWO slideInRight">
                                    Somos Assim
                                </strong>
                            </h2>
                            <p class="lighten left animate animated_THREE slideInRight" >
                                A LCD Pro é uma empresa de produção técnica que oferece equipamentos profissionais de sonorização, iluminação, imagem, box truss, palco e gerador de energia, atendendo eventos corporativos e sociais. A LCD foi fundada em 2005 e vem desde então se destacando neste mercado, sempre oferecendo equipamentos de última geração. Com sede em Ribeirão Preto/SP, atua em todo Território Nacional e em países da América do Sul.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sessão 2 Somos Assim Fim -->
            <!-- Sessão 3 Trabalhamos Assim -->
            <section id="trabalhamos">
                <div class="inner">
                    <h2 class="darken full animate animated_ONE slideInRight">
                        <strong class="block margin_center animate animated_TWO slideInRight">
                            Trabalhamos Assim
                        </strong>
                    </h2>
                    <p class="darken center_aligner margin_center animate animated_ONE slideInLeft">
                        Possuímos equipamentos de última geração e sempre oferecemos a melhor assistência aos nossos clientes com uma equipe qualificada, formada por profissionais com mais de 20 anos de experiência no mercado, especializados em montagens e operação de equipamentos de Iluminação, sonorização, imagem, palco e energia.
                    </p>
                    <!-- Botão Corporativo -->
                    <div class="full">
                        <div class="box left corp corp_bg corp_btn animate animated_THREE slideInLeft">
                            <div class="greater relative">
                                <div class="greatxt transition h-full absolute">
                                    Corporativo
                                </div>
                            </div>
                        </div>
                        <!-- Botão Corporativo Fim -->
                        <!-- Botão Social -->
                        <div class="box right social corp_bg social_btn animate animated_THREE slideInRight">
                            <div class="greater relative">
                                <div class="greatxt transition h-full absolute">
                                    Social
                                </div>
                            </div>
                        </div>
                        <!-- Botão Social Fim -->
                    </div>
                    <p class="corp_click darken center_aligner margin_center">
                        Apresentamos soluções para eventos de diferentes portes, englobando todas as necessidades de cada projeto, oferecendo a maior qualidade em equipamentos de iluminação, sonorização, imagem, palco e energia para que tudo saia como você planejou.
                    </p>
                    <p class="social_click darken center_aligner margin_center">
                        Um evento social é sempre uma oportunidade para reforçar relacionamentos e criar novos laços. Por isso, elaboramos projetos exclusivos de acordo com as necessidades de cada evento, procurando atender e superar as expectativas de nossos clientes em cada detalhe.<br/>
                        A garantia e a tranquilidade de ter um evento realizado com qualidade e preocupação com todos os detalhes
                    </p>
                </div>
                <div class="corporativo_bg absolute transition_slow">
                    <div class="bgs greyscale transition" data-0="background-position:0 50%;" data-3000="background-position:0 -10%;"></div>
                </div>
                <div class="social_bg absolute transition_slow">
                    <div class="bgs greyscale transition" data-0="background-position:0 50%;" data-3000="background-position:0 -10%;"></div>
                </div>
            </section>
            <!-- Sessão 3 Trabalhamos Assim Fim -->
            <!-- Sessão 4 Contato -->
            <section id="contact">
                <div class="bg" data-0="background-position:0 50%;" data-3000="background-position:0 -10%;"></div>
                <div class="content">
                    <!-- <div class="bg content"> -->
                    <div class="backInner">
                        <div class="inner">
                            <h2 class="lighten full animate animated_ONE slideInRight">
                                <strong class="left animate animated_TWO slideInRight">
                                    Entre em Contato
                                </strong>
                            </h2>
                            <form action="">
                                <div class="left">
                                    <input id="nome" class="full transition animate animated_ONE slideInLeft" name="Nome" title="Seu Nome" placeholder="Seu Nome" type="text">
                                    <input id="email" class="full transition animate animated_TWO slideInLeft" name="E-Mail" title="Seu E-Mail" placeholder="Seu E-Mail" type="text">
                                    <textarea id="mensagem" class="full transition animate animated_THREE slideInLeft" name="Mensagem" title="Escreva aqui sua mensagem" placeholder="Escreva aqui sua mensagem" type="text"></textarea>
                                    <div class="full animate animated_THREE slideInRight">
                                        <div class="box right">
                                            <div class="greater relative">
                                                <div class="greatxt transition h-full txt_branco absolute">
                                                    Enviar
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="lighten animate animated_TWO slideInRight">
                                        Av. Anhanguera, n. 530<br/>
                                        Alto da Boa Vista<br/>
                                        Ribeirão Preto / SP<br/>
                                        <a class="transition link_branco" title="Envie um E-mail para LCD Pro" href="mailto:lcdpro@lcdpro.com.br">
                                            lcdpro@lcdpro.com.br
                                        </a>
                                    </p>
                                    <p class="lighten animate animated_THREE slideInRight">
                                        Telefones
                                        <strong>
                                            <a class="link_branco transition full" title="Ligue para LCD Pro" href="tel:1639115947">
                                                (16) 3911.5947
                                            </a>
                                            <a class="link_branco transition full" title="Ligue para LCD Pro" href="tel:1678122132">
                                                (16) 7812.2132
                                            </a>
                                            <span class="full">
                                                ID Nextel: 84*89361
                                            </span>
                                        </strong>
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Rodapé -->
                    <div id="map" class="absolute">
                        <div id="map-canvas" class="full"></div>
                    </div>
                    <footer class="absolute animate animated_THREE slideInRight">
                        <div class="left animate animated_FOUR slideInRight">
                            <a class="logo left op_hover transition" href="#home" title="LCDPro"></a>
                            Copyright © 2015 LCD Pro - Todos os direitos reservados
                        </div>
                        <div class="right  animate animated_FIVE slideInRight">
                            Desenvolvido por <a title="Absoluta Cine" target="_blank" alt="Absoluta Cine" class="absoluta op_hover right" href="http://www.absolutacine.com.br"></a>
                        </div>
                    </footer>
                    <!-- Rodapé Fim -->
                </div>
            </section>
            <!-- Sessão 4 Contato Fim -->
        </div>
        <!-- FullPage Fim -->
        <!-- Modal da Corporativo 3 -->
        <div id="modal_corp">
            <div class="fundo"></div>
            <div class="close_btn modal_close"></div>
            <div class="modal absolute">
                <div class="fundo_close"></div>
                <div class="absolute nices pos-tl h-full">
                    <div class="container">
                        <div class="fundo_close"></div>
                        <!-- Iluminação -->
                        <div class="box2 btn_services absolute btn_iluminacao animate1">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/corporativo/iluminacao.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Iluminação
                            </div>
                        </div>
                        <!-- Iluminação Fim -->
                        <!-- Som -->
                        <div class="box2 btn_services absolute btn_som animate2">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/corporativo/som.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Som
                            </div>
                        </div>
                        <!-- Som Fim -->
                        <!-- Imagem -->
                        <div class="box2 btn_services absolute btn_imagem animate3">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/corporativo/imagem.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Imagem
                            </div>
                        </div>
                        <!-- Imagem Fim -->
                        <!-- Energia -->
                        <div class="box2 btn_services absolute btn_energia animate4">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/corporativo/energia.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Energia
                            </div>
                        </div>
                        <!-- Energia Fim -->
                    </div>
                </div>
                <div class="modal_2 absolute full">
                    <div class="close_btn"></div>
                    <div class="bgd"></div>
                    <!-- Modal 2 Iluminação -->
                    <div class="ilumination">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Com os projetos de iluminação, um lugar comum se transforma em um ambiente especial, aconchegante, romântico e inesquecível.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Iluminação Fim -->
                    <!-- Modal 2 Som -->
                    <div class="sound">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    A sonorização é parte fundamental do evento. É através da análise do ambiente que vamos fazer um projeto de acordo com o seu evento para que o som do Show, Palestra ou Evento Social possa chegar até os convidados com total nitidez.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-2" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-2">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Som Fim -->
                    <!-- Modal 2 Imagem -->
                    <div class="image">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Faça a diferença em seu evento com os nossos projetos de mapping, vídeo wall, projetores de alta potencia e super definição. Transformando qualquer ambiente com projetos personalizados impressionando os seus convidados.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-3" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-3">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Som Imagem -->
                    <!-- Modal 2 Energia -->
                    <div class="energy">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Geradores fornecem total segurança para seu evento. Assim, você tem a garantia de não ficar no escuro na hora em que os refletores farão você brilhar.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-4" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-4">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Energia Fim -->
                </div>
            </div>
        </div>
        <!-- Modal da Sessão 3 - Corporativo Fim -->
        <!-- Modal da Sessão 3 - Social -->
        <div id="modal_social">
            <div class="fundo"></div>
            <div class="close_btn modal_close"></div>
            <div class="modal absolute">
                <div class="fundo_close"></div>
                <div class="absolute nices pos-tl h-full">
                    <div class="container">
                        <div class="fundo_close"></div>
                        <!-- Iluminação -->
                        <div class="box2 btn_services absolute btn_iluminacao animate2">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/social/iluminacao.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Iluminação
                            </div>
                        </div>
                        <!-- Iluminação Fim -->
                        <!-- Som -->
                        <div class="box2 btn_services absolute btn_som animate4">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/social/som.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Som
                            </div>
                        </div>
                        <!-- Som Fim -->
                        <!-- Imagem -->
                        <div class="box2 btn_services absolute btn_imagem animate1">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/social/imagem.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Imagem
                            </div>
                        </div>
                        <!-- Imagem Fim -->
                        <!-- Energia -->
                        <div class="box2 btn_services absolute btn_energia animate3">
                            <div class="greater h-full pos-tl relative">
                                <div class="greatimg h-full absolute">
                                    <img class="absolute transition_slow" src="assets/img/servicos/social/energia.jpg" alt="">
                                </div>
                            </div>
                            <div class="subtitle transition_slow center_aligner absolute">
                                Energia
                            </div>
                        </div>
                        <!-- Energia Fim -->
                    </div>
                </div>
                <div class="modal_2 absolute full">
                    <div class="close_btn"></div>
                    <!-- Modal 2 Iluminação -->
                    <div class="bgd"></div>
                    <div class="ilumination">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Com os projetos de iluminação, um lugar comum se transforma em um ambiente especial, aconchegante, romântico e inesquecível.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-5" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-5">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Iluminação Fim -->
                    <!-- Modal 2 Som -->
                    <div class="sound">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    A sonorização é parte fundamental do evento. É através da análise do ambiente que vamos fazer um projeto de acordo com o seu evento para que o som do Show, Palestra ou Evento Social possa chegar até os convidados com total nitidez.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-6" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-6">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Som Fim -->
                    <!-- Modal 2 Imagem -->
                    <div class="image">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Faça a diferença em seu evento com os nossos projetos de mapping, vídeo wall, projetores de alta potencia e super definição. Transformando qualquer ambiente com projetos personalizados impressionando os seus convidados.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-7" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-7">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Som Imagem -->
                    <!-- Modal 2 Energia -->
                    <div class="energy">
                        <div class="nav full">
                            <ul>
                                <li class="ilu left transition">Iluminação</li>
                                <li class="sono left transition">Sonorização</li>
                                <li class="ima left transition">Imagem</li>
                                <li class="ene left transition">Energia</li>
                            </ul>
                        </div>
                        <div class="containerMod full">
                            <div class="container">
                                <p class="center_aligner">
                                    Geradores fornecem total segurança para seu evento. Assim, você tem a garantia de não ficar no escuro na hora em que os refletores farão você brilhar.
                                </p>
                                <div class="left sidebar pc-25">
                                    <h6>
                                        Os Melhores Equipamentos para o seu EVENTO
                                    </h6>
                                    <div id="filters-8" class="button-group">
                                        <button class="transition is-checked" data-filter="*">
                                            Mostrar tudo
                                        </button>
                                        <button class="transition" data-filter=".item1">
                                            Item 1
                                        </button>
                                        <button class="transition" data-filter=".item2">
                                            Item 2
                                        </button>
                                        <button class="transition" data-filter=".item3">
                                            Item 3
                                        </button>
                                        <button class="transition" data-filter=".item4">
                                            Item 4
                                        </button>
                                        <button class="transition" data-filter=".item5">
                                            Item 5
                                        </button>
                                        <button class="transition" data-filter=".item6">
                                            Item 6
                                        </button>
                                    </div>
                                </div>
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-8">
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item3 item5" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                        <li class="element-item item4 item6" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item2 item4" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-04.png" alt="">
                                        </li>
                                        <li class="element-item item5 item1" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-01.png" alt="">
                                        </li>
                                        <li class="element-item item6 item2" data-category="metalloid">
                                            <img src="assets/img/galeria/gal-img-02.png" alt="">
                                        </li>
                                        <li class="element-item item1 item3" data-category="transition">
                                            <img src="assets/img/galeria/gal-img-03.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 Energia Fim -->
                </div>
            </div>
        </div>
        <!-- Modal da Sessão 3 - Social Fim -->
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/nicescroll.min.js"></script>
        <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.interactive_bg.js"></script>
        <script type="text/javascript" src="assets/js/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/js/isotope.js"></script>
        <script type="text/javascript" src="assets/js/swiper/js/swiper.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript" src="assets/js/preloader.js"></script>
        <script type="text/javascript" src="assets/js/jquery.disablescroll.min.js"></script>
        <script type="text/javascript" src="assets/js/demo.js"></script>
    </body>
</html>