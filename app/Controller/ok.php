<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 20/04/2016
 * Time: 17:28
 */


function test($pseudo, $mdp) {
    if($pseudo == 'okok' && $mdp == 'ok') {
        return 'yes !';
    } else {
        return 10;
    }
}


$variable = test('okok', 'test');

echo $variable;