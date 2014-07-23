<?php
$pagina = end(explode("/", $_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php
            if ($pagina == 'index.php') {
                echo "Academia Acqua Vida Sport | União da Vitória (PR)";
            } else if ($pagina == 'agenda.php') {
                echo "Academia Acqua Vida Sport | Agenda";
            } else if ($pagina == 'galeria.php') {
                echo "Academia Acqua Vida Sport | Galeria de Fotos";
            } else if ($pagina == 'contato.php') {
                echo "Academia Acqua Vida Sport | Fale Conosco";
            } else if ($pagina == 'musculacao.php') {
                echo "Academia Acqua Vida Sport | Musculaçao";
            } else if ($pagina == 'aerodanca.php') {
                echo "Academia Acqua Vida Sport | Aerodança";
            } else if ($pagina == 'hidroginastica.php') {
                echo "Academia Acqua Vida Sport | Hidroginástica";
            } else if ($pagina == 'natacao.php') {
                echo "Academia Acqua Vida Sport | Natacao";
            } else if ($pagina == 'natacao_baby.php') {
                echo "Academia Acqua Vida Sport | Natação Baby";
            } else if ($pagina == 'natacao_infantil.php') {
                echo "Academia Acqua Vida Sport | Natação Infantil";
            } else if ($pagina == 'spinning.php') {
                echo "Academia Acqua Vida Sport | Spinning";
            } else if ($pagina == 'zumba.php') {
                echo "Academia Acqua Vida Sport | Zumba";
            } else if ($pagina == 'galeria_musculacao.php') {
                echo "Academia Acqua Vida Sport | Musculação";
            } else if ($pagina == 'galeria_piscina.php') {
                echo "Academia Acqua Vida Sport | Piscinas";
            } else if ($pagina == 'galeria_danca.php') {
                echo "Academia Acqua Vida Sport | Dança";
            } else if ($pagina == 'galeria_entrada.php') {
                echo "Academia Acqua Vida Sport | Entrada";
            } else if ($pagina == 'galeria_sala_de_exames.php') {
                echo "Academia Acqua Vida Sport | Sala de Exames";
            } else if ($pagina == 'galeria_vestiario.php') {
                echo "Academia Acqua Vida Sport | Vestiário";
            } else if ($pagina == 'muay-thai.php') {
                echo "Academia Acqua Vida Sport | Muay Thai";
            }
            ?></title>
        <meta charset="utf-8"/>
        <meta name="description" content="Academia Acqua Vida Sport. Localizada no Centro de União da Vitória (PR), sempre com as melhores opções para a sua qualidade de vida"/>
    <meta name="keywords" content="Musculação, Natação, Dança, Spinining, Hidroginástica, Academia, União da Vitória, Porto União, Acqua Vida, Sport, Academia Acqua Vida"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>       
    <meta name="author" content="StylusGrafy. Marketing e Propaganda"/>
    <link rel="shortcut icon" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/splash.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/jcarousel.basic.css"/>
    
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/splash.js"></script>
    <script type="text/javascript" language="javascript" src="js/jcarousel.basic.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/libs/jquery.flexslider-min.js"></script>
    <script type="text/javascript" language="javascript" src="js/libs/masonry.pkgd.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/scripts.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" language="javascript" src="js/maskedinput.js"></script>
    <script type="text/javascript" language="javascript" src="js/acquavida.js"></script>

    <script language="javascript" type="text/javascript">
        /* Máscaras ER */
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }
        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }
        function mtel(v) {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeyup = function() {
                mascara(this, mtel);
            }
        }
    </script>
   <script type="text/javascript">
    $(function(){

    var jElement = $(".window");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 300 ){
            jElement.css({
                'position':'fixed',
                'top':'300px'
            });
        }else{
            jElement.css({
                'top':'300px'
            });
        }
    });

});
    </script>

</head>
<body>
    <!-- Header Section Start -->
    <header class="header">
        <div class="header_center">
            <div class="header_logo fl"><a href="index.php"><img src="images/logo.png" alt="Logo Acqua Vida Sports"></a></div>
            <ul class="nav fl cf">
                <?php
                $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
                ?>
                <li <?php
                if ($paginaCorrente == 'index.php') {
                    echo 'class="pagina"';
                }
                ?> ><a href="index.php" title="Página Inicial. Academia Acqua Vida Sports">Início</a></li>
                <li <?php
                if ($paginaCorrente == 'agenda.php') {
                    echo 'class="pagina"';
                }
                ?> ><a href="agenda.php" title="Agenda. Academia Acqua Vida Sports">Agenda</a></li>
                <li <?php
                if ($paginaCorrente == 'galeria.php') {
                    echo 'class="pagina"';
                }
                ?> ><a href="galeria.php" title="Galeria de Fotos. Academia Acqua Vida Sports">Galeria</a>                              
                <li <?php
                if ($paginaCorrente == 'contato.php') {
                    echo 'class="pagina"';
                }
                ?> class="active"><a href="contato.php" title="Contato. Academia Acqua Vida Sports">Contatos</a></li>
            </ul>
            <div class="nav_respons fl">
                <a href="javascript:;" onclick="HideShowMenu();">Menu de navegação</a>
                <ul class="nav_respons_drop" id="nav_dropdown">                       
                    <li><a href="index.php" title="Página Inicial. Academia Acqua Vida Sports">Início</a></li>
                    <li><a href="agenda.php" title="Agenda. Academia Acqua Vida Sports">Agenda</a></li>
                    <li><a href="galeria.php" title="Galeria de Fotos. Academia Acqua Vida Sports">Galeria</a></li>
                    <li><a href="contato.php" title="Contato. Academia Acqua Vida Sports">Contatos</a></li>
                </ul>
            </div>
            <div class="header_telefon fl">(42) 3522-2518</div>
            <div class="cf"></div>
        </div>
    </header>

