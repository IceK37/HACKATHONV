<?php
session_start();
include "header.php";

if (!isset($_SESSION['username'])) {
    header('Location: ../php_template/loginHtml.php');
    exit();
}

if (isset($_SESSION['role'])) {
    $userRole = $_SESSION['role'];

    $allowedRoles = ['communication', 'developpement'];

    if (!in_array($userRole, $allowedRoles)) {
        header('Location: ../php_template/index.php'); 
        exit();
    }
} else {
    header('Location: ../php_template/index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole Communication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-home-communication">

    </div>
    <footer>
        <p>&copy; 2023 YPN. Tous droits réservés.</p>
    </footer>
</body>
</html>
