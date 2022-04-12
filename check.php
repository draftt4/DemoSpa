<?php
$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

$users = [
    'admin' => ['id' => 'admin', 'password' => '13'],
    'admin' => ['id' => 'barry', 'password' => '123'],
    'admin' => ['id' => 'mike', 'password' => '111'],
];


if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['admin']['password']) {
             
             session_start(); 
        
             
             $_SESSION['auth'] = true; 
             
             
             $_SESSION['id'] = $users['admin']['id']; 
             $_SESSION['login'] = $username; 
     
         }
     }
     
         
     $auth = $_SESSION['auth'] ?? null;
     
     // если авторизованы
     if ($auth) {
     ?>
         <a href="index.php">Home page</a>
     
     <?php }