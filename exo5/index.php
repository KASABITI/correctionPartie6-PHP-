<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(empty($_POST['lastName']) || empty($_POST['firstName'])){

    
?>
    <form id="form" action="index.php" method="post" enctype="multipart/form-data">
        <label for="gender">Votre civilité ? </label>
        <select name="gender">
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</otpion>
            <option value="Autre">Autre</option>
        </select>
        <label for="lastName"> Nom : </label>
        <input type="text" name="lastName">
        <label for="firstName"> Prénom : </label>
        <input type="text" name="firstName">
        <label for="file">Votre fichier</label>
        <input type="file" name="file">
        <input type="submit" value="Envoyer le fichier">
    </form>
    <?php 
    }else{
       if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender'])) {
            echo strip_tags('Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ! Le nom du fichier envoyé est :'. ' ' . $_FILES['file']['name']);
        }
    }
    ?>
</body>
</html>

