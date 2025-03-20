<?php
require_once '../src/controllers/PostController.php';
use App\Controllers\PostController;

$postController = new PostController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $postController->update($id, $title, $content);
    header("Location: index.php");
    exit;
}

$id = $_GET['id'] ?? null;
$post = $postController->show($id);
if (!$post) {
    die("Post not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $post->id ?>">

        <label>Title:</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($post->title) ?>" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5" required><?= htmlspecialchars($post->content) ?></textarea><br><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Back to Blog</a>

</body>
</html>
