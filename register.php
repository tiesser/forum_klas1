<?php
/**
 * Created by PhpStorm.
 * User: Ties
 * Date: 28/04/2019
 * Time: 17:07
 */
session_start();

include_once('bovenstukhtml.php');
//Binnen via post request?

$db_user = 'root';
$db_pass = '';
$db_name = 'forum';

try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    if(isset($_POST['create']));
}catch(PDOException $e) {
    echo 'error'.$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
            <?php
            if(isset($_POST['create'])){

            $email = $_POST['email'];
            $username = $_POST['text'];
            $passwd = $_POST['password'];
            $passwdh = password_hash($passwd, PASSWORD_DEFAULT);
            $sql = $db->prepare('INSERT INTO users(email, username, password) VALUES(:email,:username,:password)');
            $sql->execute([
                    ':email' => $email,
                ':username' => $username,
                ':password' => $passwdh,
            ]);
            if($sql){
                echo 'Registratie compleet.';
            }else{
              echo 'Er is een fout opgetreden bij de registratie.';
            }
            };
            ?>
            <div class="display-4 text-center">Geen account? Registreer je hier.</div>
            <div class="container w-25">
            <div class="card-body text-center">
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label>E-mailadres</label>
                        <input name="email" type="email" class="form-control" id="mail" placeholder="E-mailadres, Voorbeeld: iemand@zalwel.nl" required>
                    </div>
                    <div class="form-group">
                        <label>Gebruikersnaam</label>
                        <input name="text" type="text" class="form-control" id="username" placeholder="Gebruikersnaam">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input name="password" type="password" class="form-control" id="ww" placeholder="Wachtwoord" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="onthoud">
                        <label class="form-check-label">Spam mij de nieuwsbrief</label>
                    </div>
                    <input type="submit" name="create" value ="Registreren" class="btn btn-light m-2">
                </form>
            </div>
        </div>
</body>
</html>