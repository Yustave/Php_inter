<?php
require_once "vendor/autoload.php";

use app\posts\Post;
use app\author\Author;

class index{
    public function __construct(){
        $Fname = "Yuatave";
        $Lname = "La Van";
        $content = "A hint of white may be elegent but absloute White is a statment";

        $author = new Author($Fname,$Lname);

        $post = new Post($author,$content);
        $this->answerOut($post);
    }

    public function answerOut(Post $post){
        $author = $post->getauthor();
        echo $author->get_firstname();
        echo $author->get_lastname();
        echo "<br>";
        echo $post->getcontent();

    }
}
new index;
?>