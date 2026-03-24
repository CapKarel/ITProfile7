<?php
// Načtení databáze (bude dostupná ve všech podstránkách)
require_once "db.php";

// 1. Získání stránky z URL (výchozí je 'home')
$page = $_GET["page"] ?? "home";

// 2. Definice povolených stránek (ochrana proti neoprávněnému přístupu)
$allowed_pages = ["home", "interests", "skills"];

// 3. Logika routingu
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
    <title>IT Profil 7.0</title>
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
            // Vložení konkrétní podstránky
            require $content; 
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Můj IT Profil</p>
    </footer>

</body>
</html>
