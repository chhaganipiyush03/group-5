<?php
include 'database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Blog Website</title>
</head>
<body>
<header>
    <h1>Welcome to the Blog Website</h1>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>
        <p><a href="add_blog.php">Add Blog</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
    <?php endif; ?>
</header>
<div class="container">
    <h2>Blogs</h2>
    <?php
    $result = $conn->query("SELECT * FROM blogs");
    while ($row = $result->fetch_assoc()) {
        echo "<h3>{$row['title']}</h3>";
        echo "<p>By: {$row['author']}</p>";
        echo "<p>{$row['content']}</p><hr>";
    }
    ?>
</div>
</body>
</html>
