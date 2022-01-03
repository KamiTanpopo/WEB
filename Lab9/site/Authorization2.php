
<!DOCTYPE html>
<html lang ="en">
<head>
   <meta chatset = "UTF-8">
   <link rel="stylesheet" type="text/css" href="FormAuthorization.css">	
   <title> Authorization </title>
</head>
<body>

    <p>       
    </p>

    <form action= "Authorization2.php" name="myForm" method="POST" class='formWithValidation' >
    <h3> Форма авторизації </h3>
        <p>
          <label>Ім'я </label>
          <input type="text" name="first_name"  class='first_name field'/>  <span id='first_name'></span>
        </p>
        <p>
          <label> Логін *</label>
          <input type="text" name="nickname"  class='nickname field'/>  <span id='nickname'></span>
        </p>
        <p>
          <label>Email *  </label>
          <input type="email" name="email"  class = 'email field'/> <span id='email'> </span>
        </p>
        <p>
          <label>Телефон </label>
          <input type="text" name="phone"  class = 'phone field'/> <span id ='phone'> </span> 
        </p>
        <p>
          <label>Пароль * </label>
          <input type="password" name="password"   class='password field'/> <span id="password"></span>
        </p>
        <p>
          <label>Підтвердіть пароль * </label>
          <input type="password" name="password_confirm"   class='passwordConfirmation field'/> <span  id="password_confirm"></span> 
        </p>
        <input type="submit" name = "signup" value="Зареєструватись"  class='validateBtn'/>
        
      
        <?php
require_once 'config/connectDB.php';

if(isset($_POST['signup']))
{
 $data  = $_POST;
 $first_name = $_POST['first_name'];
 $login = $_POST['nickname'];
 $phone= $_POST['phone'];
 $email= $_POST['email'];
 $pass= $_POST['password'];
 $passConfirm =  $_POST['password_confirm'];
    $errors  = array();
    $text  = array();
    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($connect, "SELECT ID FROM user WHERE login='".mysqli_real_escape_string($connect, $_POST['nickname'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $errors[] = "Користувач з таким логіном уже існує. Виберіть інший нікнейм.";
    }
    if(empty($email) || empty($login) || empty($pass) || empty($passConfirm) )
    {
       $errors[] = "Заповніть всі необхідні поля (*).";
    }
    if($pass != $passConfirm )
    {
      $errors[] = "Паролі не співпадають.";
    }
    
    if(empty($errors))
    {
        mysqli_query($connect, "INSERT INTO `user`(`ID`, `Name`, `email`, `login`, `password`, `PhoneNumber`) 
       VALUES (NULL,'$first_name','$email','$login', $pass, $phone)");
       $text[] = "Ви авторизовані! ";  
       $query = mysqli_query($connect,"SELECT*FROM user WHERE login='".mysqli_real_escape_string($connect,$_POST['nickname'])."' LIMIT 1");
       $data = mysqli_fetch_assoc($query);
    //   $id = $_POST['ID'];
       $_SESSION['ID'] = $data['ID'];
      //  foreach($data AS $row)
      //  {
      //    echo '<div style = "color: red;">'  .array_shift($data). '</div><hr>';     
      //  }     
     // Ставим куки
       setcookie("ID", $data['ID'], time()+60*60*24*30, "/");
       $UID = $_SESSION['ID']; //присваиваем переменной $UID его id  
       echo '<div style = "color: green;">' .array_shift($text). '</div><hr>';       
     // Переадресовываем браузер на страницу проверки нашего скрипта
    ?> <a href="cinema.php" target="_parent"> 
         Можете повернутись до сайту </a> <?php
    // header("Location: cinema.php"); exit();
    }
    else{
        foreach($errors AS $error)
        {
          echo '<div style = "color: red;">' .array_shift($errors). '</div><hr>';     
        }
        $errors  = array();
    }
}
?>
     </form>
   
     <?php if(!empty($data['ID'])){?>
     </br>
      <h3> Відображення переданої інформації </h3>
     <form name="myForm" method="POST" class='formWithValidation' >
        <p>
          <label>Ім'я </label>
          <input readonly type="text" name="first_name" value = " <?php echo $data['Name'] ?> "  class='first_name field'  />  <span id='first_name'></span>
        </p>
        <p>
          <label> Логін *</label>
          <input readonly type="text" name="nickname"  value =  " <?php echo $data['login'] ?> "  class='nickname field'/>  <span id='nickname'></span>
        </p>
        <p>
          <label>Email *  </label>
          <input readonly type="email" name="email" value =  " <?php echo $data['email'] ?> "   class = 'email field'/> <span id='email'> </span>
        </p>
        <p>
          <label>Телефон </label>
          <input readonly type="text" name="phone"  value =" <?php echo $data['PhoneNumber'] ?> "  class = 'phone field'/> <span id ='phone'> </span> 
        </p>
        <p>
          <label>Пароль * </label>
          <input readonly  type="password" name="password" value = " <?php echo $data['password'] ?> "  class='password field'/> <span id="password"></span>
        </p>
        </form>
       <?php }?>
</body>
</html>