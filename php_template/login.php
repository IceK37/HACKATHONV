<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $re = new Login(); // Create a new Login object
  $re->login(); // Call the login function
}else {
  header('Location: ../loginHtml.php');
  exit();
}

Class Login
{
    
      function login()
      {
        $url_de_l_api = "https://ypn666.000webhostapp.com/HACKATHON/function/apiRole.php";

        // Récupérer le contenu JSON de l'API
        $json_data = file_get_contents($url_de_l_api);

        // Vérifier si la requête a réussi
        if ($json_data === false) {
            die("Impossible de récupérer les données de l'API.");
        }

        // Décoder le JSON en un tableau associatif
        $data = json_decode($json_data, true);

        // Vérifier si la décoding a réussi
        if ($data === null) {
            die("Impossible de décoder les données JSON.");
        }
        $username = $this->SecurityCheck( $_POST['username']);
        $password = $this->SecurityCheck( $_POST['password']);

        $authentication_successful = false;

        
        
          if ($username !== "" && $password !== "") {
            foreach ($data as $entry) {
                $username_api = $entry['Name'];
                $password_api = $entry['password'];
                $role = $entry['role'];
                if ($username === $username_api && password_verify($password, $password_api)) {
                    $_SESSION['username'] = $username;// Set the session username variable
                    $_SESSION['role'] = $role;// Set the session role variable
                    $authentication_successful = true;
                }
            }
            if ($authentication_successful) {
              echo "Authentification réussie. Les informations correspondent.";
              header('Location: ../index.php');
                    exit();
          } else {
              echo "Échec de l'authentification. Les informations ne correspondent pas.";
              header('Location:../loginHtml.php?erreur=1'); // Username or password incorrect
          }
          } else {
            header('Location: ../loginHtml.php?erreur=2'); // One or more fields are empty
            exit();
          }
    }
    function SecurityCheck($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

  }