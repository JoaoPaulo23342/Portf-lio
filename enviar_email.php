<?php 

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$destinatario = "joao.paulorcsilva@gmail.com";
$assunto = "Contato - " . $assunto;
$body = "Nome: ".$nome."\n".
"Email: ".$email."\n".
"assunto: ".$assunto."\n".
"Mensagem: ".$mensagem;
$head = "From: joao.paulorcsilva@gmail.com"."\n"."Reply-To: ".$email."\n".
"X=Mailer: PHP/".phpversion();

if(mail($destinatario, $assunto, $body, $head)) {
    echo "Email enviado com sucesso!";
} else {
    echo "O email não pode ser enviado.";
}



?>