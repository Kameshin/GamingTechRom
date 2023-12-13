<?php
    if (isset($_POST) && $_POST){
        include_once("database.php");
        
        $sql = "SELECT `id`, `email`, `name` FROM `utilisateur` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) == 0){
            echo "Utilisateur not found: Check your credentail";
        }else{
            $Utilisateur = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION["id"] = $Utilisateur['id'];
            $_SESSION["email"] = $Utilisateur['email'];
            $_SESSION["name"] = $Utilisateur['name'];
            
            header('Location: index.php');
            die;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="">
		Adresse E-mail <input type="Text" name="" size="20" placeholder=""><br>
		Mot De Passe <input type="Text" name="" size="20" placeholder=""><br>
        <input type="submit" name="s" value="Se connecter">
        <a href="MotDePasseOublie.php">Mot De Passe Oublié</a>
        <a href="inscription.php">Créer Un Nouveau Compte</a>
        <a href="login.php">
    </form>
</body>
</html>