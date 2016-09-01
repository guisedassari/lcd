<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Home | LCD</title>
        <meta name="author" content="Absoluta Cine" />
        <link rel="icon" type="image/png" href="<?= base_url('assets/site/img/favicon.png') ?>">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/site/css/style.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/site/css/animate.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/site/css/jquery.fullPage.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/site/js/swiper/css/swiper.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/site/js/fancybox/jquery.fancybox.css') ?>"/>
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
            <?php include 'sessão1.php'; ?>
            <!-- Banner Sessão 1 Fim-->
            <!-- Sessão 2 Somos Assim -->
            <?php include 'sessão2.php'; ?>
            <!-- Sessão 2 Somos Assim Fim -->
            <!-- Sessão 3 Trabalhamos Assim -->
            <?php include 'sessão3.php'; ?>
            <!-- Sessão 3 Trabalhamos Assim Fim -->
            <!-- Sessão 4 Contato -->
            <?php include 'sessão4.php'; ?>
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/corporativo/iluminacao.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/corporativo/som.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/corporativo/imagem.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/corporativo/energia.jpg') ?>" alt="">
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
                                <div class="left pc-75 right_content">
                                    <ul class="isotope">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'corporativo') :
                                                if ($galeria['subcategoria'] == 'iluminacao') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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

                                <div class="left pc-75 right_content">
                                    <ul class="isotope-2">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'corporativo') :
                                                if ($galeria['subcategoria'] == 'sonorizacao') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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

                                <div class="left pc-75 right_content">
                                    <ul class="isotope-3">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'corporativo') :
                                                if ($galeria['subcategoria'] == 'imagem') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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

                                <div class="left pc-75 right_content">
                                    <ul class="isotope-4">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'corporativo') :
                                                if ($galeria['subcategoria'] == 'energia') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>

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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/social/iluminacao.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/social/som.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/social/imagem.jpg') ?>" alt="">
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
                                    <img class="absolute transition_slow" src="<?= base_url('assets/site/img/servicos/social/energia.jpg') ?>" alt="">
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
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-5">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'social') :
                                                if ($galeria['subcategoria'] == 'iluminacao') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-6">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'social') :
                                                if ($galeria['subcategoria'] == 'sonorizacao') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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

                                <div class="left pc-75 right_content">
                                    <ul class="isotope-7">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'social') :
                                                if ($galeria['subcategoria'] == 'imagem') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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
                                <div class="left pc-75 right_content">
                                    <ul class="isotope-8">
                                        <?php
                                        foreach ($galerias as $galeria) :
                                            if ($galeria['categoria'] == 'social') :
                                                if ($galeria['subcategoria'] == 'energia') :
                                                    $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
                                                    ?>
                                                    <li class="element-item item1 item3" data-category="transition">
                                                        <?= img(array('src' => base_url("uploads/" . $caminho . $galeria['imagem']), 'class' => 'galeria-img')) ?>
                                                    </li>
                                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                        ?>
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
        <script type="text/javascript" src="<?= base_url('assets/site/js/nicescroll.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/skrollr.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/jquery.fullPage.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/jquery.interactive_bg.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/fancybox/jquery.fancybox.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/swiper/js/swiper.min.js') ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/preloader.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/jquery.disablescroll.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/site/js/demo.js') ?>"></script>
    </body>
</html>