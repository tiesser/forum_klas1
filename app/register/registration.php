<?php

//Controleren gaat het via script?
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    //We keren terug naar index.php want iemand probeert dit script uit te voeren zonder formulier
    echo 'Niet toegestaan';
    die();
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//Connectie db
try {
    $db_connection = new PDO('mysql:host=localhost;db_name=forum_klas1;' ,
    username: 'root',
    passwd: 'root'
);

    //sql query
    $db_query = $db_connection->prepare(
        "SELECT * FROM users WHERE username = :gebruikersnaam AND email = :mailadres"
    );

    $db_query->execute([

        ':gebruikersnaam' => $username,

        ':mailadres' => $email
    ]);

    //controleren user gevonden
    if($db_query->rowCount() > 0) {
        header('location: dev/app/register.php'
        );
        exit(0);
    }
} catch(PDOException $error) {
echo 'ERROR:' . $error->getMessage();
die();
}

//user bestaat nog niet, dus nieuwe user in databsse
try{ $db_query = $db_connection->prepare(
    "INSERT INTO users(username, email, password) VALUES(:gebruikers, :mailadres, :wachtwoord)"
    ':gebruikersnaam' => $username,
    ':wachtwoord' -> $password
);
$password = password_hash($password, PASSWORD_DEFAULT);

} catch(PDOExeception $error) {
    echo 'ERROR:' . $error->getMessage();
}

header('Location: dev/app/login.php')