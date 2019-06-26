<?php
include_once('bovenstukhtml.php');
$db_user = 'root';
$db_pass = '';
$db_name = 'forum';
try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    if(isset($_POST['create']));
}catch(PDOException $e) {
    echo 'error'.$e->getMessage();
}
$query = $db->prepare('SELECT * FROM thread1');
$query->execute();

$rows = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="display-4">Discussies over Recreatie en toerisme</div>
    <div class="card">
        <?php if(isset($_SESSION['success'])) : ?>
        <a href="newthread1.php"><button href="newthread1.php" class="btn btn-light col-md-12">Start een nieuwe discussie</button></a>
        <?php endif; ?>
        <div class="card">
            <?php
            foreach ($rows as $row) {
                $thread_id = $row['ID'];
                $subject = $row['subject'];
                $content = $row['content'];
                echo "<div class='card'><a href='thread1.php?thread=$thread_id'>" . $row['subject'] ."</a>" . "<br><p>Gestart door:</p></div>";
            }
            ?>
        </div>
    </div>

</div>
</body>