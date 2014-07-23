<?php
function anti_injection($sql) {
// remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
    $sql = trim($sql); //limpa espaços vazio
    $sql = strip_tags($sql); //tira tags html e php
    $sql = addslashes($sql); //Adiciona barras invertidas a uma string
    return $sql;
}
$nome = strip_tags(trim($_GET['nome']));
$email = strip_tags(trim($_GET['email']));
$telefone = strip_tags(trim($_GET['telefone']));
$modalidade = strip_tags(trim($_GET['modalidade']));
$mensagem = strip_tags(trim($_GET['mensagem']));
$nome = anti_injection($nome);
$email = anti_injection($email);
$telefone = anti_injection($telefone);
$modalidade = anti_injection($modalidade);
$mensagem = anti_injection($mensagem);
$assunto = "Fale Conosco. Academia AcquaVidaSport";
$emaildest = "academiaacquavida@gmail.com";
if (empty($nome)) {
    echo "<script>alert('Digite um nome');</script>";
    echo "<script>history.back();</script>";
    exit();
} else
if (empty($email)) {
    echo "<script>alert('Digite um email');</script>";
    echo "<script>history.back();</script>";
    exit();
} else
if (empty($telefone)) {
    echo "<script>alert('Digite um telefone');</script>";
    echo "<script>history.back();</script>";
    exit();
} else
if (empty($modalidade)) {
    echo "<script>alert('Selecione uma modalidade');</script>";
    echo "<script>history.back();</script>";
    exit();
} else
if (empty($mensagem)) {
    echo "<script>alert('Digite uma mensagem');</script>";
    echo "<script>history.back();</script>";
    exit();
} else {
    $mensagemHTML = $mensagem. "com a modalidade: $modalidade";
    $headers = "MIME-Version: 1.1" . $quebra_linha;
    $headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
    $headers .= "From: " . $email . $quebra_linha;
    $headers .= "Reply-To: " . $email . $quebra_linha;
    if (mail($emaildest, $assunto, $mensagemHTML, $headers, "-r" . $email)) { // Se for Postfix
        $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
        mail($emaildest, $assunto, $mensagemHTML, $headers);
        echo "<script>alert('E-mail Enviado com sucesso.');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        echo "<script>alert('Erro ao enviar.');</script>";
        echo "<script>history.back();</script>";
        exit();
    }
}
?>