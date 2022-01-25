<?php

//Formulario registro YoRecicloYTúReciclas

include "conexion.php";

include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/SMTP.php";
include "PHPMailer-master/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",1);



//Variables
$nombre = $_POST['nombre'];

$apellidos = $_POST['apellidos'];

$email = $_POST['email'];

$contraseña = $_POST['contraseña'];

$contraseña2 = $_POST['contraseña2'];

$direccion = $_POST['direccion'];

$direccion2 = $_POST['direccion2'];

$ciudad = $_POST['ciudad'];

$cp = $_POST['cp'];

$insertar = "INSERT INTO usuarios (nombre, apellidos, email, password, direccion, direccion2, ciudad, cp) VALUES ('$nombre', '$apellidos', '$email', '$contraseña', '$direccion', '$direccion2', '$ciudad', '$cp')";

//Comprobar que el usuario que se registra no existe ya en la base de datos
$verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo "<script>
    alert('El usuario ya está registrado');
    window.history.go(-1);
    </script>";
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo "Error al registrarse";
} else {
    echo "Usuario registrado con éxito";
}

mysqli_close($conexion);


// Create the email and send the message

//$to = 'jmsaezteruel@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


$email_subject = '¡Bienvenido a Yo Reciclo y Tú Reciclas!';

$email_body = "Enhorabuena $nombre $apellidos! \n\n Te has registrado correctamente en el servicio de Reciclaje a domicilio YO RECICLO Y TÚ RECICLAS. \n\n Primero queremos agradecerte tu confianza en nosotros y darte otra vez las gracias por ayudar a que el mundo sea un lugar más limpio. Tanto si eres Recogedor como si quieres reciclar pero tus circunstancias te lo impiden, ¡Te necesitamos! \n\n \n\n A continuación te resumimos tus datos enviados: \n\n \n\n";

//Registro
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

$email_body .= "Aquí te indicamos tus datos para inciar sesión: \n\n \n\n Tu nombre de usuario: $email \n\n Tu contraseña: $contraseña \n\n \n\n ¡A reciclar se ha dicho :)!";

$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pepesaezteruel@gmail.com';                     // SMTP username
    $mail->Password   = 'Alegria2018!';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                   // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pepesaezteruel@gmail.com', 'Yo Reciclo y Tú Reciclas');
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
 
header ("Location: gracias.html");


?>