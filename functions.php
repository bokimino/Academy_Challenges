<?php 

function validateInput($input)
{
  return htmlspecialchars(trim($input));
}

function validateUsername($username)
{
  return !preg_match('/[\s\W]/', $username);
}

function validateEmail($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL) && substr_count($email, '@') === 1 && strlen(explode('@', $email)[0]) >= 5;
}

function validatePassword($password)
{
  return preg_match('/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[A-Z]).{8,}$/', $password);
}

function isUsernameTaken($username)
{
  $users = file('users.txt', FILE_IGNORE_NEW_LINES);
  foreach ($users as $user) {
    $existingUsername = trim(explode(',', $user)[1]);
    if (strpos($existingUsername, $username . '=') !== false) {
      return true;
    }
  }
  return false;
}

function isEmailTaken($email)
{
  $users = file('users.txt', FILE_IGNORE_NEW_LINES);
  foreach ($users as $user) {
    $existingEmail = trim(explode(',', $user)[0]);
    if ($existingEmail === $email) {
      return true;
    }
  }
  return false;
}


?>