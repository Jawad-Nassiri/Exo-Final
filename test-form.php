<?php

session_start();

// Initialise la session des messages si elle n'existe pas
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Vérifie si la requête est POST et si les données ne sont pas vides
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    
    // trim() supprime les espaces, et htmlspecialchars() convertit les caractères spéciaux en entités HTML
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $_SESSION['messages'][] = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];
        echo 'Formulaire soumis avec succès';
        exit();
    } else {
        echo 'Veuillez remplir tous les champs';
        exit();
    }
}

