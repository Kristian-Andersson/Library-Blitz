<?php

session_start();


include 'library.php';

//$bokValues = $_POST['bookTitle']
$booktitle = $_POST['bookTitle'];
$bookAuthor = $_POST['bookAuthor'];
$bookRelease = $_POST['bookRelease']; 
$bok = new Library($booktitle, $bookAuthor, $bookRelease);
echo "<br />Title: " . $bok->getTitle();
echo "<br />Author: " . $bok->getAuthor();
echo "<br />ReleaseYear: " . $bok->getreleaseYear();


$_SESSION['library'][] = $bok;

/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bok</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="book.php" method="POST">
        <label for="bookTitle">Title:</label>
        <input type="text" name="bookTitle">
        <br>
        <label for="bookAuthor">Author:</label>
        <input type="text" name="bookAuthor">
        <br>
        <label for="bookRelease">Release date:</label>
        <input type="date" name="bookRelease">
        <br>
        <input type="submit" name="submit" value="Add book">
    </form>
</body>
</html>