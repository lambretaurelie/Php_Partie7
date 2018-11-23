<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, 
vérifier que le fichier transmis est bien un fichier pdf.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exercice8</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php
            // il vérifie que chacun des $ post correspondant au champs ne soit pas vide
            // si mes post sont valide alors on initialise et on charge des variables
            if (!empty($_POST['gender']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
                $gender = htmlspecialchars($_POST['gender']);
                $firstName = htmlspecialchars($_POST['firstName']);
                $lastName = htmlspecialchars($_POST['lastName']);
                $fileName = ($_FILES['fileName']['name']); //je récupére le nom de mon fichier
                $extName = ($_FILES['fileName']['type']); //je récupére l'extension de mon fichier
                $extAuth = array('pdf', 'jpeg'); //type d'extension autorisée
                $fileInfo = pathinfo($_FILES['fileName']['name']); //je viens charger mes informations dans un tab
                $fileExt = $fileInfo ['extension'];
                $regexAlpha = "/^([a-zA-Z' ]+)$/";
                // je compare les extensions autorisées et les extensions rentrées par l'utilisateur
                if (in_array($fileExt, $extAuth)) {
                    $checkExt = TRUE;
                } else {
                    $checkExt = FALSE;
                }
                //je compare les caractéres autorisés de ma regex ($regexAlpha)avec les valeur rentrée dans mes champs et je vérifie que l'extension est bien autorisés
                if (preg_match($regexAlpha, $firstName) && preg_match($regexAlpha, $lastName) && $checkExt == TRUE) {
                    ?> 
                    <div>vous êtes un <?= $gender; ?></div>
                    <div>votre prénom est :<?= $firstName; ?></div>
                    <div>votre nom est :<?= $lastName; ?></div>
                    <div>votre fichier est :<?= $fileName; ?> l'extension du fichier est :<?= $extName; ?></div>
                    <div></div>
                    <?php
                }
                // si mes POST n'existe pas j'affiche mon formulaire
                else {
                    header('location:http://bertrand/exercice8p7/');
                    exit();
                }
            } else {
                ?>
                <form method="POST" action="" enctype="multipart/form-data">
                    <select name="gender">
                        <option value="Mr" >Mr</option>
                        <option value="Mme">Mme</option>
                    </select>
                    <p><label for="firstName"> Prénom :</label> <input type="text" name="firstName" /></p>
                    <p><label for="lastName">Nom :</label> <input type="text" name="lastName" /></p>
                    <p><label for="fileName"></label><input type="file" name="fileName" /></p>
                    <p><input type="submit" name="envoyer" /></p>
                </form>
                <?=
                'remplir les champs vides';
            }
            ?>   
        </div>
    </body>
</html>

