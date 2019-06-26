<?php
$dbHost = 'localhost';
$dbName = 'forum';
$dbUser = 'root';
$dbPassword = 'root';
$db_connection = null;
$db_query = null;
//Functies
function dbConnect()
{
    global $dbHost, $dbName, $dbUser, $dbPassword, $db_connection;
    try {
        $db_connection =
            new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    } catch(PDOException $e) {
        return false;
    }
    return true;
}

function dbQuery($sql, $array = [])
{
    global $db_connection, $db_query;

    $db_query = $db_connection->prepare($sql);
    $db_query->execute($array);
}

function dbGet()
{
    global $db_query;
    return $db_query->fetch(PDO::FETCH_ASSOC);
}

function dbGetall()
{
    global $db_query;
    return $db_query->fetchAll(PDO::FETCH_ASSOC);
}

function dbCount()
{
    global $db_query;
    return $db_query->rowCount();
}