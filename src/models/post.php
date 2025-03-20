<?php
namespace App\Models;

class Post {
    public $id;
    public $title;
    public $content;
    public $created_at;

    public function __construct($id = null, $title = "", $content = "", $created_at = "")
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at;
    }
}
