<?php require_once("header.php"); ?> 

<?php
if (isset($_POST['acao']) == 'enviar') {
    $nome = strip_tags(trim($_POST['nome']));
    $email = strip_tags(trim($_POST['email']));
    $telefone = strip_tags(trim($_POST['telefone']));
    $assunto = "Cadastro de E-mail no site AcquaVidaSports";
    $mensagem = "Cadastro do Nome: $nome, do Email: $email e do Telefone: $telefone";

    require("phpMailer/class.phpmailer.php");
    // Inicia a classe PHPMailer
    $mail = new PHPMailer();

    // Define os dados do servidor e tipo de conexão
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    //$mail->Host = "localhost"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Username = 'contato@acquavidasport.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'ASA5595478*/w'; // Senha do servidor SMTP (senha do email usado)
    // Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->From = $email; // Seu e-mail
    $mail->Sender = $email; // Seu e-mail
    $mail->FromName = "Fale Conosco. Academia Acqua Vida Sports"; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('contato@acquavidasport.com.br', 'Acqua Vida Sports');
    $mail->AddAddress('contato@acquavidasport.com.br', 'Acqua Vida Sports');
    //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = $assunto; // Assunto da mensagem
    $mail->Body = $mensagem;

    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail
    $enviado = $mail->Send();

    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    // Exibe uma mensagem de resultado
    if ($enviado) {
        echo "<script>alert('E-mail enviado com sucesso. Em Breve entraremos em contato para melhores informações.');</script>";
        echo "<script>history.back();</script>";
    } else {
        echo "<script>alert('Não foi possível enviar. Tente novamente mais tarde.');</script>";
        echo "<script>history.back();</script>";
        echo "Informações do erro: " . $mail->ErrorInfo;
    }
}
?> 
<div id="boxes">
    <!-- Janela Modal -->
    <div id="dialog2" class="window" style="top: 50% !important; left: 50% !important;">
        <div align="right">
            <input type="button" value="Fechar" class="close"/>
        </div>
        <div class="all">
            <div class="box-cont">
                <img src="images/splash.jpg" alt="Sprash" />
            </div>
            <div class="box-cont-right">
                <div class="box-content">
                    <p>Participe da Escolinha de Futebol</p>
                </div>
                <form class="formulario" role="form" method="POST" id="form-promocao">
                    <input type="hidden" name="acao" value="enviar"/>
                    <input class="texto nome"  style="color: #666 !important;" name="nome" id="nome" type="text" placeholder="Nome" />
                    <input class="texto email" style="color: #666 !important;" name="email" id="email" type="text" placeholder="E-mail" />
                    <input class="texto telefone" style="color: #666 !important;" name="telefone" id="telefone" maxlength="14" type="text" placeholder="Telefone" />
                    <button type="submit" class="btn btn-success botao">Quero Participar</button>
                </form>           
                <p class="texto-p">A <strong>Academia Acqua Vida Sport</strong> poderá utilizar suas informações para entrar em contato com você. Mas fique tranquilo, não repassaremos nenhuma delas para terceiros!</p>
                <img class="imagem-sprash" src="images/logo-splash.png" alt="Acqua Vida Logo" />
            </div>
        </div>
    </div>
    <!-- Fim Janela Modal-->

    <!-- Máscara para cobrir a tela -->
    <div id="mask" style="display: block; opacity: 0.8; overflow: hidden;"></div>

</div>
<!-- Slider Section Start -->
<div class="flexslider" id="home-slider">
    <ul class="slides">
        <li style="background-image:url('images/flexslider/slide1.jpg'); background-size:cover; background-position:center center;"></li>
        <li style="background-image:url('images/flexslider/slide2.jpg'); background-size:cover; background-position:center center;"></li>
        <li style="background-image:url('images/flexslider/slide3.jpg'); background-size:cover; background-position:center center;"></li>
    </ul>
</div>
<!-- Services Section Start -->
<div class="services">
    <div class="services_center">
        <div class="services_item first fl">
            <div class="services_item_regular">					
                <h3 class="services_item_title"><a>Musculação</a></h3>
                <div class="services_backgr">
                    <p class="services_item_pic">
                        <img src="images/services/musculacao.png" alt="Musulação Academia Acqua Vida Sport">
                    </p>
                    <div class="services_pic_line"> </div>
                    <p class="services_item_desc">
                        Acompanhe os horários de <strong>Musculação</strong> e agende um horário.
                    </p>
                </div>
            </div>
            <div class="services_item_hover">
                <h3 class="services_item_title_hover"><a>Musculação</a></h3>
                <a href="agenda.php">
                    <p class="services_item_pic_hover">
                        <img src="images/services/img-musculacao.jpg" alt="Musculação Academia Acqua Vida Sport">
                    </p> 
                </a>               
                <p class="services_item_link_hover">
                    <a href="agenda.php" title="Veja um horário">Saiba Mais</a>
                </p>
            </div>										
        </div>
        <div class="services_item second fl">
            <div class="services_item_regular">					
                <h3 class="services_item_title"><a>Natação</a></h3>
                <div class="services_backgr">
                    <p class="services_item_pic">
                        <img src="images/services/natacao.png" alt="Natação Academia Acqua Vida Sport">
                    </p>
                    <div class="services_pic_line"> </div>
                    <p class="services_item_desc">
                        Acompanhe os horários de <strong>Natação</strong> e agende um horário.
                    </p>
                </div>
            </div>
            <div class="services_item_hover">
                <h3 class="services_item_title_hover"><a>Natação</a></h3>
                <a href="agenda.php">
                    <p class="services_item_pic_hover">
                        <img src="images/services/img-natacao.jpg" alt="Natação Academia Acqua Vida Sport">
                    </p>
                </a>
                <p class="services_item_link_hover">
                    <a href="agenda.php" title="Veja um horário">Saiba Mais</a>
                </p>
            </div>
        </div>
        <div class="services_item fl third">
            <div class="services_item_regular">
                <h3 class="services_item_title"><a>Dança</a></h3>
                <div class="services_backgr">
                    <p class="services_item_pic">
                        <img src="images/services/danca.png" alt="Dança Academia Acqua Vida Sport">
                    </p>
                    <div class="services_pic_line"> </div>
                    <p class="services_item_desc">
                        Acompanhe os horários de <strong>Dança</strong> e agende um horário.
                    </p>
                </div>
            </div>
            <div class="services_item_hover">
                <h3 class="services_item_title_hover"><a>Dança</a></h3>
                <a href="agenda.php">
                    <p class="services_item_pic_hover">
                        <img src="images/services/img-danca.jpg" alt="Dança Academia Acqua Vida Sport">
                    </p>
                </a>
                <p class="services_item_link_hover">
                    <a href="agenda.php" title="Veja um horário">Saiba Mais</a>
                </p>
            </div>					
        </div>
        <div class="services_item fl last">
            <div class="services_item_regular">
                <h3 class="services_item_title"><a>Spinning</a></h3>
                <div class="services_backgr">
                    <p class="services_item_pic">
                        <img src="images/services/cardio_fitness.png" alt="Spinning Academia Acqua Vida Sport">
                    </p>
                    <div class="services_pic_line"> </div>
                    <p class="services_item_desc">
                        Acompanhe os horários de <strong>Spinning</strong> e agende um horário.
                    </p>
                </div>
            </div>
            <div class="services_item_hover">
                <h3 class="services_item_title_hover"><a>Spinning</a></h3>
                <a href="agenda.php">
                    <p class="services_item_pic_hover">
                        <img src="images/services/img-spinning.jpg" alt="Spinning Academia Acqua Vida Sport">
                    </p>
                </a>
                <p class="services_item_link_hover">
                    <a href="agenda.php" title="Veja um horário">Saiba Mais</a>
                </p>
            </div>
        </div>
        <div class="services_item second fl hidroginastica">
            <div class="services_item_regular">					
                <h3 class="services_item_title"><a>Hidroginastica</a></h3>
                <div class="services_backgr">
                    <p class="services_item_pic">
                        <img src="images/services/hidroginastica.png" alt="Hidroginástica Academia Acqua Vida Sport">
                    </p>
                    <div class="services_pic_line"> </div>
                    <p class="services_item_desc">
                        Acompanhe os horários de <strong>Hidroginástica</strong> e agende um horário.
                    </p>
                </div>
            </div>
            <div class="services_item_hover">
                <h3 class="services_item_title_hover"><a>Hidroginastica</a></h3>
                <a href="agenda.php">
                    <p class="services_item_pic_hover">
                        <img src="images/services/img-hidroginastica.jpg" alt="Hidroginástica Academia Acqua Vida Sport">
                    </p>
                </a>
                <p class="services_item_link_hover">
                    <a href="agenda.php" title="Veja um horário">Saiba Mais</a>
                </p>
            </div>
        </div>
        <div class="cf"></div>
    </div>
</div>
<!-- Welcome Section Start -->
<div class="welcome">
    <h1>Seja Bem-Vindo à Acqua Vida Sport</h1>
    <p>A academia Acqua Vida Sports conta com uma estrutura completa para oferecer aos seus alunos uma grande variedade de atividades físicas. <strong>VENHA CONHECER!!!</strong></p>
    <div class="video">
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li>
                        <p class="p-video">Spinning</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/Wwecw4OiYhk" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Hidroginástica</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/dYCKgyiGoIw" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Zumba</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/uORHtQMOf2s" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Musculação</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/U4uN2OMlpWI" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Aerodança</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/CfMs-zPq9cQ" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Natação</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/fzcHlJL6niI" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Natação Infantil</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/IZXBMdz_azI" frameborder="0" allowfullscreen></iframe>
                    </li>
                    <li>
                        <p class="p-video">Natação Baby</p>
                        <iframe width="600" height="300" src="//www.youtube.com/embed/EPbJXiFVjVY" frameborder="0" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <p class="jcarousel-pagination"></p>
        </div>
    </div>    
</div>
<!-- Classes Section Start -->
<div class="upcoming_classes">
    <h1 class="upcoming_classes_title"></h1>
    <div class="upcoming_classes_container" id="container">
        <div class="item masonry1 fl">
            <a><img src="images/galeria/img-zumba.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Zumba</h3>
                <div>Beto Perez é um personal trainer de celebridades que descobriu...</div>
                <p><a href="zumba.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry2 fl">
            <a><img src="images/galeria/img-natacao-infantil.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Natação Infantil</h3>
                <div>Estudos indicam que a natação é a única atividade que pode ser praticada sem contra-indicações, em todas as idades...</div>
                <p><a href="natacao_infantil.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry3 fl">
            <a><img src="images/galeria/img-aerodanca.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Aerodanca</h3>
                <div>Conheça os benefícios do aerodance. O aeróbico dos anos 80 reaparece...</div>
                <p><a href="aerodanca.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry4 fl">
            <a><img src="images/galeria/img-hidroginastica.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Hidroginástica</h3>
                <div>A hidroginástica melhora a capacidade aeróbica e cardiorespiratória...</div>
                <p><a href="hidroginastica.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry5 fl">
            <a><img src="images/galeria/img-natacao-baby.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Natação Baby</h3>
                <div>A criança principalmente em seus primeiros anos de vida, passa por um processo...</div>
                <p><a href="natacao_baby.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry6 fl">
            <a><img src="images/galeria/img-natacao.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Natação</h3>
                <div>A atividade costuma trabalhar braços, pernas, cabeça, tronco e quadril, tudo ao mesmo tempo...</div>
                <p><a href="natacao.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry7 fl">
            <a><img src="images/galeria/img-musculacao.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Musculação</h3>
                <div>A musculação é, hoje, uma das atividades mais recomendadas pelos profissionais da saúde para qualquer pessoa...</div>
                <p><a href="musculacao.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="item masonry8 fl">
            <a><img src="images/galeria/img-spinning.jpg" alt=""></a>
            <div class="item_hover">
                <h3>Spinning</h3>
                <div>As aulas de Spinning surgiram como um verdadeiro milagre para quem quer perder peso...</div>
                <p><a href="spinning.php">Leia Mais</a></p>
            </div>
        </div>
        <div class="cf"></div>
    </div>
</div>
<?php require_once("footer.php"); ?> 