<?php

    function email($name, $email, $message) {

        // Creates a new variable with the given date and time in this timezone
        $date = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));

        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html lang="pt-BR" xmlns=“https://www.w3.org/1999/xhtml”>
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Nova mensagem de ' . $name . '</title>
        
                <style type="text/css">
                    h1, p {
                        width: 90%;
                        margin: auto;
                    }
                    p {
                        margin-top: 1em;
                        text-align: justify;
                    }
                </style>
        
            </head>
        
            <body style="margin: 0; padding: 0">
        
                <style type="text/css">
                    h1, p {
                        width: 90%;
                        margin: auto;
                    }
                    p {
                        margin-top: 1em;
                        text-align: justify;
                    }
                </style>
        
                <table align="center" cellpadding="0 10px" cellspacing="0" width="600" style="border: 30px solid #4364FF; border-collapse: collapse;">
                    <tr>
                        <td style="padding-top: 20px;">
                            <img src="http://projetogobig.com.br/IMG/Logo/logo.png" width="20%" height="auto" style="display: block; margin: auto;" alt="Isotipo do Projeto Go Big. Trata-se do nome do projeto (Go Big) com um Smiley Face estilizado no lugar da letra O."/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1 style="text-align: center;">Mensagem de <span style="color: #9900ff;">' . $name . '</span> para você!</h1>
                            <p>
                                Esta é uma mensagem automática de nosso <a href="https://fccsi.salesianoitajai.g12.br" style="color: #4364FF; font-weight: bold;">website</a>. Ela foi enviada às ' . $date->format("H:i") .' do dia ' . $date->format("d/m/Y") . '. O processo de automação foi realizado por <a href="mailto:speck.empresarial@gmail.com" style="color: #4364FF; font-weight: bold;">Douglas Speck</a>.
                            </p>
                            <p>
                                <strong>Remetente:</strong> ' . $name .
                            '</p>
                            <p>
                                <strong>Mensagem:</strong> ' . $message .
                            '</p>
                            <p>
                                <strong>Email de Contato:</strong> ' . $email .
                            '</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <footer style="background-color: #9900ff; color: #fff; padding: 20px 0; margin-top: 20px">
                                <p style="text-align: center; margin: 0 auto; font-weight: bold">Projeto Go Big</p>
                            </footer>
                        </td>
                    </tr>
                </table>
        
            </body>
        </html>';

    }

?>