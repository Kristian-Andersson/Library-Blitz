<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class Library{
  public $title;
  public $author;
  public $releaseYear;


  function __construct($title, $author, $releaseYear) {
    $this->setTitle($title);
    $this->setAuthor($author);
    $this->setreleaseYear($releaseYear);
  }

  public function setTitle($title) {
    $this->title = $title;
  }
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function setreleaseYear($releaseYear) {
    $this->releaseYear = $releaseYear;
  }
  public function getTitle() {
    return $this->title;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function getreleaseYear() {
    return $this->releaseYear;
  }


}


?>
