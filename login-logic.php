<?php
session_start();
require './admin/middlewares/data.php';

if (isset($_POST['submit'])) {
    //get form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$email) {
        $_SESSION['signin'] = "Adresse-mail requis";
    } elseif (!$password) {
        $_SESSION['signin']  = "Mot de passe requis";
    } else {
        // fetch user from database

        $fetch_user_query = "SELECT * FROM users WHERE email='$email'";
        $fetch_user_result = mysqli_query($connexion, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            //convert the record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            // compare form password with database password
            if (password_verify($password, $db_password)) {
                // set  session for access control
                $_SESSION['user-id'] = $user_record['id'];
                // set session if user is an admin
                if ($user_record['statut'] == 'admin') {
                    $_SESSION['admin_nom'] = $user_record['nom'];
                    header('location:admin_page.php');
                } elseif ($user_record['statut'] == 'Adherent' || $user_record['statut'] == 'Visiteurs' ||  $user_record['statut'] == 'Partenaires'  ||  $user_record['statut'] == "Taxe d'apprentissage" || $user_record['statut'] == "Apprenants") {

                    $_SESSION['user_nom'] = $row['nom'];
                    header('location:index.php');
                }

                // log user in
                header('location: ' . ROOT_URL . './admin/accueil.php');
            } else {
                $_SESSION['signin'] = "Veuillez vérifier votre saisie";
            }
        } else {
            $_SESSION['signin'] = "L'utilisateur n'a pas été trouvé";
        }
    }

    //if any problem, redirect back to signin page with login data
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'login.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'login.php');
    die();
}
