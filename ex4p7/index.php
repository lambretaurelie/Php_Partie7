<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <form action="user.php" method="post">
            <div><label for="lastName">Prénom</label><input type="text" name="lastName" /></div>
            <div><label for="firstName">Nom</label><input type="text" name="firstName" /> </div>
            <div><label for="valider">Valider</label><input type="submit" value="valider" /> </div>
        </form>
    </body>
</html>

