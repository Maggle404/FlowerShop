<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>popup de connexion</title>
</head>
<body>

    <div id="loginPopup" class="popup">
      <div class="popup-content">
       <span class="close" id="closePopup">&times;</span>
       <h2>Connexion</h2>
       <form id="loginForm">
        <label for="username">Nom Utilisateur:</label>
        <input type="text" id="username" name="username" required>

       <label for="password">Mot de passe:</label>
       <input type="password" id="password" name="password" required>

        <button type="button" id="loginButton">Login</button>
      </form>
      <p>Vous n'avez pas de compte? <a href="register.php">Créer-en un ici!</a></p>
     </div>

  <!-- bon maintenant il faut implémenter la session -->
</div>
<script defer src="login.js"></script>
</body>
</html>