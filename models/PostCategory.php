<?php

class User{
    
    private int $id;
    private string $name;
    private string $description;
    private Post $posts;

    public function __construct(string $name, string $description) {
        $this->id = -1;
        $this->name = $name;
        $this->description = $description;
        $this->posts = array();
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function setDescription(string $description) : void {
        $this->description = $description;
    }

    public function getPosts() : array {
        return $this->posts;
    }

    public function setPosts(Post $posts) : void {
        $this->posts = $posts;
    }
    
    public function addPost(Post $post) : array {
        $this->posts[] = $post;
        return $this->posts;
    }
    
    public function removePost(Post $post) : array {
        $newPosts = array();
        foreach($this->posts as $key=>$newPost) {
            if($newPost->getId() === $post->getId()) {
                unset($this->posts[$key]);
            }
        }
    }
}

?>