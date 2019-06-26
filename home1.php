<?php
session_start();
include_once('bovenstukhtml.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <div class="display-4">Moi! Welkom op het Meij-Forum.</div>
    <div class="card-body">Op deze forum vind je alle discussies en ideeën die gaan over onze geliefde dorp Uithuizermeeden.</div>
        <div class="display-4">Discussies</div>
        <div class="card">
            <div class="card-body">
                <img class="float-lg-right" src="img/pogo.png" height="8%" width="8%">
                <a href="topics/topics.recreatietoerisme.html">Recreatie en toerisme</a>
                <p>1 onderwerp</p>
            </div>
            <div class="card-body">
                <img class="float-lg-right" src="img/mc.png" height="8%" width="8%">
                <a href="topics.html">Horeca</a>
                <p>1 onderwerp</p>
            </div>
            <div class="card-body">
                <img class="float-lg-right" src="img/uzhm.png" height="8%" width="8%">
                <a href="topics.html">Politiek</a>
                <p>1 onderwerp</p>
            </div>
        </div>

</body>
</html>