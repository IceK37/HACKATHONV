<?php
session_start();
include "header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'acces-bd'; 
}

function afficherContenu($page) {
    switch ($page) {
        case 'acces-bd':
            echo '<h2>Accès Base de données</h2>';
            break;
        case 'info-serveur':
            echo '<h2>Information serveur</h2>';
            break;
        case 'info-vpn':
            echo '<h2>Information VPN</h2>';
            break;
        case 'configuration':
            echo '<h2>Configuration</h2>';
            break;
        case 'patch':
            echo '<h2>Patch</h2>';
            break;
        default:
            echo '<h2>Page non trouvée</h2>';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole Dev</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-home-dev">
    <div class="admin-menu">
            <ul>
                <li><a href="?page=acces-bd">Accès Base de données</a></li>
                <li><a href="?page=info-serveur">Information serveur</a></li>
                <li><a href="?page=info-vpn">Information VPN</a></li>
                <li><a href="?page=configuration">Configuration</a></li>
                <li><a href="?page=patch">Patch</a></li>
            </ul>
        </div>
        <div class="admin-content">
        <?php
            afficherContenu($page);
            ?>
        </div>
    </div>  
    </div>
    <footer>
        <p>&copy; 2023 YPN. Tous droits réservés.</p>
    </footer>
</body>
</html>
