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
if(isset($_POST['submit'])) {

    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $user_id = $_POST['user_id'];
    $sql = $db->prepare('INSERT INTO thread1(subject, content, user_id) VALUES(:subject,:content, :user_id)');
    $sql->execute([
        ':subject' => $subject,
        ':content' => $content
    ]);
}

?>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="card-body">
        <form action="newthread1.php" method="post">
            <input name="subject" type="text" placeholder="Onderwerp">
            <input name="content" type="text" placeholder="Inhoud">
            <input name="submit" type="submit">
        </form>
    </div>
</div>
</body>
