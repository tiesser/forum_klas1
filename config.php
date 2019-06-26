<?php
/**
 * Created by PhpStorm.
 * User: Ties
 * Date: 28/04/2019
 * Time: 17:07
 */

$db_user = 'root';
$db_pass = '';
$db_name = 'forum';

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
