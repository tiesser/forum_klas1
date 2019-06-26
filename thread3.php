<?php
include_once('bovenstukhtml.php');
$db_user = 'root';
$db_pass = '';
$db_name = 'forum';
$thread_id = $_GET['thread'];
try {
    $db  = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    if(isset($_POST['create']));
}catch(PDOException $e) {
    echo 'error'.$e->getMessage();
}
$query = $db->prepare('SELECT * FROM thread3 WHERE id = :thread_id');
$query->execute([
    ':thread_id' => $thread_id
]);

$rows = $query->fetch(PDO::FETCH_ASSOC);


?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="display-4 text-center">Discussie:
    <?php
//    foreach ($rows as $row) {
//        $thread_id = $row['ID'];
//        $subject = $row['subject'];
//        $content = $row['content'];
//        echo $subject;
    echo $rows['subject'];
//    }
    ?>

</div>
<div class="container">
    <div class="card-body">
        <article class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="../../img/tammodeboer68.jpg" width="50%" height="65%">
                    <small><a href="../../nee.html"><br></br>tammodeboer68</a></small>
                </div>
                <div class="col-md-9">
                    <?= $rows['content']; ?>
                 </div>
            </div>
        </article>
    </div>
    <div class="display-4 text-center">Reacties</div>
    <a href="newcomment1.php?thread=<?= $rows['ID'] ?>">Reageer...</a>
    <div class="card-body">
        <article class="card-body">
            <div class="row">
                <?php
                $query_comments = $db->prepare('SELECT * FROM comment WHERE thread_ID = :thread_ID');
                $query_comments->execute([
                    ':thread_ID' => $thread_id
                ]);

                $rows_comments = $query_comments->fetchAll();
                ?>

                <?php foreach($rows_comments as $reaction => $r): ?>
                <div class="col-md-11 mb-2 row border">
                    <img class="col-sm-3" src="img/pfp.png" width="50%">
                    <div class="col-md-9">
                    <?= $r['text'] ?>
                    </div>
                    <p class=" col-md-3 text-center"><?= $r['made'] ?></p>
                </div>
                <div class="col-md-9">
                </div>
                <?php endforeach ?>

            </div>
        </article>

    </div>