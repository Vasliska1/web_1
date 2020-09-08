<?php 

$start = microtime(true);
date_default_timezone_set("Europe/Moscow");
session_start();

$x = $_POST["chooseX"];
$y = $_POST["enterY"];
$r = $_POST["chooseR"];



function hit ($x, $y, $r) {
  if (($x*$x+$y*$y<=$r*$r && $x>=0 && $y>=0) || ($x>-$r/2 && $x<0 && $y<0 && $y>-$r)
   || ($x>0 && $y<=$x+$r && $x<$r) )
    return "<span style='color: green'>Вы попали</span>";
  else return "<span style='color: red'>Не попали((</span>";
}


$result = hit($x, $y, $r);


if  (!in_array($x, array(-2, -1.5, -1, -0.5, 0, 0.5, 1, 1.5, 2)) || !is_numeric($y) || !is_numeric($x) || !is_numeric($r) || $y < -5 || $y > 5 || !in_array($r, array( 1, 2, 3, 4, 5))) {
  $result = "<span style='color: orange'>Введенные данные не верны!!!</span>";
}


$current_date = date("H:i:s");

$time_run = round((microtime(true) - $start)*1000000, 2) ;

$arrayResult = array($x, $y, $r, $time_run, $current_date, $result);

if (!isset($_SESSION['results'])) {
  $_SESSION['results'] = array();
}

array_push($_SESSION['results'], $arrayResult)

?>

<div class="centerBorder">
  <table>
    
    <tr><th>X</th><th>Y</th><th>R</th><th>Время<br>Исполнения</th><th>Текущее<br>Время</th><th>Результат</th></tr>
    <?php foreach ($_SESSION['results'] as $value) { ?>
      <tr>

        <td><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[3] ?></td>
        <td><?php echo $value[4] ?></td>
        <td><?php echo $value[5] ?></td>

      </tr>

      <?php } ?>
  </table>
</div>