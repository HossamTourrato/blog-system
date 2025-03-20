<?php
require_once __DIR__ . '/../controllers/PostController.php';

$postController = new PostController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $postController->store($_POST['title'], $_POST['content']);
    } elseif (isset($_POST['update'])) {
        $postController->update($_POST['id'], $_POST['title'], $_POST['content']);
    } elseif (isset($_POST['delete'])) {
        $postController->destroy($_POST['id']);
    }
}
