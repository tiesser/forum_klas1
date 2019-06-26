<?php
session_start();
include_once('bovenstukhtml.php');
?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container w-100">
    <div class="card">
        <div class=card-body>
            <img src="img/pfp.png">
            <div><?= $_SESSION['username']; ?></div>
        </div>
    </div>
</div>
