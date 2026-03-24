<?php
require_once "db.php";
$page = $_GET["page"] ?? "home";
$allowed_pages = ["home", "interests", "skills"];

if (in_array($page, $allowed_pages)) {
    $content = "pages/" . $page . ".php";
} else {
    $content = "pages/not_found.php";
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>IT Profil 6-7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php?page=home">Domů</a>
        <a href="index.php?page=interests">Zájmy</a>
        <a href="index.php?page=skills">Dovednosti</a>
    </nav>

    <main>
        <?php 
            require $content; 
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Můj IT Profil</p>
    </footer>

</body>
</html>
