<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vnome = $_POST["nome"];
    $vemail = $_POST["email"];
    $vtelefone = $_POST["telefone"];
    $vmensagem = $_POST["mensagem"];

    // Defina o destinatário do e-mail
    $destinatario = "jefferson260114@gmail.com"; 
    $assunto = "Mensagem recebida via portifolio";

    // Corpo do e-mail
    $mensagemEmail = "
        Nome: $vnome $vsobrenome\n
        E-mail: $vemail\n
        Telefone: $vtelefone\n
        Mensagem: $vmensagem
    ";

    // Cabeçalhos do e-mail
    $headers = "From: $vemail\r\n";
    $headers .= "Reply-To: $vemail\r\n";
    
    // Enviar e-mail
    if (mail($destinatario, $assunto, $mensagemEmail, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método inválido.";
}
?>
