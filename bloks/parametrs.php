  <hgroup>
<table class="menu_right" style="width:32%; border:0px; border-collapse:collapse; border-spacing:0px; background-color: #FFFFFF">
    <tr>
      <td style="background-image:url(../img/menu_left_top.png); width:26px; height:26px; background-repeat:no-repeat"></td>
      <td style="background-image:url(../img/menu_center_top.png); height:26px; background-repeat:repeat-x"></td>
      <td style="background-image:url(../img/menu_right_top.png); width:26px; height:26px; background-repeat:no-repeat">&nbsp;</td>
    </tr>
    <tr>
      <td style="background-image:url(../img/menu_center_left.png); width:26px; background-repeat:repeat-y">&nbsp;</td>
      <td style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size:13px; font-weight:100">
          <div class="tooltip" style="text-align:center; font-size:13px; ">ДОПОЛНИТЕЛЬНЫЕ ПАРАМЕТРЫ  &#9888; <hr><span class="custom info"><img src="../img/info.png" width="28" height="28" />Выберите один из параметров для этой вкладки сортировки!</span></div>
<form action="" method="get" enctype="multipart">
          <input  onClick="submit()"  name="checkbox" type="checkbox" value="pasport" <?php if ($_GET['checkbox'] == 'pasport') echo 'checked="checked"'?>> 
          &nbsp;&nbsp;&nbsp;&nbsp;Кредитка по паспорту <br>
          <br>     
          <input onClick="submit()"  name="checkbox" type="checkbox" value="onlain" <?php if ($_GET['checkbox'] == 'onlain') echo 'checked="checked"'?>>
          &nbsp;&nbsp;&nbsp;&nbsp;Онлайн оформление <br>
          <br>
          <input onClick="submit()"  name="checkbox" type="checkbox" value="dostavka" <?php if ($_GET['checkbox'] == 'dostavka') echo 'checked="checked"'?>>
          &nbsp;&nbsp;&nbsp;&nbsp;С доставкой надом <br>
          <br>
          <input onClick="submit()"  name="checkbox" type="checkbox" value="nalichnie" <?php if ($_GET['checkbox'] == 'nalichnie') echo 'checked="checked"'?>>
          &nbsp;&nbsp;&nbsp;&nbsp;Для снятия наличных <br>
          <br>
          <input onClick="submit()"  name="checkbox" type="checkbox" value="luhchie" <?php if ($_GET['checkbox'] == 'luhchie') echo 'checked="checked"'?>>
&nbsp;&nbsp;&nbsp;&nbsp;Лучшие условия
</form>
 <br><br><div class="tooltip" style="text-align:center; font-size:13px; ">УСЛОВИЯ ПРЕДОСТАВЛЕНИЯ &#9888; <hr><span class="custom info"><img src="../img/info.png" width="28" height="28" />Укажите условие по предоставлению кредитного продукта!</span></div>                
       <form action="" method="get" enctype="multipart">
       <input onclick="document.location.href ='?parametrs=percents&banks=vse&sistem=vse&privilegii=vse'" type="checkbox" name="parametrs" value="percents" <?php if ($parametrs == 'percents' or $page == '5' or $page == '6' or $page == '7') echo 'checked="checked"'?> />                    
&nbsp;&nbsp;&nbsp;&nbsp;Низкая % ставка<br>
<br>
<input onclick="document.location.href ='?parametrs=limit&banks=vse&sistem=vse&privilegii=vse'" type="checkbox" name="parametrs" value="limit" <?php if ($parametrs == 'limit'  or $page == '8' or $page == '9' or $page == '10') echo 'checked="checked"'?>>
&nbsp;&nbsp;&nbsp;&nbsp;Большой лимит<br>
<br>
<input onclick="document.location.href ='?parametrs=periud&banks=vse&sistem=vse&privilegii=vse'" type="checkbox" name="parametrs" value="periud" <?php if ($parametrs == 'periud'  or $page == '11' or $page == '12' or $page == '13') echo 'checked="checked"'?>>
&nbsp;&nbsp;&nbsp;&nbsp;Безпроцентный период<br>
<br>
<input onclick="document.location.href ='?parametrs=kesbek&banks=vse&sistem=vse&privilegii=vse'" type="checkbox" name="parametrs" value="kesbek" <?php if ($parametrs == 'kesbek'  or $page == '14' or $page == '15' or $page == '16') echo 'checked="checked"'?>>
&nbsp;&nbsp;&nbsp;&nbsp;Лучший кэшбэк<br>
<br>
<input onclick="document.location.href ='?parametrs=zero&banks=vse&sistem=vse&privilegii=vse'" type="checkbox" name="parametrs" value="zero"<?php if ($parametrs == 'zero'  or $page == '17' or $page == '18' or $page == '19') echo 'checked="checked"'?>>
&nbsp;&nbsp;&nbsp;&nbsp;Бесплатное обслуживание<br>
</form>
<br><br>
 
 <div class="tooltip" style="text-align:center; font-size:13px">ПЛАТЁЖНЫЕ СИСТЕМЫ &#9888; <hr><span class="custom info"><img src="../img/info.png" width="28" height="28" />Укажите нужную платёжную систему!</span></div>
 <form action="" method="get" enctype="multipart">
 <input onclick="document.location.href ='?banks=vse&sistem=MasterCard&privilegii=vse'" type="checkbox" name="sistem" value="mastercard" <?php if ($sistem == 'MasterCard')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;MasterCard<br>
<br>
<input onclick="document.location.href ='?banks=vse&sistem=VISA&privilegii=vse'" type="checkbox" name="sistem" value="visa" <?php if ($sistem == 'VISA')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;VISA<br>
<br>
<input onclick="document.location.href ='?banks=vse&sistem=MIR&privilegii=vse'" type="checkbox" name="sistem" value="mir" <?php  if ($sistem == 'MIR')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;МИР<br>
<br>
<input onclick="submit()" type="checkbox" name="sistem" value="vse" <?php if (!isset($sistem))  echo 'checked="checked"'; if ($sistem == 'vse')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Все платёжные системы<br>
</form>
<br>
<br>
<div class="tooltip" style="text-align:center; font-size:13px">ПРИВИЛЕГИРОВАННОСТЬ &#9888; <hr><span class="custom info"><img src="../img/info.png" width="28" height="28" />&nbsp;&nbsp;&nbsp;&nbsp;Укажите требуемые привилегии!</span></div>
<form action="" method="get" enctype="multipart">
<input onclick="document.location.href ='?banks=vse&sistem=vse&privilegii=classik'" type="checkbox" name="privilegii" value="classik" <?php  if ($privilegii == 'classik')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Classik<br>
<br>
<input onclick="document.location.href ='?banks=vse&sistem=vse&privilegii=gold'" type="checkbox" name="privilegii" value="gold" <?php  if ($privilegii == 'gold')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Gold<br>
<br>
<input onclick="document.location.href ='?banks=vse&sistem=vse&privilegii=premium'" type="checkbox" name="privilegii" value="premium" <?php  if ($privilegii == 'premium')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Premium<br>
<br><div id="all_banks"></div>
<input onclick="document.location.href ='?banks=vse&sistem=vse&privilegii=momentum'" type="checkbox" name="privilegii" value="momentum" <?php  if ($privilegii == 'momentum')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Momentum<br>
<br>
<input onclick="submit()" type="checkbox" name="privilegii" value="vse" <?php if (!isset($privilegii))  echo 'checked="checked"'; if ($privilegii == 'vse')  echo 'checked="checked"';  ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Все привелегии<br>
<br>
<br>
</form>

<div  class="tooltip" style="text-align:center; font-size:13px">
СОРТИРОВАТЬ ПО БАНКАМ &#9888;<hr>
<span class="custom info"><img src="../img/info.png" width="28" height="28" />Выберите банк, продукты которого хотите отобразить!</span></div>
<form action="" method="get" enctype="multipart">
<input onclick="document.location.href ='?banks=sber&sistem=vse&privilegii=vse'" type="checkbox" name="banks[]" value="sber"  <?php if ($banks == 'sber')  echo 'checked="checked"';?>>
&nbsp;&nbsp;&nbsp;&nbsp;СберБанк<br>
<br>
<input onclick="document.location.href ='?banks=alfa&sistem=vse&privilegii=vse'" type="checkbox" name="banks[]" value="alfa"<?php if ($banks == 'alfa')  echo 'checked="checked"';?> >
&nbsp;&nbsp;&nbsp;&nbsp;АльфаБанк<br>
<br>
<input onclick="document.location.href ='?banks=xoum&sistem=vse&privilegii=vse'" type="checkbox" name="banks" value="xoum"<?php if ($banks == 'xoum')  echo 'checked="checked"';?> >
&nbsp;&nbsp;&nbsp;&nbsp;ХоумкредитБанк<br>
<br>
<input onclick="document.location.href ='?banks=sity&sistem=vse&privilegii=vse'" type="checkbox" name="banks" value="sity" <?php if ($banks == 'sity')  echo 'checked="checked"';?>>
&nbsp;&nbsp;&nbsp;&nbsp;СитиБанк<br>
<br>
<input onclick="document.location.href ='?banks=selxoz&sistem=vse&privilegii=vse'" type="checkbox" name="banks" value="selxoz" <?php if ($banks == 'selxoz')  echo 'checked="checked"';?>>
&nbsp;&nbsp;&nbsp;&nbsp;РайффайзенБанк
 <br>
<?php
    if ($banks == 'open') {echo '<br><input onclick="document.location.href =\'?banks=xoum&sistem=vse&privilegii=vse\'" type="checkbox" name="banks" value="selxoz"'; 
    if ($banks == 'selxoz')  echo 'checked="checked">';
    else {if ($banks == 'open') print '&nbsp;&nbsp;&nbsp;&nbsp;ТинькоффБанк <br>';};}?>
 <br>
 
 <input onclick="submit()" type="checkbox" name="banks" value="vse"<?php if (!isset($banks)) echo 'checked="checked"'; if ($banks == 'vse')  echo 'checked="checked"'; ?>>
&nbsp;&nbsp;&nbsp;&nbsp;Все банки
 <br>
 <br>
&nbsp;<?php if ($banks == 'open') echo '<span style="color:#0000FF; font-size:15px"><a href="?banks=vse#all_banks">--</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Скрыть'; else echo '<span style="color:#0000FF; font-size:15px"><a href="?banks=open#all_banks">+</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Показать все банки'?></form>


 <!--
<script src="http://feeds.feedburner.com/cbr/mCyw?format=sigpro" type="text/javascript" ></script><noscript><p>Подпишитесь на обновления RSS заголовков от: <a href="http://feeds.feedburner.com/cbr/mCyw"></a><br/>Создано FeedBurner</p> </noscript>

<a href="http://feeds.feedburner.com/cbr/mCyw" title="Подписаться на мой фид" rel="alternate" type="application/rss+xml"><img src="https://feedburner.google.com/fb/images/pub/feed-icon32x32.png" alt="" style="border:0"/></a><a href="http://feeds.feedburner.com/cbr/mCyw" title="Подписаться на мой фид" rel="alternate" type="application/rss+xml">Подписаться на новости</a>
-->
</td>
      <td style=" background-image:url(../img/menu_center_right.png); width:26px; background-repeat: repeat-y">&nbsp;</td>
    </tr>
    <tr>
      <td style="background-image:url(../img/menu_bottom_left.png); width:26px; height:26px; background-repeat:no-repeat">&nbsp;</td>
      <td style="background-image:url(../img/menu_center_bottom.png); height:26px; background-repeat:repeat-x">&nbsp;</td>
      <td style="background-image:url(../img/menu_bottom_right.png); width:26px; height:26px; background-repeat:no-repeat">&nbsp;</td>
    </tr>
  </table>
   </hgroup>