<?php 
require_once 'config/connectDB.php';
if(isset($_SESSION["erorrs"]))
{
        ?> 
        <!-- <script> alert("Неправильний логін або пароль"); </script>  -->
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
        <link rel="stylesheet" href="FilmTable.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" type="text/css" href="Form2.css">	
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <title>Кінотеатр</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/js/unitegallery.min.js"></script>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/css/unite-gallery.min.css"
		/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/slider/ug-theme-slider.min.js"></script>

    </head>
    <body>
        <!-- <div id="dialog" title="Умови відвідування під час карантину">
            <h5>Через карантинні обмеження вхід за одним з наступних документів:</h5>
            <ul>
                <li><a>"Зелений" сертифікат вакцинації</a></li>
                <li><a>Негативний ПЛР тест, зроблений не більш як за 72 години до відвідування</a></li>
                <li><a>Довідка про перенесену хворобу COVID-19</a></li>
                </ul>
          </div> -->

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
<!-- <div class = "MasterCardHeader">
<img src = "MasterCard.png" width="60" height="40" hspace="5" vspace="2">
</div> -->
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
    
                <!-- <div class="links">
                    <div > <a href='#'  onclick="shareOnLinked('facebook')"> <img src="facebook.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('instagram')">  <img src="instagram.png" height="45px"></a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('twitter')"> <img src="twitter.png" height="45px"> </a>  </div>
                    <div > <a href='#'  onclick="shareOnLinked('pinterest')"> <img src="pinterst.png" height="45px"> </a>  </div>
                    </div> -->
            </div>
                <div class="header_top">
                    <div class="header_text">
                        <h1>Кінотеатр</h1>
                    </div>
                </div>
                <div class="header_menu">
                    <div class="item i2"><a href="Date1.php" >15.12</a></div>
                    <div class="item i2"><a href="Date2.php" >16.12</a></div>
                    <div class="item i1"><a href="cinema.php" >На головну сторінку</a></div>
                    <div class="item i4"><a href="Date4.php" >18.12</a></div>
                    <div class="item i5"><a href="Date5.php" >19.12</a></div>
                    <div class="item i6"><a href="Date6.php" >20.12</a></div>
                    <div class="item i7"><a href="Date7.php" >21.12</a></div>
                </div>

        </header>


        <div class="EchoText"><h2>Сеанси фільмів на 17.12</h2></div>
                <?php 
                    $sql="SELECT films.film_name, films.director, films.genre, films.country, films.actors, films.duration, films.rating, session.date, session.prise, session.idsession  
                    FROM `films` INNER JOIN `session`
                    WHERE films.idfilm = session.film_name AND session.date LIKE '%2021-12-17%'
                    ORDER BY session.date";
                    $films=mysqli_query($connect,$sql);
                    $films = mysqli_fetch_all($films);
                ?>


                <table class="table">
                    <tr>
                        <th>Назва фільму</th>
                        <th>Режисер</th>
                        <th>Жанр</th>
                        <th>Країна</th>
                        <th>Актори</th>
                        <th>Тривалість</th>
                        <th>Рейтинг</th>
                        <th>Дата</th>
                        <th>Ціна</th>
                        <th>Квиток</th>
                    </tr>
                    <?php                 
                    foreach($films as $film){
                        echo '
                        <tr>
                            <td>'.$film[0].'</td>
                            <td>'.$film[1].'</td>
                            <td>'.$film[2].'</td>
                            <td>'.$film[3].'</td>
                            <td>'.$film[4].'</td>
                            <td>'.$film[5].'</td>
                            <td>'.$film[6].'</td>
                            <td>'.$film[7].'</td>
                            <td>'.$film[8].'</td>
                            <td><div class="item i1"><a href="Buying.php?id='.$film[9].'">Обрати</a></div></td>
                        </tr>
                        ';
                    }
                ?>
                </table>
                

        <script src ="cite_js.js"> </script>
    </body>
</html>