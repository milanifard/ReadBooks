<?php


class Book
{
    public $ISBN;
    public $title;
    public $image;
    public $numberOfPage;
    public $descriptions;
    public $publisher;
    public $author;
    public $files;
    public $dates;


    public function __construct($ISBN=-1, $title="", $publisher="", $author="", $files) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->files = $files;
    }

    public function loadFromDB($ISBN) {
        $mysql = pdodb::getInstance();
        $query = "SELECT * FROM sadaf.books WHERE ISBN=?";
        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement($ISBN);
        if ($rec = $res->fetch()) {
            $this->ISBN = $rec["ISBN"];
            $this->title = $rec["title"];
            $this->descriptions = $rec["descriptions"];
            $this->numberOfPage = $rec["numberOfPages"];
            $this->publisher = $rec["publisher"];
            $this->files = $rec["files"];
            $this->dates = $rec["dates"];
            $this->image = $rec["image"];
            $this->author = $rec["author"];
        } else {
            $this->ISBN = -1;
        }
    }

    public function getAverageRating($ISBN) {
        $mysql = pdodb::getInstance();
        $query = "select avg(Rating.rating) 
                    as rating
                    from Rating, Books
                    where Rating.ISBN = ?
                    group by Rating.ISBN;";
        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement($ISBN);
        if ($rec = $res->fetch()) {
            return $rec["rating"];
        }
    }

    public function findByTitle($title) {
        $mysql = pdodb::getInstance();
        $query = "SELECT * FROM Books WHERE title=?";
        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement($title);
        if ($rec = $res->fetch()) {
            return $rec;
        }
    }

    public function findByAuthor($author) {
        $mysql = pdodb::getInstance();
        $query = "SELECT * FROM Books WHERE author=?";
        $mysql->Prepare($query);
        $res = $mysql->ExecuteStatement($author);
        if ($rec = $res->fetch()) {
            return $rec;
        }
    }

}