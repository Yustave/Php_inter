<?php

namespace app\posts;

class Post{
    private $content;
    private $author;

    public function __construct($author,$content){
        $this->author = $author;
        $this->content = $content;
    }

    public function getauthor(){
        return $this->author;
    }

    
    public function getcontent(){
        return $this->content;
    }
}
