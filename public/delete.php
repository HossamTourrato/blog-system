<?php
require_once '../src/controllers/PostController.php';
use App\Controllers\PostController;

if (isset($_GET['id'])) {
    $postController = new PostController();
    $postController->destroy($_GET['id']);
}

header("Location: index.php");
exit;
?>
