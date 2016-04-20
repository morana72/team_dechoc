<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 01/04/2016
 * Time: 16:14
 */
namespace Manager; // je recupere le namespace du Manager general qui se trouve dans le dossier W
use W\Manager\UserManager; // j'importe la classe Manager, avec un USE pour avoir le chemin relatif
class ContactManager extends UserManager // je fais un extend en chemin relatif
{

/* public function contact($to, $subject, $message, $headers){
    mail($to, $subject, $message, $headers);
}*/

}