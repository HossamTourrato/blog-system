<?php
require_once '../src/controllers/PostController.php';
require_once __DIR__ . '/../src/models/Post.php';

use App\Controllers\PostController;

$postController = new PostController();
$posts = $postController->index();
$isAdmin = true; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .post { border-bottom: 1px solid #ddd; padding: 10px 0; }
        .admin-options { color: red; }
    </style>
</head>
<body>

    <h1>Blog Posts</h1>
    <a href="create.php">+ Add New Post</a><br><br>

    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2><?= htmlspecialchars($post->title) ?></h2>
            <p><?= nl2br(htmlspecialchars($post->content)) ?></p>
            <a href="show.php?id=<?= $post->id ?>">Read more</a>

            <?php if ($isAdmin): ?>
                <br>
                <a class="admin-options" href="edit.php?id=<?= $post->id ?>">Edit</a> |
                <a class="admin-options" href="delete.php?id=<?= $post->id ?>" onclick="return confirm('Are you sure?')">Delete</a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

</body>
</html>

