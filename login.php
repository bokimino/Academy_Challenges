<?php

session_start();
require_once __DIR__ . '/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = validateInput($_POST['username']);
    $password = validateInput($_POST['password']);

    
   
    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($email, $userData) = explode(', ', $user, 2);
        list($existingUsername, $hashedPassword) = explode('=', $userData, 2);

        if ($existingUsername === $username && password_verify($password, $hashedPassword)) {
            
            session_start();
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit();
        }
    }

    echo '<p style="color:red;">Wrong username/password combination.</p>';
}