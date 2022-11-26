<header class="fixed_top">
<table style="width:99%; margin-left:8px; border:0px; border-collapse:collapse;
border-spacing:0px">
  <tr>
   <td style="width:20px; height:70px; background-image:url(../img/top_left.png); background-repeat:no-repeat"></td>
    <td style="background-image:url(../img/top_repiat.png); background-repeat:repeat-x; vertical-align:inherit text-bottom"><img src="../img/logo.png" style="width:156px; height:53px; margin-top:0px; margin-left:-11px" />
<!--
    <nav style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px; margin-left:30%; margin-top:-30px"></nav>
              <select name="select" onchange="window.location.href=this.options[selectedIndex].value">
        <option selected>Хабаровск</option>
        <option value="https://roza-vetrov.pro/">Вяземский</option>
              </select>
      &nbsp;&nbsp;<img style="width:29px; height:29px; position:fixed; top:12px; right:150px" src="img/GPS.png" alt="Ваш регион" width="29" height="29" align="top" />
 -->
       <?php /*    
  $date = date("d/m/Y"); // Сегодняшняя дата в необходимом формате
  echo "<span class='valuta'> <img src='../img/line.png' style='width:20px; height:16px;vertical-align:bottom '/>&nbsp;&nbsp;Курс валюты на ".$date.":&nbsp;&nbsp;";
  $link = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=$date"; // Ссылка на XML-файл с курсами валют
  $content = file_get_contents($link); // Скачиваем содержимое страницы
  $dom = new domDocument("1.0", "cp1251"); // Создаём DOM
  $dom->loadXML($content); // Загружаем в DOM XML-документ
  $root = $dom->documentElement; // Берём корневой элемент
  $childs = $root->childNodes; // Получаем список дочерних элементов
  $data = array(); // Набор данных
  for ($i = 0; $i < $childs->length; $i++) {
    $childs_new = $childs->item($i)->childNodes; // Берём дочерние узлы
    for ($j = 0; $j < $childs_new->length; $j++) {
      // Ищем интересующие нас валюты 
      $el = $childs_new->item($j);
      $code = $el->nodeValue;
      if (($code == "USD") || ($code == "EUR")) $data[] = $childs_new; // Добавляем необходимые валюты в массив
    }
  }
  // Перебор массива с данными о валютах 
  for ($i = 0; $i < count($data); $i++) {
    $list = $data[$i];
    for ($j = 0; $j < $list->length; $j++) {
      $el = $list->item($j);
      //Выводим курсы валют 
	  
      if ($el->nodeName == "Name") echo $el->nodeValue." - ";
      elseif ($el->nodeName == "Value") echo $el->nodeValue." &#8381;&nbsp;&nbsp;&nbsp;";
    }
  } */ 
?> 
</span>
<br>
<br>
      </td>
    <td style="width:23px; height:74px; background-image:url(../img/top_right.png); background-repeat:no-repeat; "></td>
  </tr>
 </table>
</header>