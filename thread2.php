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
$query = $db->prepare('SELECT * FROM thread2 WHERE id = :thread_id');
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
                <?= $rows['content']; ?>
            </div>
        </article>
    </div>
    <div class="display-4 text-center">Reacties</div>
    <div class="card-body">
        <article class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="../../img/fritsfruts.jpg" width="50%" height="65%">
                    <small><a href="../../nee.html"><br></br>fritsfruts</a></small>
                </div>
            </div>
        </article>

    </div>
</body>
</html>