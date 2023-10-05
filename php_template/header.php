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
                session_start();
                // Vérifiez si l'utilisateur est connecté
                if (isset($_SESSION['username'])) {
                    // Récupérez le rôle de l'utilisateur depuis la variable de session 'role' s'il est connecté
                    if (isset($_SESSION['role'])) {
                        $userRole = $_SESSION['role'];
                        // Affichez le bouton "Pôle Dev" si l'utilisateur a le rôle approprié
                        if ($userRole == 'dev') {
                            echo '<li><a href="../php_template/dev.php">Pôle Dev</a></li>';
                        }
                        // Affichez le bouton "Pôle Communication" si l'utilisateur a le rôle approprié
                        if ($userRole == 'communication') {
                            echo '<li><a href="../php_template/Communication.php">Pôle Communication</a></li>';
                        }
                    }
                }
                ?>
                <li><a href="../php_template/index.php">Accueil</a></li>
                <li><a href="../php_template/propos.php">À propos</a></li>
            </ul>
        </div>
    </nav>
</header>
