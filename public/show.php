<?php
require_once '../src/controllers/PostController.php';
use App\Controllers\PostController;

if (!isset($_GET['id'])) {
    die("Post ID not provided!");
}

$postController = new PostController();
$post = $postController->show($_GET['id']);

if (!$post) {
    die("Post not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post->title) ?></title>
</head>
<body>

    <h1><?= htmlspecialchars($post->title) ?></h1>
    <p><?= nl2br(htmlspecialchars($post->content)) ?></p>
    <p><small>Posted on: <?= $post->created_at ?></small></p>
    <br>
    <a href="index.php">Back to Blog</a>

</body>
</html>
