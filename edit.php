<?php  		
// Bazaga ulandi, connection chaqirildi
	require_once("config.php");

	$edit_id = $_GET["id"];
	$task = $_GET["task"];
    $deadline = $_GET["deadline"];
    
    $sql = "SELECT * FROM `task_db` WHERE `id` = '$edit_id'";

    // SQL kodini ishga tushirish,
    // resultda mysql obyekti qaytadi.
    // U json ham, array ham emas, u mysql obyekti
    $result = $connection->query($sql);

    // Agar SQL kodda xatolik bo'lsa, ekranga chiqar
		if(!$result){
			echo $connection->error; 
			die();
		}

		// mysqli_num_row mysql obyektida nechta element borligini aniqlaydi
		// bu count singari arrayda nechta element borligi kabi ishlaydi
	if (mysqli_num_rows($result) == 0 ) {
		header("Location: view.php");
	}
?>
<!DOCTYPE html> 
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My task edit</title>

	<link rel="stylesheet" href="styles/basic.css">
	<link rel="stylesheet" href="styles/form-basic.css">

</head>


	<header>
		<h1>My tasks edit!</h1>
    </header>

    <ul>
        <li><a class="active" >Edit</a></li>
        <li><a href="index.php">Input</a></li>
        <li><a href="view.php">Tasks</a></li>
    </ul>


    <div class="main-content">

        <div class="form-basic">
<?php
		// iterable 
		$row = $result->fetch_assoc();
			$i = $row["id"];
			$t = $row["task"];
			$d = $row["deadline"];
			
?>
	<form action="" method="post">
			<input type="number" readonly name="id" value="<?=$i?>"><br>
			<textarea name="task_name" ><?=$t;?></textarea><br>
			<input name="task_date" type="date" value="<?=$d?>"><br>
			<input type="submit" value="ok" name="s">
	</form>
</div>
<?php
		
$sub = $_POST["s"];
$task_name = $_POST["task_name"];
$task_date = $_POST["task_date"]; 
$id = $_GET["id"]; 
 if (isset($sub)) {		
	$sql ="UPDATE `task_db` SET `task` = '$task_name', `deadline` = '$task_date' WHERE `task_db`.`id` = '$id';";
	//$sql ="INSERT INTO `task_db` (`task`, `deadline`) VALUES ('$t1', '$d1')";
	$result = $connection->query($sql);
	if (!$result) {
		echo $connection->error;
		die();
	}else{
		header("Location: view.php");
	}
}
?> 
</div>
</body>
</html>