<?php 
require_once 'config/connectUsers.php';
if(isset($_SESSION["erorrs"]))
{
        ?> 
        <div class = "EchoText"><?php  echo $_SESSION["erorrs"];
        unset($_SESSION["erorrs"]);
        ?> <hr> </div>
        <?php
}
else if (isset($_SESSION['ID']))
{
    $query = mysqli_query($connect, "SELECT*FROM user WHERE ID = '".intval($_SESSION['ID'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
    if(($userdata['ID'] !== $_SESSION['ID']))
    {
        setcookie("ID", "", time() - 3600*24*30*12, "/");
        ?> <div class = "EchoText"><?php  echo "Хм, щось не вийшло. Неправильно введені дані.";?> <hr> </div>
        <?php
    }
    else
    {
        ?> <div class = "EchoText"><?php  echo "Вітаємо,  ".$userdata['login']."! Гарного перегляду!";?> <hr> </div>
        <?php
    }
}
else
{
    ?> <div class = "EchoText"><?php  echo "Увійдіть або";?>   <a href="Authorization2.php" target="_parent"> 
         зареєструйтесь </a> <?php  echo "!";?>  <hr> </div>
        <?php
   
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_cin2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" type="text/css" href="Form2.css">	
        <link rel="stylesheet" type="text/css" href="styleAbout.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <title>Кінотеатр</title>
        <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/ui-lightness/jquery-ui.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.2/jquery-ui.min.js"></script>
      <script type="text/javascript" src="cite_js.js"></script>
    </head>
    <body>
       
  <div id="content">
  <ul class="desc">
					<li>унікальні вкуси продукції попкорн-бара;</li>
					<li>selfie-friendly дизайн интерьєрів; </li>
					<li>стандартні залти з місцями підвищенного комфорту на останніх рядах і інноваційні формати IMAX і ScreenX;</li>
					<li>VIP кінотеатр з ексклюзивним сервісом в головному ТРЦ страны - ЦУМ в Київі;</li>
				</ul>
  </div>

        <hr>
        <div class="links">
                    <div > <a href='#'  onclick="shareOnLinked('facebook')"> <img src="facebook.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('instagram')">  <img src="instagram.png" height="45px"></a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('twitter')"> <img src="twitter.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('pinterest')"> <img src="pinterst.png" height="45px"> </a>  </div>
                    </div>
        
    </body>

</html>