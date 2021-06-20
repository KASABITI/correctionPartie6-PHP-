<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
 <?php  
// if(!empty($_POST['lastNameForm']) && !empty($_POST['firstNameForm'])){
//         echo htmlspecialchars($_POST['lastNameForm']).' '.strip_tags($_POST['firstNameForm']);
//     }else{
//         echo 'Veuillez vérifier votre saisie !';
//         }
?>
<?php
if(empty($_POST['lastName']) || empty($_POST['firstName'])){
    ?>
    <form action="user.php" method="post">
    <select name="civilite">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select>
    <label for="lastName">Nom :</label>
    <input type="text" name="lastName" id="lastName">
    <label for="firstName">Prénom :</label>
    <input type="text" name="firstName" id="firstName">
    <input type="submit" value="envoyer">
   </form>
<?php 
$verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
 if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
     if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName'];
     }else{
        echo ' Veuillez vérifier votre saisie !';
     }
}

}
   
?>

</body>
</html>