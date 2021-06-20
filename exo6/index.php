<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo6</title>
    </head>
    <body>
        <?php
       
        if (empty($_POST['firstnameForm']) && empty($_POST['lastnameForm'])) {
            ?>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <select name="civilite">
                    <option value="civiliteMr">Mr</option>
                    <option value="civiliteMme">Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastnameForm" placeholder="Votre nom" required>
                <label>Prénom</label>
                <input type="text" name="firstnameForm" placeholder="Votre prénom" required>
                <input type="file" name="myFile">
                <input type="submit" name="valider" value="Valider">
            </form>
            <?php
        } else {
            if (isset($_POST['firstnameForm']) && isset($_POST['lastnameForm']) && isset($_FILES['myFile'])) {
                //on récupère le chemin du fichier à uploader
                $infosfichier = pathinfo($_FILES['myFile']['name']);
                //on stocke l'extension du fichier selectionné
                $extension_upload = $infosfichier['extension'];
                //on stocke la chaîne "pdf" dans un tableau
                $extensions_autorisees = array('pdf');
                //on recherche si l'extension du fichier existe dans le tableau
                if (in_array($extension_upload, $extensions_autorisees)) {
                    echo 'Bonjour ' . $_POST['firstnameForm'] . ' ' . $_POST['lastnameForm'] . ', le nom de votre fichier est ' . $_FILES['myFile']['name'] . ' !';
                } else {
                    echo 'votre fichier n\'est pas au format pdf';
                }
            }
        }
        ?>
        </body>
        </html>