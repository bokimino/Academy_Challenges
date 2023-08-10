<?php
if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $usersData = file_get_contents('users.txt');
    $users = explode(PHP_EOL, $usersData);
  
   require_once 'functions.php';

   $username = validateInput($_POST['username']);
   $email = validateInput($_POST['email']);
   $password = validateInput($_POST['password']);

   if (!validateUsername($username)) {
    echo '<p style="color:red;">Invalid username. Username cannot contain empty spaces or special signs.</p>';
    exit();
  }
  if (!validateEmail($email)) {
    echo '<p style="color:red;">Invalid email. Email must have at least 5 characters before @.</p>';
    exit();
  }

  if (!validatePassword($password)) {
    echo '<p style="color:red;">Invalid password. Password must have at least one number, one special sign, and one uppercase letter.</p>';
    exit();
  }

  if (isUsernameTaken($username)) {
    echo '<p style="color:red;">Username taken. Please choose a different username.</p>';
    exit();
  }

  if (isEmailTaken($email)) {
    echo '<p style="color:yellow;">A user with this email already exists. Please use a different email.</p>';
    exit();
  }
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $userData = "$email, $username=$hashedPassword\n";
  file_put_contents('users.txt', $userData, FILE_APPEND);

  header('Location: dashboard.php');
    
} else {
    header ("Location: loginForm.php");
   
}

