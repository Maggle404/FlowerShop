
    <?php
    /*
	// Création de la connexion
	$connexion = new mysqli("localhost", "root", "root", "flowershop");
	// Vérification de la connexion
	if (!$connexion->connect_error) {
		printf("Erreur : Connexion impossible : ". $connexion->connect_error);
		exit();
	} 
	printf("Succès : Connexion réussite !")



code pour le hashage

$hash = password_hash($test, PASSWORD_BCRYPT);
$hash2 = password_hash($test, PASSWORD_BCRYPT);


echo $hash;
if($hash == $hash2){
    echo ("same");
}
else{
    echo ("different");
}
*/
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de login lo</title>
    <link rel="stylesheet" href="styles.css"/>
    <script src="login.js"></script>
</head>
<body>
        <form id="register_form"> 
            <input id="nom" type="text" placeholder="Name" value=""/>
            <input id="mdp" type="password" placeholder="Password" value=""/>
            <input id="register_btn" type="submit" value="get Account" onClick="store()"/> 
        </form>

        <form id="login_form"> 
            <input id="usernom" type="text" placeholder="Enter Username" value=""/>
            <input id="usermdp" type="password" placeholder="Enter Password" value=""/>
            <input id="login_btn" type="submit" value="Login" onClick="check()"/> 
       </form>

    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript" language="javascript" src="login.js"></script>

</body>
</html>