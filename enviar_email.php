<?

//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
if(isset($_POST['enviar'])){
    $assunto = "solicitação de orçamento";

    // pegando os dados do form...
    $msg = "Nome: " . $_POST["nome"] . "<br>";
    $msg .= "Email: " . $_POST["email"] . "<br>";
    $msg .= "Idade: " . $_POST["idade"] . "<p>";
    $msg .= "Mensagem:<br>" . $_POST["mensagem"];

    // email onde tu vai receber a mensagem
    $destinatario = "rafaelconcept@hotmail.com";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: C:/xampp/htdocs/modelos2/federalcar.webflow.io/enviar.html");
}
?>