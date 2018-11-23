<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <div>
                <select name="civility">
                    <option value="">Civilité</option>
                    <option value="Mr">Monsieur</option>
                    <option value="Mme">Madame</option>
                </select>
            </div>
            <div><label for="lastName">Prénom</label><input type="text" name="lastName" /></div>
            <div><label for="firstName">Nom</label><input type="text" name="firstName" /> </div>
            <div><label for="valider">Valider</label><input type="submit" value="valider" /> </div>

        </form>
        <?= $_POST['civility'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName']; ?> 
    </body>
</html>
