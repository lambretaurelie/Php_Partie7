<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Créer un formulaire demandant le nom et le prénom. 
Ce formulaire doit rediriger vers la page user.php avec la méthode POST..-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <form action="user.php" method="post">
            <div><label for="lastName">Prénom</label><input type="text" name="lastName" /></div>
            <div><label for="firstName">Nom</label><input type="text" name="firstName" /> </div>
            <div><label for="valider">Valider</label><input type="submit" value="valider" /> </div>
        </form>
    </body>
</html>

