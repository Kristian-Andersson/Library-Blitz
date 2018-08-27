<?php

session_start();

$_SESSION['bookTitle'] = $_POST['bookTitle'];
$_SESSION['bookAuthor'] = $_POST['bookAuthor'];
$_SESSION['bookRelease'] = $_POST['bookRelease'];


echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>