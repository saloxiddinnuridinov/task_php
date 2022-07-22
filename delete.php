<?php  		
		#Bazaga ulandi, connection chaqirildi
	require_once("config.php");

	$id = $_GET["id"];
    #sql buyrug'i
    $sql = "SELECT * FROM `task_db` WHERE `id` = '$id'";

    // SQL kodini ishga tushirish,
    // resultda mysql obyekti qaytadi.
    // U json ham, array ham emas, u mysql obyekti
    $result = $connection->query($sql);

    // Agar SQL kodda xatolik bo'lsa, ekranga chiqar
		if(!$result){
			echo $connection->error; 
		}

		// mysqli_num_row mysql obyektida nechta element borligini aniqlaydi
		// bu count singari arrayda nechta element borligi kabi ishlaydi
	if (mysqli_num_rows($result) >= 1 ) {

		// Bu SQL kodi. Bu shunchaki satr. Buni bir o'zi hech narsa qilmaydi. Kod ishlashi uchun query funksiyasini ishlatish kerak
    	$sql = "DELETE  FROM `task_db` WHERE `id` = '$id'";

    	$result  = $connection->query($sql);
    	if(!$result){
			echo $connection->error; 
			die();
		}else{
		header("Location: view.php");
		}

    }
  	else{
  	header("Location: view.php");
  }

?>