<?php

$verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
 if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
     if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . htmlspeciamlchars($_POST['firstName']). ' ' . htmlspeciamlchars($_POST['lastName']);
     }else{
        echo ' Veuillez vérifier votre saisie !';
     }
}
?>