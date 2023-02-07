<?php

class User{
    
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $password;
    private Post $posts;

    public function __construct(string $first_name, string $last_name, string $email, string $password) {
        $this->id = -1;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->posts = array();
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getFirst_name() : string {
        return $this->first_name;
    }

    public function setFirst_name(string $first_name) : void {
        $this->first_name = $first_name;
    }

    public function getLast_name() : string {
        return $this->last_name;
    }

    public function setLast_name(string $last_name) : void {
        $this->last_name = $last_name;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function getPassword() : string {
        return $this->password;
    }

    public function setPassword(string $password) : void {
        $this->password = $password;
    }
    
    public function getPosts() : array {
        return $this->posts;
    }

    public function setPosts(int $posts) : void {
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