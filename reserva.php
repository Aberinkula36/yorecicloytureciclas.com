<?php

//Formulario registro YoRecicloYTúReciclas

include "conexion.php";

include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/SMTP.php";
include "PHPMailer-master/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",1);



//Variables
$fecha = $_POST['fecha'];

$hora = $_POST['hora'];

$email = $_POST['email'];

$insertar = "INSERT INTO bloques(fecha, hora, email) VALUES ('$fecha', '$hora', '$email')";

$verificar_fecha = mysqli_query ($conexion, "SELECT * FROM bloques WHERE fecha = '$fecha'");
if (mysqli_num_rows($verificar_fecha) > 0){
    $verificar_hora = mysqli_query ($conexion, "SELECT * FROM bloques WHERE hora = '$hora'");
    if (mysqli_num_rows($verificar_hora) > 0){
        echo "<script>
        alert('Este horario ya está ocupado. Por favor, elija otro');
        window.history.go(-1);
        </script>";
        
    }
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo "Error al reservar un horario";
} else {
    echo "Ha reservado su horario con éxito";
}

mysqli_close($conexion);


// Create the email and send the message

//$to = 'jmsaezteruel@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


$email_subject = '¡Has reservado tu horario con éxito!';

$email_body = "Hola $email! \n\n Has reservado una franja horaria para que podamos ayudarte a reciclar. \n\n Nos vemos el día de la recogida en tu domicilio. \n\n \n\n A continuación te resumimos los datos de tu reserva: \n\n \n\n";

//Registro
if(!empty($fecha))
    $email_body .= "Fecha: $fecha \n\n";

if(!empty($hora))
    $email_body .= "Hora: $hora \n\n";

if(!empty($tipo))
    $email_body .= "Tipo de inscripción: $tipo \n\n";

if(!empty($nombre))
    $email_body .= "Nombre: $nombre \n\n";

if(!empty($apellidos))
    $email_body .= "Apellidos: $apellidos \n\n";

if(!empty($email))
    $email_body .= "Email: $email \n\n";

if(!empty($direccion))
    $email_body .= "Dirección: $direccion \n\n";

if(!empty($direccion2))
    $email_body .= "Dirección 2: $direccion2 \n\n";

if(!empty($ciudad))
    $email_body .= "Ciudad: $ciudad \n\n";

if(!empty($cp))
    $email_body .= "Código postal: $cp \n\n \n\n";

$email_body .= "¡Muchas gracias por confiar en nosotros!";

$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                   // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('', 'Yo Reciclo y Tú Reciclas');
    $mail->addAddress($email);     // Add a recipient
    $mail->addAddress('jmsaezteruel@hotmail.com');

    $mail->CharSet = 'UTF-8';

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body = str_replace("\n","<br>",$email_body);

    $mail->send();

} catch (Exception $e) {
    echo "El mensaje no se pudo enviar: {$mail->ErrorInfo}";
}
 
header ("Location: gracias_s.php");


?>