<?php
session_start();
//variabelen DB
$dbUser = 'root';
$dbPass = '';
$dbHost = 'localhost';
$dbName = 'forum';

//connectie DB
try {

    $db_connect = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
}
 catch(PDOException $e) {
        echo 'Fout:', $e->getMessage();
}
//Haal de inloggevens uit het formulier
    $email = $_POST['email'];
    $password = $_POST['password'];

//Haal de inloggevens uit de database voor vergelijking
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $db_connect->prepare($query);

    //query uitvoeren
    $stmt->execute([
        ':email' => $email
    ]);
    //fetch het watchwoord
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
$hash = $user['password'];
//Vergelijk het POST wachtwoord met het gehasde wachtwoord uit de database
//Als het gelijk is, header naar de homepage met het bericht dat je gebruiker is ingelogt.
        if(password_verify($password, $hash)){
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['logged_in'] = time();//redirect naar home
            header('Location: ../../home.php');
            $_SESSION['success'] = 'U bent nu ingelogt.';
            $_SESSION['username'] = $user['username'];
            exit(0);
        }
        //Niet gelijk, stuur terug naar login.php met het bericht dat de inloggevens niet kloppen
        else {
            //Komen niet overeen
            $_SESSION['error_incorrect'] = "Wachtwoord en of emailadres van het opgegeven account klopt niet.";
            header('Location: ../../login.php');
            die();
        }