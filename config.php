<?php
// O'zgarmaslar e'lon qilindi
define('DB_NAME', 'task');
define('DB_USER', 'root');
define('DB_PASS', '');

// global o'zgaruvchi e'lon qilindi
global $connection; 

// Bazaga ulandi
$connection = new mysqli('localhost', DB_USER, DB_PASS, DB_NAME);

// Bazaga ulanish xatoligi tekshirildi
if($connection->connect_error){
	echo "Serverda xatolik";
	die(); //dasturni shu yerda to'xtatadi
}



?>


