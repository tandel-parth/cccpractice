<?php
class Post {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function displayInfo() {
        echo "Title: $this->title<br>Content: $this->content";
    }
}

class Blog {
    private $posts = [];
    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function displayAllPosts() {
        foreach ($this->posts as $post) {
            $post->displayInfo();
            echo "<br><br>";
        }
    }
}

// Example Usage:
$post1 = new Post("Introduction to PHP","This is a blog post about PHP.");
$post2 = new Post("Object-Oriented Programming","An overview of OOP principles.");

$blog = new Blog();
$blog->addPost($post1);
$blog->addPost($post2);

$blog->displayAllPosts();

?>