<?php
function anti_injection($sql) {
    // remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
    $sql = trim($sql); //limpa espaços vazio
    $sql = strip_tags($sql); //tira tags html e php
    $sql = addslashes($sql); //Adiciona barras invertidas a uma string
    return $sql;
}


    $nome = strip_tags(trim($_POST['nome']));
    $email = strip_tags(trim($_POST['email']));

    $nome = anti_injection($nome);
    $email = anti_injection($email);
    $assunto = "Cadastro de E-mail no site AcquaVidaSports";
    $mensagem = "Newsletter. Academia Acqua Vida Sport. $nome e E-mail: $email";

    if (empty($nome)) {
        echo "<script>alert('Digite um nome');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($email)) {
        echo "<script>alert('Digite um e-mail');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        $mensagemHTML = "USUARIO " . $nome . " com o seguinte email: " . $email . "se cadastrou na newsletter.";
        $headers = "MIME-Version: 1.1" . $quebra_linha;
        $headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
        $headers .= "From: academiaacquavida@gmail.com " . $email . $quebra_linha;
        $headers .= "Reply-To: " . $emailremetente . $quebra_linha;
        if (!mail($email, $assunto, $mensagemHTML, $headers, "-r" . $email)) { // Se for Postfix
            $headers .= "Return-Path: academiaacquavida@gmail.com " . $emailsender . $quebra_linha; // Se "não for Postfix"
            mail($email, $assunto, $mensagemHTML, $headers);
        }
        print "<p class='bg-success dangerous'>Enviado com sucesso. <a href='index.php'>Clique aqui para voltar</a></p>";
    }

?>