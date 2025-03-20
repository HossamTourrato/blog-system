<?php
namespace App\Services;

require_once __DIR__ . '/../repositories/PostRepository.php';
use App\Repositories\PostRepository;

class PostService {
    private $postRepository;

    public function __construct() {
        $this->postRepository = new PostRepository();
    }

    public function getAllPosts() {
        return $this->postRepository->getAllPosts();
    }

    public function getPostById($id) {
        return $this->postRepository->getPostById($id);
    }

    public function createPost($title, $content) {
        return $this->postRepository->createPost($title, $content);
    }

    public function updatePost($id, $title, $content) {
        return $this->postRepository->updatePost($id, $title, $content);
    }

    public function deletePost($id) {
        return $this->postRepository->deletePost($id);
    }
}
