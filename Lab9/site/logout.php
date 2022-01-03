<?php
require_once 'config/connectDB.php';
unset($_SESSION['ID']); //удалятся переменная сессии    
setcookie("login", " "); //удаляются cookie с логином    
setcookie("password", " "); //удаляются cookie с паролем     
header('Location: cinema.php'); //перенаправление на главную страницу сайта }
?>