<?php

class User{
    
    private int $id;
    private string $title;
    private string $content;
    private User $author;
    private PostCategory $category;

    public function __construct(string $title, string $content, User $author, PostCategory $category) {
        $this->id = -1;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->author = $category;
    }

    public function getId() : id {
        return $this->name = $id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function setTitle(string $title) : void {
        $this->title = $title;
    }

    public function getContent() : string {
        return $this->content;
    }

    public function setContent(string $content) : void {
        $this->content = $content;
    }

    public function getAuthor() : User {
        return $this->author;
    }

    public function setAuthor(string $author) : void {
        $this->author = $author;
    }
    
    public function getCategory() : PostCategory {
        return $this->category;
    }

    public function setCategory(PostCategory $category) : void {
        $this->category = $category;
    }
}

?>