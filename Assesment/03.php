<?php
class Author {
    public $name;
    public $nationality;

    public function __construct($name, $nationality) {
        $this->name = $name;
        $this->nationality = $nationality;
    }
}

class Book {
    public $title;
    public $isbn;
    public $author;  

    public function __construct($title, $isbn, Author $author) {
        $this->title = $title;
        $this->isbn = $isbn;
        $this->author = $author;
    }
}

class Member {
    public $name;
    public $borrowedBooks = []; 

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook(Book $b) {
        $this->borrowedBooks[] = $b;
        echo "Borrowed Book is : $b->title \n";
    }

    public function returnBook(Book $b) {
        foreach ($this->borrowedBooks as $key => $book) {
            if ($book === $b) {
                unset($this->borrowedBooks[$key]);
                echo "Returned Book is : $b->title \n";
                return;
            }
        }
    }
}


$author = new Author("Rebecca Yarros", "Austrailian");
$book = new Book("Iron Flame", "WAB001", $author);
$member = new Member("Shikha");
$member->borrowBook($book);
?>
