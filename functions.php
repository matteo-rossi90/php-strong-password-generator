<?php

//creare una funzione per generare una password random
function generatePassword($length) {
    
    //definire i set di caratteri da usare
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!?&%$<>^+-*/()[]{}@#_=?';
    
    //combinare tutti i set di caratteri
    $allChars = $letters . $numbers . $specialChars;
    
    //inizializzare la password vuota
    $password = '';
    
    //generare una password con la lunghezza specificata
    for ($i = 0; $i < $length; $i++) {
        $password .= $allChars[random_int(0, strlen($allChars) - 1)];
    }
    
    return $password;
}