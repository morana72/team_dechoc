<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 26/04/2016
 * Time: 10:28
 */
if(isset($_POST['envoi'])){
    $to      = 'leratounetdu77@hotmail.fr';
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = 'From:'.$_POST['email'] . "\r\n" .
        'Reply-To:'. $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}