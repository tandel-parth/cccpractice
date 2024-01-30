<?php
class Book {
    public $title;
    public $author;

    public function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;
    }

    public function displayInfo() {
        echo "<b>Title:</b> $this->title / / <b>Author:</b> $this->author";
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayAllBooks() {
        foreach ($this->books as $book) {
            $book->displayInfo();
            echo "<br>";
        }
    }
}

// Example Usage:
$book1 = new Book("The Catcher in the Rye","J.D. Salinger");
$book2 = new Book("To Kill a Mockingbird","Harper Lee");

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

$library->displayAllBooks();

?>