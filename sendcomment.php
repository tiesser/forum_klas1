<?php
include_once('bovenstukhtml.php');
//db connectie
$db_user = 'root';
$db_pass = '';
$db_name = 'forum';
try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    if(isset($_POST['create']));
}catch(PDOException $e) {
    echo 'error'.$e->getMessage();
}
//if(isset($_POST['submit'])) {
try{

    $text = $_POST['text'];
    $thread = $_GET['thread'];
    $sql = $db->prepare('INSERT INTO comment(thread_ID, text) VALUES(:thread_ID, :text)');
    $sql->execute([
        ':text' => $text,
        ':thread_ID' => $thread

    ]);
    header("Location: home.php");
} catch(PDOException $e){
    echo 'error';
}

//}


?>
