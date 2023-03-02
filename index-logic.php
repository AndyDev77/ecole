<?php
session_start();
require './admin/middlewares/data.php';

//get signup from data if sugnup button was clicked

if (isset($_POST['submit'])) {
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $statut = "user";
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // valid input values 
    if (!$nom) {
        $_SESSION['signup'] = "Entrer votre nom !";
    } elseif (!$prenom) {
        $_SESSION['signup'] = "Entrer votre prénom !";
    } elseif (!$username) {
        $_SESSION['signup'] = "Entrer votre numéro de téléphone !";
    } elseif (!$email) {
        $_SESSION['signup'] = "Entrer un email valide !";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Entrer un mot de passe ayant 8 caractères ou plus !";
    } else {
        // check if passwords don't match

        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Le mot de passe ne correspond pas";
        } else {
            //hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            //check if username or email already exist in database
            $user_check_query = "SELECT * FROM users WHERE email='$email'";
            $user_check_result = mysqli_query($connexion, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Le nom d'utilisateur ou l'adresse électronique existent déjà";
            } 
        }
    }

    // redirect back to signup pag eif there was any problem
    if (isset($_SESSION['signup'])) {
        // pass form data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'index.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO users (nom, prenom, phone, email, password, statut) VALUES('$nom','$prenom','$phone','$email', '$hashed_password', '$statut')";
        $insert_suer_result = mysqli_query($connexion, $insert_user_query);

        if (!mysqli_errno($connexion)) {
            // redirect to login page with success message
            $_SESSION['signup-success'] = "Inscription réussie. Veuillez vous connecter !";
            header('location: ' . ROOT_URL . 'login.php');
            die();
        }
    }
} else {
    // if button wasn't clicked, back to signup page
    header('location: ' . ROOT_URL . 'index.php');
    die();
}

?>