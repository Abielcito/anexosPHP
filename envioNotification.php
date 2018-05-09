<?php

date_default_timezone_set('America/Santiago');
header("Content-Type: text/html;charset=utf-8");

$db_conn = mysqli_connect("host", "user", "contrase�a", "nombreBD") or die("No se ha podido conectar al servidor de Base de datos");

function enviar_mail() {
    $html = '<!DOCTYPE html>
    <html>
    <head>
    <title>da</title>
    <meta name="description" content="Position App">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>

    GG MAN

    </body>
    </html>';

    include_once("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = false;
    $mail->Host = "";
    $mail->Port = 25;
    $mail->Username = "";
    $mail->Password = "";
    $mail->AddReplyTo("correo", "titulo");
    $mail->From = "";
    $mail->FromName = "Route";
    $mail->Subject = "Asunto - ". date('d-m-Y H:i');
    $mail->MsgHTML($html);

    $mail->AddAddress("correo");
    $mail->AddBCC("correo");

    $mail->IsHTML(true); // send as HTML    

    if (!$mail->Send()) {
        echo 'No se envio el correo \n\r';
    } else {
        echo'Se envio el correo  \n\r';
    }
}

function stripAccents($string) {
    return utf8_encode(strtr($string, utf8_decode('àáâãäçèéêëìíîïóòôõöùúûüýÿÀ�?ÂÃÄÇÈÉÊËÌ�?Î�?ÒÓÔÕÖÙÚÛÜ�?'), 'aaaaaceeeeiiiiooooouuuuyyAAAAACEEEEIIIIOOOOOUUUUY'));
}

enviar_mail();

?>