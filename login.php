<?php
session_start();
include_once('bovenstukhtml.php');
if(isset($_SESSION['user_id'])){
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="nl">
<meta charset="UTF-8">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <title>Title</title>
</head>
<body>
<div class="display-4 text-center">Inloggen</div>
<div class="container w-25">
    <div class="card-body text-center">
        <form method="POST" action="app/authentication/loginconfig.php">
            <?php
            if(isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['error_incorrect'])) {
                echo $_SESSION['error_incorrect'];
                unset($_SESSION['error_incorrect']);
            }
            ?>
            <div class="form-group">
                <label>E-mailadres</label>
                <input type="email" name="email" class="form-control" id="mail" placeholder="E-mailadres, Voorbeeld: iemand@zalwel.nl">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control" id="ww" placeholder="Wachtwoord">
            </div>
            <div class="form-check">
                <input type="checkbox" id="onthoud">
                <label class="form-check-label">Blijf ingelogt</label>
            </div>
            <button type="submit" class="btn btn-light m-2">Inloggen</button>
        </form>
    </div>
</body>
</html>