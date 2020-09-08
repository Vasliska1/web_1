<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head> 
 <meta charset="UTF-8">
 <link rel="shortcut icon" href="/images/dead.jpg" type="image/jpg">
 <link rel="stylesheet"   href="css/style.css" type="text/css">
 <title>Laba 1</title>
</head>

<body>
    <div class="header">
      <p>Группа  P3132</p>
      <p>Лисицина Василиса</p>
      <p>Вар. 2809</p>
    </div>

    <div class = "basis">

    <div class = "chooseElement">
      <form class="validateForm" name ="validateForm" onsubmit="return validate(this);" action="index.php"  method="POST">

        <div class="chooseX"> 
         <label class="chooseXTitle"><p>Выберите X:</p></label>
         <label><input type="radio" id="-2" name="chooseX" value="-2">-2</label>
         <label><input type="radio" id="-1.5" name="chooseX" value="-1.5">-1.5</label>
         <label><input type="radio" id="-1" name="chooseX" value="-1">-1</label>
         <br>
         <label><input type="radio" id="-0.5" name="chooseX" value="-0.5"> -0.5</label>
         <label><input type="radio" id="0" name="chooseX" value="0"> 0</label>
         <label><input type="radio" id="0.5" name="chooseX" value="0.5"> 0.5</label> 
         <br>
         <label><input type="radio" id="1" name="chooseX" value="1"> 1  </label>
         <label><input type="radio" id="1.5" name="chooseX" value="1.5"> 1.5</label> 
         <label><input type="radio" id="2" name="chooseX" value="2"> 2</label>
        </div>

        <div class="YR">
            <div class="chooseY">
              <label class="chooseYTitle"><p>Введите значение Y от -5 до 5:</p></label>
              <input class="enterY" name="enterY" type="text">
            </div>

        	<div class="chooseR">
        	 <label class="chooseRTitle"><p>Выберите R:</p></label>
        	 <label><input type="checkbox" id="1" name="chooseR" value="1">1</label>   
        	 <label><input type="checkbox" id="2" name="chooseR" value="2">2</label>   
        	 <label><input type="checkbox" id="3" name="chooseR" value="3">3</label>   
        	 <label><input type="checkbox" id="4" name="chooseR" value="4">4</label>
       		 <label><input type="checkbox" id="5" name="chooseR" value="5">5</label>
            </div>
        </div>

        

    	<div class="button">
        	<input class="butt" type="submit" name="sendButton" value="Отправить">
   		</div>
     </div> 

   		<div class = "graf">
        	<img id="image" src="images/1.png" width="200" height="200" alt="logo">
   		</div>

       <div id="message"></div>
      </form>
   	</div>

	<?php			
		include('header.php');
	?>

  <center>
   <div class="footer">
    <a href="https://se.ifmo.ru/">
      <img id="VT_logo" src="images/vt_logo.png" width="100" height="100 " alt="logo">
    </a>
    <span class="center">ПИП 2020 г.</span>
  </div>
</center>

	<script src="check.js"></script>


</body>
</html>
