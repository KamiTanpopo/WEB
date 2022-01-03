<?php
// Скрипт проверки

// Соединямся с БД
//$link=mysqli_connect("localhost", "mysql_user", "mysql_password", "testtable");

require_once 'config/connectDB.php';
if (isset($_COOKIE['ID']))
{
    $query = mysqli_query($connect, "SELECT*FROM user WHERE ID = '".intval($_COOKIE['ID'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['ID'] !== $_COOKIE['ID']))
    {
        setcookie("ID", "", time() - 3600*24*30*12, "/");
        print "Хм, что-то не получилось";
    }
    else
    {
        print "Привет, ".$userdata['login'].". Всё работает!";
    }
}
else
{
    print "Включите куки";
}
?>
<!DOCTYPE html>
<html lang ="en">
<head>
   <meta chatset = "UTF-8">
   <link rel="stylesheet" type="text/css" href="Form.css">	
   <title> Authorization </title>
</head>
<body>

    <p>       
    </p>
    <form action= "check2.php" name="myForm" method="POST" class='formWithValidation' >
        <p>
          <label>Ім'я </label>
          <input readonly type="text" name="first_name" value = " <?php echo $userdata['Name'] ?> "  class='first_name field'  />  <span id='first_name'></span>
        </p>
        <p>
          <label> Логін *</label>
          <input readonly type="text" name="nickname"  value =  " <?php echo $userdata['login'] ?> "  class='nickname field'/>  <span id='nickname'></span>
        </p>
        <!-- <p>
          <label for="date">Рік народження
          </label>
          <input type="date"  name="date" class = 'date'/> <span id='date'></span>
        </p> -->
        <p>
          <label>Email *  </label>
          <input readonly type="email" name="email" value =  " <?php echo $userdata['email'] ?> "   class = 'email field'/> <span id='email'> </span>
        </p>
        <p>
          <label>Телефон </label>
          <input readonly type="text" name="phone"  value =" <?php echo $userdata['PhoneNumber'] ?> "  class = 'phone field'/> <span id ='phone'> </span> 
        </p>
        <p>
          <label>Пароль * </label>
          <input readonly  type="password" name="password" value = " <?php echo $userdata['password'] ?> "  class='password field'/> <span id="password"></span>
        </p>
        <input type="submit" name = "signup" value="Зареєструватись"  class='validateBtn'/>
        
        </form>
</body>
</html>