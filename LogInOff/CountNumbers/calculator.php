<?session_start(['cookie_lifetime' => 86400, ]);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<h1>Калькулятор</h1>
<title>Калькулятор</title>
Для ввода дроби используйте разделитель точка. Например, 6.4<br><br>
 <?php 
 if (isset($_SESSION['result']))
 {
    echo "Результат: {$_SESSION['result']} <br><br>";
    unset($_SESSION['result']);
 }?>
  <form action="calculating.php" method="post">
      <input name="number1" autofocus pattern="([\-])?+[0-9]+([\.][0-9]+)?" autocomplete="off" required>
   <select size="1" name="operation">
    <option disabled>Выберите операцию</option>
    <option value="plus">Плюс</option>
    <option value="minus">Минус</option>
    <option value="multiplication">Умножить</option>
    <option value="division">Разделить</option>
   </select>
   <input name="number2" pattern="([\-])?+[0-9]+([\.][0-9]+)?" autocomplete="off" required>
   <br><br><input style="font-size:22px;" type="submit" value="Посчитать">
  </form>
