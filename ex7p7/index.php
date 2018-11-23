<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est 
demandé à l'exercice 6, le Name et l'extension du fichier..-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset($_POST['gender']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
            $gender = htmlspecialchars($_POST['gender']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $fileName = ($_FILES['fileName']['name']); //je récupére le nom de mon fichier
            $extName = ($_FILES['fileName']['type']); //je récupére l'extension de mon fichier
            //si mes POST existe alors j'affiche mes données
            ?>
            <div>vous êtes un <?= $gender; ?></div>
            <div>votre prénom est :<?= $firstname; ?></div>
            <div>votre nom est :<?= $lastname; ?></div>
            <div>votre fichier est :<?= $fileName; ?> l'extension du fichier est :<?= $extName; ?></div>

            <?php
        }
        // si mes POST n'existe pas j'affiche mon formulaire
        else {
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <select name="gender">
                    <option value="Mr" >Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <p><label for="firstname"> Prénom :</label> <input type="text" name="firstname" /></p>
                <p><label for="lastname">Nom :</label> <input type="text" name="lastname" /></p>
                <p><label for="fileName"></label><input type="file" name="fileName" /></p>
                <p><input type="submit" name="envoyer" /></p>
            </form>
            <?= 'remplir les champs vides';
        }
        ?>   
    </div>
</body>
</html>

