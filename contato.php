<?php require_once("header.php"); ?> 

<div class="flexslider_page">
    <ul class="slides">
        <li style="background-image:url('images/flexslider/slide1.jpg');"></li>
        <li style="background-image:url('images/flexslider/slide2.jpg');"></li>
        <li style="background-image:url('images/flexslider/slide3.jpg');"></li>
    </ul>
</div>		
<div class="page_header">
    <div class="center">
        <img class="page_header_logo fl" src="images/contact_logo.png" alt="Contato Logo Acqua Vida Sports">
        <h1 class="page_header_title fl">Contato</h1>
        <ul class="page_header_nav fr">
            <li><a href="index.php" title="Início">Início</a></li>
            <li><a class="active" href="contato.php" title="Contato">Contato</a></li>
        </ul>
        <div class="cf"></div>
    </div>
</div>		
<div class="contact_content">
    <div class="contact_icons">
        <ul class="contact_icon_tel fl">
            <li><strong>Telefone:</strong> <span>(42)3522-2518</span></li>
        </ul>
        <ul class="contact_icon_adr fl">
            <li><strong>Horario de Atendimento:</strong> <span>Segunda à Sexta 07:00 - 12:00 / 13:00 - 22:00</span></li>
        </ul>
        <ul class="contact_icon_mail fl">
            <li><strong>Email:</strong> <br /><span>academiaacquavida@gmail.com</span></li>
        </ul>
        <div class="cf"></div>
    </div>
    <div class="contact_form">
        <h2 class="contact_form_title">Entre em Contato Conosco:</h2>
        <div class="contact_form_box">
            <form id="contact_form" method="get" action="enviar-dados.php" class="error">
                <div class="form_box_left fl">
                    <p class="contact_names">Nome</p>
                    <input class="contact_form_input_name" name="nome" id="nome" type="text" maxlength="50" placeholder="Digite seu Nome"/>
                    <p class="contact_names">E-mail</p>
                    <input class="contact_form_input_mail" name="email" id="email" type="text" maxlength="50" placeholder="Digite seu E-mail"/>
                    <p class="contact_names">Telefone</p>
                    <input class="contact_form_input_phone" id="telefone" name="telefone" maxlength="14" type="text"  placeholder="Digite seu Telefone"/>
                    <li>
                    <label class="contact_names">Modalidades</label>
                    <select class="contact_form_input_select" name="modalidade" id="modalidade">
                        <option value="0" selected >Selecione uma Modalidade</option>
                        <option value="Aerodança">Aerodanca</option>
                        <option value="Hidroginástica">Hidroginastica</option>
                        <option value="Muay-Thai">Muay-Thai</option>
                        <option value="Musculação">Musculação</option>
                        <option value="Natação">Natação</option>
                        <option value="Natação Baby">Natação Baby</option>
                        <option value="Natação Infantil">Natação Infantil</option>
                        <option value="Spinning">Spinning</option>
                        <option value="Zumba">Zumba</option>
                    </select>
                </li>
                </div>
                
                <div class="form_box_center fl" >
                    <p class="contact_mensagem">Mensagem</p>
                    <textarea class="contact_form_textarea" name="mensagem" id="mensagem" placeholder="Digite sua Mensagem"></textarea>
                </div>
                <div class="form_box_righ fl">
                    <input class="contact_form_submit" type="image" src="images/submit_button.png" alt="Submit" title="Enviar Mensagem"/>
                </div>
                <div class="cf"></div>
            </form>
        </div>
    </div>
</div>


<?php require_once("footer.php"); ?> 
