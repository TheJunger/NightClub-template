<?php
    if(isset($_POST["enviar"])){
        if(!empty($_POST["name"]) && !empty($_POST["asunto"]) && !empty($_POST["email"]) && !empty($_POST["mensaje"])){
            $name = $_POST["name"];
            $asunto = $_POST["asunto"];
            $email = $_POST["email"];
            $mensaje = $_POST["mensaje"];
            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: noreply@example.com" . "\r\n";
            $header.= "X-mailer: PHP/" .phpversion();
            $mail = @mail($email,$asunto,$mensaje,$header);
            if($mail){
                echo "<h4> Mail enviado Correctamente</h4>";
            }
        }
    }
?>