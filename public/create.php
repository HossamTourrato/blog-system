<?php
require_once '../src/controllers/PostController.php';
use App\Controllers\PostController;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    $postController = new PostController();
    $postController->store($title, $content);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>

    <h1>Create a New Post</h1>
    <form method="POST">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="index.php">Back to Blog</a>

</body>
</html>
