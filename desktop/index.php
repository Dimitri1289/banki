<!DOCTYPE html>
<html lang="ru">
<head>
     <title></title>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=0.7" />
     <meta name="description" content="&quot; &quot; - ." />
      <meta name="keywords" content=" " />
     <link rel="canonical" href="index.php" />
     <link rel="stylesheet" type="text/css" href="css/stail.css" />    
     <link rel="icon" href="favicon.ico" type="image/x-icon" />     
  <script src="js/SmoothScroll.js"></script>
</head>
<body>
<?php 
include 'bloks/menu_top.php'
?>
<br>
<br>
<section><span style="margin-left:33px; font-size:12px; color:#999999"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Главная | Кредитные карты</span> <br><br>
<?php  
$_SESSION['parametrs'] = $_GET['parametrs'];
$parametrs = $_SESSION['parametrs'];
$_SESSION['page'] = $_GET['page'];
$page = $_SESSION['page'];
$_SESSION['banks'] = $_GET['banks'];
$banks = $_SESSION['banks'];
$_SESSION['sistem'] = $_GET['sistem'];
$sistem = $_SESSION['sistem'];
$_SESSION['privilegii'] = $_GET['privilegii'];
$privilegii = $_SESSION['privilegii'];
include 'bloks/top_parametrs.php'
?>  
  <main>
  <h1><?php 
  if($privilegii == 'classik') echo 'Классические ';
  if($privilegii == 'gold') echo 'Золотые ';
  if($privilegii == 'momentum') echo 'Моментальные ';
  if ($privilegii == 'classik' or $privilegii == 'gold' or $privilegii == 'momentum' ) echo 'к'; else echo 'К'?>редитные карты 
  <?php 
  if($parametrs == 'percents'  or $page == '5' or $page == '6' or $page == '7') echo 'с низкой % ставкой'; if($parametrs == 'limit' or $page == '8' or $page == '9' or $page == '10') echo 'с большим лимитом'; if($parametrs == 'periud' or $page == '11' or $page == '12' or $page == '13') echo 'с беспроцентным периодом'; if($parametrs == 'kesbek' or $page == '14' or $page == '15' or $page == '16') echo ' с лучшим кэшбеком'; if($parametrs == 'zero' or $page == '17' or $page == '18' or $page == '19') echo ' с бесплатным обслуживанием';  if($sistem == 'MasterCard') echo ' MasterCard в банках России'; if($sistem == 'VISA') echo ' VISA в банках России'; if($sistem == 'MIR') echo ' МИР в банках России'; if($privilegii == 'premium') echo ' премиум класса '; if($banks == 'sber') echo ' от СберБанка'; if($banks == 'alfa') echo ' от АльфаБанка'; if($banks == 'xoum') echo ' от ХоумКредитБанка'; if($banks == 'sity') echo ' от СитиБанка'; if($banks == 'selxoz') echo ' от РайффайзенБанка';
  ?> </h1>
 <span class="pod_h1" style="font-weight:100; color:#e08a65">Закажите <?php if($privilegii == 'classik') echo ' классическую '; if($privilegii == 'gold') echo ' золотую '; if($privilegii == 'momentum') echo ' моментальную ';   if($privilegii == 'premium') echo ' премиальную ';?> кредитную карту  <?php if($parametrs == 'percents'  or $page == '5' or $page == '6' or $page == '7') echo 'с низкой % ставкой';  if($parametrs == 'limit' or $page == '8' or $page == '9' or $page == '10') echo 'с большим лимитом';if($parametrs == 'periud' or $page == '11' or $page == '12' or $page == '13') echo 'с беспроцентным периодом'; if($parametrs == 'kesbek' or $page == '14' or $page == '15' or $page == '16') echo ' с лучшим кэшбеком'; if($parametrs == 'zero' or $page == '17' or $page == '18' or $page == '19') echo ' с бесплатным обслуживанием'; if($sistem == 'MasterCard') echo ' MasterCard'; if($sistem == 'VISA') echo ' VISA в банках России'; if($sistem == 'MIR') echo ' МИР в банках России'; if($banks == 'sber') echo ' от СберБанка'; if($banks == 'alfa') echo ' от АльфаБанка'; if($banks == 'xoum') echo ' от ХоумКредитБанка'; if($banks == 'sity') echo ' от СитиБанка'; if($banks == 'selxoz') echo ' от РайффайзенБанка'; 
 ?>
 не выходя из дома</span>
<span style="font-size:12px; color:#CCCCCC; margin-left:30px">
Всего карт в базе- 26 в 12 банках Росии</span><br>
<?php 
include 'bloks/parametrs.php';
//адресс без домена
 $url = $_SERVER['REQUEST_URI'];

 //отделение ГЕТ параметров от исполняемого файла echo $url.'<br>';
 $parts = parse_url ( $url );
 // разбиение ГЕТ параметров на масив
 parse_str ( $parts['query'] , $query );
 //Вывод элемента масива echo $query ['parametrs'];
?>  
  <br><!--Сортировка по процентам-->
<?php 
if($parametrs == 'percents') {include 'kreditnie/mts_zero.php'; include 'kreditnie/pohta.php'; include 'kreditnie/home.php'; include 'kreditnie/home_polza.php'; include 'kreditnie/atb.php'; include 'kreditnie/renesans.php';  include 'bloks/page_percent1.php';}
if($page == '5') { include 'kreditnie/gaz_1.php'; include 'kreditnie/mts_back.php'; include 'kreditnie/alfa_100.php'; include 'kreditnie/alfa_gold.php'; include 'kreditnie/alfa_platinum.php'; include 'kreditnie/tinkoff_platinum.php'; include 'kreditnie/vtb.php';  include 'bloks/page_percent2.php';}

if($page == '6') {include 'kreditnie/raiffazen_110.php'; include 'kreditnie/raiffazen_gold.php'; include 'kreditnie/raiffazen_nal.php'; include 'kreditnie/mts_week.php'; include 'kreditnie/sber_premium.php'; include 'kreditnie/ross_black.php'; include 'kreditnie/sber_gold.php'; include 'bloks/page_percent3.php';}

if($page == '7') {include 'kreditnie/ross_110.php'; include 'kreditnie/sber_classic.php'; include 'kreditnie/ross_vse.php'; include 'kreditnie/gaz_platina.php'; include 'kreditnie/gaz_2.php'; include 'bloks/page_percent4.php';}?>

<!--СОРТИРОВКА ПО ЛИМИТУ-->
<?php if($parametrs == 'limit') {include 'kreditnie/sber_premium.php'; include 'kreditnie/ross_black.php'; include 'kreditnie/pohta.php'; include 'kreditnie/mts_back.php'; include 'kreditnie/ross_vse.php'; include 'kreditnie/alfa_platinum.php';  include 'bloks/page_limit1.php';}

if($page == '8') { include 'kreditnie/alfa_gold.php'; include 'kreditnie/home.php'; include 'kreditnie/home_polza.php'; include 'kreditnie/tinkoff_platinum.php'; include 'kreditnie/alfa_gold.php'; include 'kreditnie/gaz_platina.php'; include 'kreditnie/gaz_2.php';  include 'bloks/page_limit2.php';}

if($page == '9') {include 'kreditnie/gaz_1.php'; include 'kreditnie/raiffazen_110.php'; include 'kreditnie/raiffazen_gold.php'; include 'kreditnie/raiffazen_nal.php'; include 'kreditnie/sber_gold.php'; include 'kreditnie/sber_classic.php'; include 'kreditnie/alfa_100.php'; include 'bloks/page_limit3.php';}

if($page == '10') {include 'kreditnie/vtb.php'; include 'kreditnie/atb.php'; include 'kreditnie/renesans.php'; include 'kreditnie/mts_week.php'; include 'kreditnie/mts_zero.php'; include 'bloks/page_limit4.php';}
//СОРТИРОВКА ПО БЕСПРОЦЕНТНОМУ ПЕРИОДУ
 if($parametrs == 'periud') {include 'kreditnie/tinkoff_platinum.php';include 'kreditnie/renesans.php'; include 'kreditnie/pohta.php'; include 'kreditnie/ross_110.php';  include 'kreditnie/home.php'; include 'kreditnie/gaz_1.php';  include 'bloks/page_period1.php';}

if($page == '11') {include 'kreditnie/atb.php'; include 'kreditnie/ross_black.php'; include 'kreditnie/mts_back.php'; include 'kreditnie/raiffazen_110.php'; include 'kreditnie/vtb.php'; include 'kreditnie/alfa_100.php'; include 'kreditnie/alfa_gold.php';  include 'bloks/page_period2.php';}

if($page == '12') {include 'kreditnie/alfa_platinum.php'; include 'kreditnie/ross_vse.php'; include 'kreditnie/home_polza.php'; include 'kreditnie/gaz_platina.php'; include 'kreditnie/raiffazen_gold.php'; include 'kreditnie/mts_week.php'; include 'kreditnie/sber_premium.php'; include 'bloks/page_period3.php';}

if($page == '13') {include 'kreditnie/sber_gold.php'; include 'kreditnie/sber_classic.php'; include 'bloks/page_period4.php'; echo '<h2>Карты не имеющие льготного периода</h2>'; include 'kreditnie/mts_zero.php';include 'kreditnie/raiffazen_nal.php';}
//СОРТИРОВКА ПО КАШБЭКУ
 if($parametrs == 'kesbek') {include 'kreditnie/home.php';include 'kreditnie/raiffazen_nal.php'; include 'kreditnie/sber_classic.php'; include 'kreditnie/sber_gold.php';  include 'kreditnie/sber_premium.php'; include 'kreditnie/mts_back.php';  include 'bloks/page_kase1.php';}

 if($page == '14') {include 'kreditnie/pohta.php'; include 'kreditnie/atb.php'; include 'kreditnie/gaz_2.php'; include 'kreditnie/gaz_platina.php'; include 'kreditnie/raiffazen_110.php'; include 'kreditnie/mts_week.php'; include 'kreditnie/raiffazen_gold.php';  include 'bloks/page_kase2.php';}?>
 
 <!--СОРТИРОВКА ПО КАШБЭКУ-->
 <?php if($parametrs == 'zero') {include 'kreditnie/raiffazen_gold.php';include 'kreditnie/alfa_100.php'; include 'kreditnie/ross_vse.php'; include 'kreditnie/sber_gold.php';  include 'kreditnie/vtb.php'; include 'kreditnie/mts_back.php';include 'kreditnie/renesans.php';  include 'bloks/page_zero1.php';}

 if($page == '17') {include 'kreditnie/atb.php'; include 'kreditnie/raiffazen_110.php'; include 'kreditnie/alfa_gold.php'; include 'kreditnie/ross_black.php'; include 'kreditnie/sber_premium.php'; include 'kreditnie/ross_110.php'; include 'kreditnie/gaz_1.php';  include 'bloks/page_zero2.php';}
//ОБЫЧНАЯ СОРТИРОВКА 
if(!isset($page) and !isset($parametrs)) include 'kreditnie/pohta.php';
if(!isset($page) and !isset($parametrs)) include 'kreditnie/tinkoff_platinum.php'; 
if(!isset($page) and !isset($parametrs)) include 'kreditnie/mts_zero.php';
if(!isset($page) and !isset($parametrs)) include 'kreditnie/ross_110.php'; 
if(!isset($page) and !isset($parametrs)) include 'kreditnie/sber_gold.php'; 
if(!isset($page) and !isset($parametrs)) include 'kreditnie/sber_classic.php';  
if(!isset($page) and !isset($parametrs)) include 'kreditnie/sber_gold.php';
if(!isset($page) and !isset($parametrs)) include 'bloks/page1.php';
  
if ($page == 2) include 'kreditnie/sber_premium.php'; 
if ($page == 2) include 'kreditnie/mts_back.php'; 
if ($page == 2) include 'kreditnie/mts_week.php';
if ($page == 2) include 'kreditnie/raiffazen_gold.php';
if ($page == 2) include 'kreditnie/raiffazen_nal.php'; 
if ($page == 2) include 'kreditnie/ross_vse.php';
if ($page == 2) include 'kreditnie/ross_black.php';
if ($page == 2) include 'bloks/page2.php';

if ($page == 3) include 'kreditnie/alfa_100.php';
if ($page == 3) include 'kreditnie/alfa_gold.php';
if ($page == 3) include 'kreditnie/alfa_platinum.php';
if ($page == 3) include 'kreditnie/raiffazen_110.php';
if ($page == 3) include 'kreditnie/vtb.php';
if ($page == 3) include 'kreditnie/home.php';
if ($page == 3) include 'kreditnie/home_polza.php';
if ($page == 3) include 'bloks/page3.php';
      
if ($page == 4) include 'kreditnie/gaz_1.php';
if ($page == 4) include 'kreditnie/gaz_2.php';
if ($page == 4) include 'kreditnie/gaz_platina.php';
if ($page == 4) include 'kreditnie/renesans.php';
if ($page == 4) include 'kreditnie/atb.php';
if ($page == 4) include 'bloks/page4.php'?><br>
  </main> 
</section>

<br>
 <?php include 'bloks/descript.php'?>
 <footer>
<?php include 'bloks/footer.php'?>
 </footer>    
</body>
</html>