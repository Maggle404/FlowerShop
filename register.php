<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de création de compte</title>
</head>
<body>
<?php
    include "navbar.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //mettre ici le snippet de code pour changer le login de DB on the fly
        $host = "localhost";  
        $username = "root"; 
        $password = ""; 
        $database = "flowershop";

        $mysqli = new mysqli($host, $username, $password, $database);
        if ($mysqli -> connect_errno) {
            echo "ERREUR DE CONNEXION: " . $mysqli -> connect_error;
            exit();
        }
        $username = $_POST["username"];
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];  

        $query = "INSERT INTO users (username, prenom, nom, mail, password) VALUES ('$username', '$prenom', '$nom', '$mail', '$password')";
        
        // faut remettre un query
        if (mysqli_query($mysqli, $query)) {
            echo "Compte utilisateur crée! bienvenue :)";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
    }
    ?>

    <h2>Informations du compte</h2>
    <!-- formulaire de création de compte -->
    <form method="post" action="">

        <label for="username">Pseudonyme:</label>
        <input type="text" name="username" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br><br>

        <label for="nom">NOM:</label>
        <input type="text" name="nom" required><br><br>

        <label for="mail">Email:</label>
        <input type="email" name="mail" required><br><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Créer mon compte!">
    </form>
</body>
</html>