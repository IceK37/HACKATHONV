<html>

<head>
    <title>login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <?php 
    include "header.php" ?>
    <section class="login-register-container">

        <form action="../login.php" method="POST" id="login-form" class="login-register-form">
            <h1>Login</h1>
            <input class="login-register-input" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <input class="login-register-input" type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input class="login-register-input" type="submit" id='submit' value='LOGIN' class="login-button">
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur']; // Get the error code
                if ($err == 1 || $err == 2) { // If the error code is 1 or 2, display the error message
                    echo "<p style='color:white'>User or password are incorecte </p>";
                }
            }
            ?>
        </form>
    </section>
    <footer>
        <p>&copy; 2023 YPN. Tous droits réservés.</p>
    </footer>
</body>

</html>