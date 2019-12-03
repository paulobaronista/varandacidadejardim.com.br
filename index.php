<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title>Varanda | Cidade Jardim</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="stylesheets/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet">

    <link rel="shortcut icon" sizes="192x192" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta name="theme-color" content="#c88c78"-->

    <meta name="author" content="Roger Junior | www.rogerjunior.com">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/lity.css" />
    <script type="text/javascript" src="dist/lity.js"></script>


    <!-- Global site tag (gtag.js) - Google Ads: 711528061 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-711528061"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-711528061');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147096920-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147096920-1');
    </script>
    <script type='text/javascript'>
    window.__lo_site_id = 170302;

    (function() {
        var wa = document.createElement('script');
        wa.type = 'text/javascript';
        wa.async = true;
        wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wa, s);
    })();
    </script>
</head>

<body>
    <div id="ma">
        <div class="container" style="padding: 0;">

            <img src="images/ma.png" alt="MA" style="max-width: 100px;"> apresenta
        </div>
    </div>



    <nav>
        <div class="container">
            <img src="images/logo.png" alt="Varanda Cidade Jardim" style="max-width: 200px;">

            <div class="hamburguer">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="menu">
                <div class="menu-x">x</div>
                <li><a href="#home">Home</a></li>
                <li><a href="#projeto">Projeto</a></li>
                <li><a href="#apto">Seu Apto.</a></li>
                <li><a href="#localizacao">Localização</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#obras" data-lity>Obras iniciadas</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">


        <div id="hero" style="
        background-image: url(images/bg<?php $foto = rand(0,1); echo $foto?>.jpg);">
            <div class="container wrap" style="
            display: flex;
            justify-content: space-between;
        ">

                <h1 class="center-m"
                    style="margin-top: 4rem; flex: 1; <?php if ($foto == 1) { echo 'text-align: right;'; } ?>">Uma <u
                        style="
            text-decoration-color: white;">exclusividade</u><br>nunca vista</h1>
                <form action="obrigado.php" method="post" id="contato">
                    <div class="flex" style="    background-color: #dab97a;
                    padding: 1rem 2rem; margin: 0;
                    color: black;"><span>Agende uma visita</span><img src="images/ico-calendario.png" alt=""></div>

                    <p>Por favor preencha seus dados que entraremos em contato.</p>

                    <div>
                        <input class="input" type="text" name="nome" placeholder="Nome completo" required>
                        <input class="input" type="email" name="email" placeholder="E-mail" required>
                        <input class="input" type="phone" name="telefone" placeholder="Telefone" required>
                        <textarea class="input" type="text" name="mensagem" placeholder="Mensagem" required></textarea>

                    </div>
                    <div><input class="input" type="submit" value="Enviar"></div>
                </form>
            </div>
        </div>
    </header>

    <section class="slider-bg" style="background-image: url(images/hero0.jpg);" id="projeto">

        <div class="overlay">
            <div style="max-width: 400px;">

                <h2 id="muda">Quando quiser ir a um dos <u style="
                        text-decoration-color: #dab97a;">empórios mais famosos de São Paulo</u>, é só pegar o elevador.
                </h2>


                <div class="next">
                    <</div> <div class="next">>
                </div>

            </div>
        </div>

    </section>

    <section class="flex wrap" id="apto">
        <div class="pad" style="padding: 6rem; flex:1; text-align: center; min-width: 320px; "><img
                src="images/logo-grande.png" alt=""></div>
        <div class="pad center-m"
            style="background: black; color: white; min-width: 320px; flex:2;font-size:180%; padding: 6rem;"
            class="desc">
            <h3 style="color: #dab97a; margin: 0;">Apartamentos de 253m²</h3>
            <p>3 Suítes</p>
            <p>4 Vagas</p>
            <p>Depósito</p>
            <p>Amplo terraço</p>
            <p>OBRAS EM ANDAMENTO. <a href="#obras" data-lity style="color: #dab97a; ">Clique e acompanhe</a>.</p>
            <p>A PARTIR DE R$ 20 MIL/M²</p>
        </div>
    </section>

    <div style="background: white; padding: 1rem; text-align: center;" class="lity-hide" id="obras">
        <h2>Obras aceleradas</h2>
        <div style="display: flex; justify-items: center;">
            <div style="text-align: center;">
                Outubro/2019<br>
                <video width="100%" controls style="margin: 2rem; max-width: 200px;">
                    <source src="DJI_0003.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div style="text-align: center;">

            Outubro/2019<br>
                <video width="100%" controls style="margin: 2rem; max-width: 200px;">
                    <source src="DJI_0005.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <!-- section style="font-size: 150%; padding-top: 2rem; background: #dab97a; ">
            <div class="container" style="text-align: center;">
        <h2>A ELEGÂNCIA E O REQUINTE DÃO AS BOAS VINDAS</h2>
        </div>
    </section -->

    <section style="background-color: black; color: white; padding: 1rem; text-align: center;">

        <div class="container">
            <h2 class="title" style="font-size: 180%;">UM PROJETO SEM IGUAL ASSINADO PELO PREMIADÍSSIMO ESCRITÓRIO
                AFLALO GASPERINI</h2>
            <div class="slider" id="slider1">
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Fachada_HR.jpg" alt="">
                    <legend>Perspectiva artística da Fachada</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Hall_Social_HR.jpg" alt="">
                    <legend>Perspectiva artística do Hall</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_GourmetFestas01_HR.jpg" alt="">
                    <legend>Perspectiva artística do Salão de Festas 1</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_GourmetFestas02_HR.jpg" alt="">
                    <legend>Perspectiva artística do Salão de Festas 2</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Academia_HR.jpg" alt="">
                    <legend>Perspectiva artística do Espaço Fitness</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Brinquedoteca_HR.jpg" alt="">
                    <legend>Perspectiva artística da Brinquedoteca</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Bicicletario_HR.jpg" alt="">
                    <legend>Perspectiva artística do Bike Station</legend>
                </figure>
            </div>
        </div>

    </section>
    <section>
        <div class="container" style="text-align: center;">

            <h2 class="title">VIVA COM A EXCLUSIVIDADE QUE VOCÊ DESEJA.</h2>

            <div class="slider" id="slider2">

                <figure>
                    <img src="images/perspectivas/MA_Varandas_Voo260_HR.jpg" alt="">
                    <legend>Perspectiva artística da Vista do apartamento</legend>
                </figure>

                <figure>
                    <img src="images/perspectivas/MA_Varandas_Terraço_260_HR.jpg" alt="">
                    <legend>Perspectiva artística do Terraço</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MA_Varandas_Living260_HR.jpg" alt="">
                    <legend>Perspectiva artística do Living</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MuniAbbud_Varanda_Living_HR.jpg" alt="">
                    <legend>Perspectiva artística do Living</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MuniAbbud_Varanda_LivingEstendido_HR.jpg" alt="">
                    <legend>Perspectiva artística do Living Estendido</legend>
                </figure>
                <figure>
                    <img src="images/perspectivas/MuniAbbud_Varanda_Suite_HR.jpg" alt="">
                    <legend>Perspectiva artística da Suíte</legend>
                </figure>

                
                
                


                <figure>
                    <img src="images/perspectivas/MA_Varandas_Planta_253m_Padrao.jpg" alt="">
                    <legend></legend>
                </figure>

<figure>
    <img src="images/perspectivas/MA_Varandas_Planta_253m_Op_01.jpg" alt="">
    <legend></legend>
</figure>

<figure>
    <img src="images/perspectivas/MA_Varandas_Planta_253m_Op_02.jpg" alt="">
    <legend></legend>
</figure>

<figure>
    <img src="images/perspectivas/MA_Varandas_Planta_253m_Op_03.jpg" alt="">
    <legend></legend>
</figure>

<figure>
    <img src="images/perspectivas/MA_Varandas_Planta_253m_Op_04.jpg" alt="">
    <legend></legend>
</figure>

<figure>
    <img src="images/perspectivas/MA_Varandas_Planta_253m_Op_05.jpg" alt="">
    <legend></legend>
</figure>
            </div>

    </section>


    <section id="localizacao"
        style="text-align: center; background: black; padding: 4rem; color: white; font-size: 200%;" class="font">
        <span style="padding: 0.5rem; border-bottom: 2px solid #dab97a;
        font-family: 'Trajan Pro', 'Times New Roman', Times, serif;">JUNTO AO ITAIM BIBI NA REGIÃO MAIS NOBRE DE SÃO
            PAULO</span>
    </section>

    <section>
        <img src="images/mapa.jpg" style="width: 100%;">
    </section>
    <section style="background-color: #f2e7d1; padding: 0.25rem;">

        <div class="font"
            style="background-color: #dab97a; margin: auto;margin-top: -3rem; font-size: 200%; z-index: 3; text-align: center; max-width: 600px; position: relative; padding: 2rem;">
            <strong>Visite stand de vendas:</strong><br>
            Rua Itapé-Açú • Cidade Jardim<br><small>(Travessa da Av. Tajurás, junto ao Itaim Bibi)</small>
        </div>
        <div class="container flex "
            style="justify-content: space-around; margin: 3rem auto; align-items: flex-start; text-align: center;">
            <div style="flex: 1; padding: 8px;">
                <p style="margin-bottom: 8px;">Coordenação de vendas:</p>
                <img src="images/Solai - logo.png" alt="" style="   margin: auto; display: block; pading: 8px; max-width: 100%;width: 180px;
    height: auto;">
            </div>
            <div style="flex: 1; padding: 8px;">
                <p style="margin-bottom: 16px;">Construção:</p>
                <img src="images/tecnum.png" alt="" style="  margin: auto; display: block; pading: 8px;  max-width: 100%;width: 180px;
    height: auto;">
            </div>
            <div style="flex: 1; padding: 8px;">
                <p style="margin-bottom: 8px;">Realização:</p>
                <a href="http://maei.com.br/"><img src="images/M.A. - logo.png" alt="" style="  margin: auto; display: block; pading: 8px;  max-width: 100%;width: 180px;
    height: auto;"></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            A Incorporação se encontra registrada sob o nº R-03, na matrícula nº 248.981 do 18º Oficial de Registro de
            Imóveis de São Paulo/SP. Imagens Ilustrativas. As áreas comuns serão entregues conforme Memorial Descritivo
            do empreendimento. Os materiais e cores estão sujeitos a variações em razão da disponibilidade dos produtos
            no mercado.
        </div>
    </footer>

    <script>
    $('#slider1').slick({
        dots: true,
        fade: false,
        infinite: true,
        arrows: true,
        autoplaySpeed: 4000,
        autoplay: true,
        adaptiveHeight: true
    });
    $('#slider2').slick({
        dots: true,
        fade: false,
        infinite: true,
        arrows: true,
        autoplaySpeed: 4000,
        autoplay: true,
        adaptiveHeight: true
    });

    var atual = 0;

    $('.next').click(function() {
        if (atual == 0) {
            $('#muda').html('Nasce um projeto inédito criado para pessoas únicas');
            $('.slider-bg').css('background-image', 'url(images/hero1.jpg)');
            atual = 1;
        } else {

            $('#muda').html(
                'Quando quiser ir a um dos <u style="text-decoration-color: #dab97a;">empórios mais famosos de São Paulo</u>, é só pegar o elevador.'
                );
            $('.slider-bg').css('background-image', 'url(images/hero0.jpg)');
            atual = 0;
        }
    });


    $('.hamburguer').click(function() {
        $('.menu').show();

    });
    $('.menu-x').click(function() {
        $('.menu').hide();

    });
    </script>
</body>

</html>