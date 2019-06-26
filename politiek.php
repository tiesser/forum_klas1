<?php
include_once('bovenstukhtml.php');
$db_user = 'root';
$db_pass = '';
$db_name = 'forum';
try {
    $db  = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    if(isset($_POST['create']));
}catch(PDOException $e) {
    echo 'error'.$e->getMessage();
}
$query = $db->prepare('SELECT * FROM thread3');
$query->execute();

$rows = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="display-4">Discussies over de lokale politiek</div>
    <div class="card">
        <div class="card">
            <?php
            foreach ($rows as $row) {
                $thread_id = $row['ID'];
                $subject = $row['subject'];
                $content = $row['content'];
                echo "<div class='card'><a href='thread3.php?thread=$thread_id'>" . $row['subject'] ."</a>" . "<br><p>Gestart door:</p></div>";
            }
            ?>
            <button class="btn btn-light"><a href="newthread3.php">nieuw</a></button>
        </div>
    </div>

</div>
</body>