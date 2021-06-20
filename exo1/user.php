<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          
     if(!empty($_GET['lastnameForm']) && !empty($_GET['firstnameForm'])){
         echo htmlspecialchars($_GET['lastnameForm']).' '.strip_tags($_GET['firstnameForm']);
     }else{
        echo 'Veuillez vérifier votre saisie !';
        }
    ?>
</body>
</html>