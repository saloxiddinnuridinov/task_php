<?php	
	# equuire_once() ichiga file yoziladi. u usha faylni chaqirib beradi.	
require_once("config.php"); 
	# isset o'zgaruvchi bor yuqligini tekshirub beradi.
if (isset($_POST["s"]) && (count($_POST) > 0)) { 
	
	#htmlspecialchars() kelayotgan yozuvda ('`^@) belgilarni xatosiz #ko'rinishiga xizmat qiladi
	$task = htmlspecialchars($_POST["task"], ENT_QUOTES, 'UTF-8');

	$deadline = $_POST["deadline"];

	#sql buyrug'i INSERT INTO ma'lumot qo'shish
    $sql = "INSERT INTO `task_db` (`task`, `deadline`) 
            VALUES ('$task', '$deadline')";
		#query() sql buyrug'ini ishlatadi
   	$result = $connection->query($sql);

   	if(!$result){
		echo $connection->error; 
		die();
   	}
	   #header() boshqa filega o'tkazadi
   	header("Location: view.php");

}
    	
?>