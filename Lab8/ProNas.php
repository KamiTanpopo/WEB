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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    

        <header class="header">
            <div class= "top_menu">
                <div class ="menu_all">
                    <div class="drop_menu">
                        <div class="header_burger">
                            <span></span>
                        </div>
                        <nav class="header_menu_list">
                            <ul class="header_list">
                                <li class="item"> <a href="VideoSlider.php" class ="header_link">VideoSlider</a> </li>
                                <li class="item"> <a href="PhotoGallery.php" class ="header_link">PhotoGallery</a> </li>
                                <li class="item"> <a href="ProNas.php" class ="header_link">Про нас</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class ="btn">
                        <a  class ="theme" href="#" >Тема</a>
                        <div class="theme_menu">
                            <button class ="th t1" onclick="changeColor('#C0C0C0')">Світла</button>
                            <button class ="th t2" onclick="changeColor('#000')">Темна</button>
                            <button class ="th t3" onclick="changeColor('#252B32')">Стандартна</button>
                        </div>
                    </div>
                </div>
                <div class="Space"> 
		<p></p>
</div>
<div class = "Imax">
<img src = "ImaxLaser.png" width="100" height="50" hspace="0" vspace="-4" >
</div>
<div class="box vl"> 
</div>		
<div class="TextGeo" > 
		<p>Київ, Lavina IMAX Laser </p>
</div>	


<div class="box vl"> 
</div>		
<?php if(empty($userdata)){?>	
<button onclick="show2('block')"class="regButton">Увійти</button>
<div onclick="show2('none')" id="gray"> </div>
<div id="window2">
<img class="close"  src="close.png" width="15" height="15"  alt=""  onclick="show2('none')">
<form action = "login2.php" method="POST" name="myForm" class='formWithValidation'  >
        <div class = "text2">
        <p> Увійдіть в свій аккаунт </p> </div>
        <p> </br></p>
            <p>
              <label> Логін *</label>
              <input type="text" name="login"  class='nickname field'/>  <span id='nickname'></span>
            </p>
            <p>
              <label>Пароль * </label>
              <input type="password" name="password"   class='password field'/> <span id="password"></span>
            </p>
    <input name="signup" type="submit" value="Увійти"  class='validateBtn'/>
    <div class = "text1">
        <p> Немає аккаунта?  <a href="Authorization2.php" target="_parent"> 
         Зареєструйтесь</a> !  </div>  </p>
  
    </form>
  
</div>
<?php } else 
{?>  <a href="logout.php" target="_parent"> <button onclick="show2('block')"class="regButton"> Вийти </button> </a> 
<?php }?>

<button onclick="show('block')" class="userButton"> 
       <div class = "UserAccount">
            <img src = "User2.png" width="45" height="45" hspace="0" vspace="0"></div></span> 
            <!-- <img src = "Group 1.png" width="45" height="45" hspace="0" vspace="0"></div></span>  -->
    
        </div>  </button>
<div onclick="show('none')" id="gray"></div>
<div id="window">
    <img class="close"  src="close.png"  alt=""  onclick="show('none')">
   <!-- <button type="button" 
         onclick="window.open('', '_self', ''); window.close();">Discard</button> -->
        
<?php if(!empty($userdata)){?>
    <form name="myForm" method="POST" class='formWithValidation' >
        <p>
          <label>Ім'я </label>
          <input readonly type="text" name="first_name" value = " <?php echo $userdata['Name'] ?> "  class='first_name field'  />  <span id='first_name'></span>
        </p>
        <p>
          <label> Логін *</label>
          <input readonly type="text" name="nickname"  value =  " <?php echo $userdata['login'] ?> "  class='nickname field'/>  <span id='nickname'></span>
        </p>
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
        </form>
<?php }
else {?>
    <div class = "text1">
    <form  name="myForm" method="POST" class='formWithValidation' >
        <p> Немає аккаунта?  <a href="Authorization2.php" target="_parent"> 
         Зареєструйтесь</a> !  </div>  </p>
     </div>
        </form>
        <?php }?>

</div>
  <script type="text/javascript">	
  function show(state)
  {
  document.getElementById('window').style.display = state;	
  document.getElementById('gray').style.display = state;
  }	
  function show2(state)
  {	
  document.getElementById('window2').style.display = state;
  document.getElementById('gray').style.display = state;
  }	
   </script>  
     <div class="header_top">
                    <div class="header_text">
                        <h1>Кінотеатр</h1>
                    </div>
    </div>
              <h5>Про компанію</h5>
            <p class="desc">
                KINOMAN – це найбільша мережа кінотеатрів в Україні основана в 2004 році.   
              
                KINOMAN - це 28 кінотеатрів і 141 кінозал в найбільших городах України.
                <br>
               Згідно з найкращими світовими практиками корпоративного управління, в серпні 2018 року був сформованний вищий орган управління компанією <br> KINOMAN
                 в склад якого ввійшли впливові українські піприємці, управліньці і лідери громадської думки. 
                
                KINOMAN активно підтрмимує і інвестує в  <br>  розвиток  українського кіноматографа.
              
                <br>
                </p>
            <h5>Наші особливості:</h5>
           
  <div id="content">
  <ul id="list">
            <li><a href = "aboutUs.php"  id="list">продовжити читання.. </a></li>
            </ul>
       
  </div>

        </header>
        <hr>
        <div class="links">
                    <div > <a href='#'  onclick="shareOnLinked('facebook')"> <img src="facebook.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('instagram')">  <img src="instagram.png" height="45px"></a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('twitter')"> <img src="twitter.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('pinterest')"> <img src="pinterst.png" height="45px"> </a>  </div>
                    </div>
        
    </body>
<script > 
$('#list li a').click(function(){
    var toLoad = $(this).attr('href')+' #content';
    $('#content').hide('fast',loadContent);
    $('#load').remove();
    $('#load').fadeIn('normal'); //у видиме
    function loadContent() {
        $('#content').load(toLoad,'',showNewContent())
    }
    function showNewContent() {
        $('#content').show('normal',hideLoader());
    }
    function hideLoader() {
        $('#load').fadeOut('normal');
    }
    return false;

    });
</script>
</html>