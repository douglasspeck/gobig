<?php

    // Sets the receptor of the message
    $to = "contato@projetogobig.com.br";

    // Imports the function email()
    include 'createEmail.php';

    // Utilizes the function email(), that creates a message with the form information
    $mensagem = email($_POST['subject'], $_POST['firstName'], $_POST['lastName'], $_POST['mensagem']);

    // Information for the email
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Projeto Go Big<nao-responda@projetogobig.com.br>\n";

    // E-mail that will send the processed message
    $headers .= "X-Sender:  <nao-responda@projetogobig.com.br>\n";

    // E-mail of the server
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <contato@projetogobig.com.br>\n";    // If the message is answered,
    $headers .= "MIME-Version: 1.0\n";                              // it goes to this e-mail

    // Native function that sends the e-mail
    mail($destinatario, $_POST['subject'], $mensagem, $headers);

    // Returns to the last page
    header("Location: http://projetogobig.com.br/contato");
    exit();
    
?>