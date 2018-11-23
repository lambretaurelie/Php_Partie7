<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
le formulaire ne doit pas être affiché.
Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php
        //je verifie que  mes POST existe .
        if (isset($_POST['gender']) && ($_POST['firstname']) && ($_POST['lastname'])) {
            $gender = htmlspecialchars($_POST['gender']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            //si mes POST existe alors j'affiche mes données
            ?>
            <div>vous êtes un <?= $gender; ?></div>
            <div>votre prénom est :<?= $firstname; ?></div>
            <div>votre nom est :<?= $lastname; ?></div>
        <?php
        }
        // si mes POST n'existe pas j'affiche mon formulaire
        else {
            ?>
            <form method="POST" action="">
                <select name="gender">
                    <option value="Mr" >Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <p><label> Prénom : <input type="text" name="firstname" /></label></p>
                <p><label>Nom : <input type="text" name="lastname" /></label></p>
                <p><label><input type="submit" name="envoyer" /></label></p>
            </form>
            <?=
            'remplir les champs vides';
        }
        ?>   
    </div>
</body>
</html>
