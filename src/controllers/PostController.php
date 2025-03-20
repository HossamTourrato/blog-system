<?php
namespace App\Controllers;

require_once __DIR__ . '/../services/PostService.php';
use App\Services\PostService;

class PostController {
    private $postService;

    public function __construct() {
        $this->postService = new PostService();
    }

    public function index() {
        return $this->postService->getAllPosts();
    }

    public function show($id) {
        return $this->postService->getPostById($id);
    }

    public function store($title, $content) {
        return $this->postService->createPost($title, $content);
    }

    public function update($id, $title, $content) {
        return $this->postService->updatePost($id, $title, $content);
    }

    public function destroy($id) {
        return $this->postService->deletePost($id);
    }
}
