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
                if (isset($_SESSION['username'])) {
                    if (isset($_SESSION['role'])) {
                        $userRole = $_SESSION['role'];
                        if ($userRole == 'developpement') {
                            echo '<li><a href="../dev.php">Pôle Dev</a></li>';
                            
                        }
                        if ($userRole == 'communication') {
                            echo '<li><a href="../Communication.php">Pôle Communication</a></li>';
                        }
                        echo "<user>
                        <a href=\"..logout.php\">
                        <img src=\"https://cdn-icons-png.flaticon.com/512/992/992680.png\">
                        </a>
                        </user>";
                    }
                }else{
                    echo "
                   <a href=\"../php_template/RegisterHtml.php\">
                   <input type=\"button\" value=\"Sign up\">
                   </a>
                   <a href=\"../php_template/loginHtml.php\">
                   <input type=\"button\" value=\"Login\">
                   </a>";
                   
                }
                ?>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../loginHtml.php">Login</a></li>
                <li><a href="../propos.php">À propos</a></li>
            </ul>
        </div>
    </nav>
</header>
