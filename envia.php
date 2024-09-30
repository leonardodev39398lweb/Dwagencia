<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);

    $para = "leonardojose.silvae@gmail.com";
    $assunto = "duvidas - agência DW";


    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular;

    $cabeca = "From: leonardojose.silvae@gmail.com"."\n"."Reply.to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($para,$assunto,$corpo,cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>