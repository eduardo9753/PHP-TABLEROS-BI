<?php

//PHP MEILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';


class Correo
{
    private $HOST;
    private $PORT;
    private $USERNAME;
    private $PASSWORD;
    private $DEBUG;
    private $AUTH;

    private $configuracion = [
        'host'     => 'mail.sanpablo.com.pe',
        'port'     => '587',
        'username' => 'aenunez@sanpablo.com.pe',
        'password' => '1n*0Fu6AeF!',
        'debug'    => '0',
        'auth'     => true,
    ];

    //constructor
    public function __construct()
    {
        $this->HOST     = $this->configuracion['host'];
        $this->PORT     = $this->configuracion['port'];
        $this->USERNAME = $this->configuracion['username'];
        $this->PASSWORD = $this->configuracion['password'];
        $this->DEBUG    = $this->configuracion['debug'];
        $this->AUTH     = $this->configuracion['auth'];
    }


    //CORREO DE ACCESO A CREACION DE USUARIOS
    public function MandarSugerencias(UsuarioCorreo $correo)
    {
        //PHP MEILER
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug  = $this->DEBUG;                      //mensajes cliente-servidor
            $mail->isSMTP();                                       //Send using SMTP
            $mail->Host       = $this->HOST;
            $mail->SMTPAuth   = $this->AUTH;                       //Enable SMTP authentication
            $mail->Username   = $this->USERNAME;                   //SMTP username
            $mail->Password   = $this->PASSWORD;                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->PORT;                       //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients 
            $mail->setFrom('aenunez@sanpablo.com.pe', " Area " . $correo->getcbo_area() . "");

            //Personas a las que se le enviara los correos
            $mail->addAddress('aenunez@sanpablo.com.pe');    //Add a recipient
            $mail->addAddress('dmori@sanpablo.com.pe');               //Name is optional
            $mail->addReplyTo('aenunez@sanpablo.com.pe', 'Information');
            $mail->addCC('aenunez@sanpablo.com.pe');
            $mail->addBCC('aenunez@sanpablo.com.pe');


            /*Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

            //Content
            $mail->isHTML(true);                                   //Set email format to HTML
            $mail->Subject = "CREACION DE CORREOS Y PUERTOS USB";
            $mail->Body    = utf8_decode("<div class='card'>
            <div>
               <h1> CREACIÓN DE CORREO </h1>
               <p>Nombre : " . $correo->getnombres() . "</p>
               <p>Area   : " . $correo->getcbo_area() . "</p>
               <p>ESTADO : " . $correo->getestado() . "</p>
            </div>
            <table class='default'>

            <table border='1'>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>AREA</th>
                    <th>JEFE</th>
                    <th>SEDE</th>
                    <th>PUESTO</th>
                    <th>SUSTENTACION</th>
                </tr>
            </thead>
            <tbody>
                    <tr class=''>
                        <td>" . $correo->getnombres() . "</td>
                        <td>" . $correo->getdni() . "</td>
                        <td>" . $correo->getcbo_area() . "</td>
                        <td>" . $correo->getjefe() . "</td>
                        <td>" . $correo->getcbo_sede() . "</td>
                        <td>" . $correo->getpuesto() . "</td>
                        <td>" . $correo->getsustentar() . "</td>
                    </tr>
            </tbody>
        </table>");
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }






    //CORREO DE ACCESO A PAGINAS WEB 
    public function MandarQuejas(UsuarioPaginasWeb $paginas)
    {
        //PHP MEILER
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug  = $this->DEBUG;                      //mensajes cliente-servidor
            $mail->isSMTP();                                       //Send using SMTP
            $mail->Host       = $this->HOST;
            $mail->SMTPAuth   = $this->AUTH;                       //Enable SMTP authentication
            $mail->Username   = $this->USERNAME;                   //SMTP username
            $mail->Password   = $this->PASSWORD;                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->PORT;                       //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients 
            $mail->setFrom('aenunez@sanpablo.com.pe', " Area " . $paginas->getcbo_area() . "");

            //Personas a las que se le enviara los correos
            $mail->addAddress('aenunez@sanpablo.com.pe');    //Add a recipient
            $mail->addAddress('dmori@sanpablo.com.pe');               //Name is optional
            $mail->addReplyTo('aenunez@sanpablo.com.pe', 'Information');
            $mail->addCC('aenunez@sanpablo.com.pe');
            $mail->addBCC('aenunez@sanpablo.com.pe');


            /*Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

            //Content
            $mail->isHTML(true);                                   //Set email format to HTML
            $mail->Subject = "SOLICITUD DE ACCESOS: PAGINAS WEB – PUERTOS USB";
            $mail->Body    = utf8_decode("<div class='card'>
            <div>
            <h1> SOLICITUD DE ACCESO </h1>
            <p>Nombre : " . $paginas->getnombres() . "</p>
            <p>Area   : " . $paginas->getcbo_area() . "</p>
            <p>ESTADO : " . $paginas->getestado() . "</p>
            </div>
            <table class='default'>

            <table border='1'>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CARGO</th>
                    <th>AREA</th>
                    <th>USUARIO RED</th>
                    <th># IP</th>
                    <th>SUSTENTACION</th>
                </tr>
            </thead>
            <tbody>
                    <tr class=''>
                        <td>" . $paginas->getnombres() . "</td>
                        <td>" . $paginas->getcargo() . "</td>
                        <td>" . $paginas->getcbo_area()  . "</td>
                        <td>" . $paginas->getusuario_red() . "</td>
                        <td>" . $paginas->getnumero_ip() . "</td>
                        <td>" . $paginas->getsustentar() . "</td>
                    </tr>
            </tbody>
        </table>");
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
