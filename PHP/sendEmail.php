<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    // Sets the receptor of the message
    $to = "contato@projetogobig.com.br";

    // Imports the function email()
    include 'createEmail.php';

    // Utilizes the function email(), that creates a message with the form information
    $message = email($_POST['name'], $_POST['email'], $_POST['message']);

    // Information for the email
    $headers =  "Content-Type:text/html; charset=UTF-8\r\n";
    $headers .= "From:  Projeto Go Big<nao-responda@projetogobig.com.br>\r\n";

    // E-mail that will send the processed message
    $headers .= "X-Sender:  <nao-responda@projetogobig.com.br>\r\n";

    // E-mail of the server
    $headers .= "X-Mailer: PHP  v".phpversion()."\r\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\r\n";
    $headers .= "Return-Path:  <contato@projetogobig.com.br>\r\n";    // If the message is answered,
    $headers .= "MIME-Version: 1.0\r\n";                              // it goes to this e-mail

    $subject = "Nova mensagem de " . $_POST['name'];

    // Native function that sends the e-mail
    mail($to, $subject, $message, $headers);

    // Returns to the last page
    header("Location: http://projetogobig.com.br/contato");
    exit();
    
?>