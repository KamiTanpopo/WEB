<?php
// Страница авторизации
require_once 'config/connectDB.php';
// Соединямся с БД
global $conn, $pass, $data;
ini_set ("session.use_trans_sid", true);  
session_start(); 
if(isset($_POST['signup']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
     $query = mysqli_query($connect,"SELECT*FROM user WHERE login='".mysqli_real_escape_string($connect,$_POST['login'])."' LIMIT 1");
     $data = mysqli_fetch_assoc($query);
     $conn = $_POST['signup'];
     $pass = $_POST['password'];
    if($data['password'] == ($_POST['password']))
    {    
      

        $_SESSION['ID'] = $data['ID'];
        $_SESSION['password'] = $data['password'];
         // Ставим куки
        setcookie("ID", $data['ID'], time()+60*60*24*30, "/");
        $UID = $_SESSION['ID']; //присваиваем переменной $UID его id         
        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: cinema.php");
        exit();
    }
    else
    {
      $_SESSION["erorrs"] = "Неправильний логін або пароль. ";
      header("Location: cinema.php");
      exit();
    }
}
?>