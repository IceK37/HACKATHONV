<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil VPN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="container">
            <h1>YPN Portal</h1>
            <ul>
            <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['username'])) {
                    if (isset($_SESSION['role'])) {
                        $userRole = $_SESSION['role'];
                        if ($userRole == 'dev') {
                            echo '<li><a href="../dev.php">Pôle Dev</a></li>';
                        }
                        if ($userRole == 'communication') {
                            echo '<li><a href="../Communication.php">Pôle Communication</a></li>';
                        }
                    }
                }
                ?>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../loginHtml.php">Login</a></li>
                <li><a href="../propos.php">À propos</a></li>
            </ul>
        </div>
    </nav>
</header>
