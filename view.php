<?php  	#config.php fileni chaqiradi
require_once("config.php");
    #sql buyrug'i
  //  $sql = "SELECT * FROM `task_db` ORDER BY `deadline` ASC";
    $sql = "SELECT * FROM `task_db`";// WHERE `deadline` >= NOW()";
	#sqlni isshlatadi	
   	$result = $connection->query($sql);
	#xatolik bo'lsa xabar beradi
	if(!$result){
		echo $connection->error; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My task</title>

	<link rel="stylesheet" href="styles/basic.css">
	<link rel="stylesheet" href="styles/form-basic.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
	<header>
		<h1>My tasks for tomorrow!</h1>
    </header>

    <ul>
        <li><a href="index.php">Input</a></li>
        <li><a class="active">Tasks</a></li>
    </ul>
    <div class="main-content">
		<form class="form-basic">

            <div class="form-row-center">
            <div class="container-fluid m-50">
			<div class="wrapper">
		<table class="table">
		<thead class="thead-dark">
	    	<tr>
	        	<th scope="col">ID</th>
	      		<th scope="col">Task</th>
	      		<th scope="col">Deadline</th>
	      		<th scope="col">Action</th>
	    	</tr>
	  	</thead>
<?php
	echo "<hr/>";
    while($row = $result->fetch_assoc())
	{
?>	
			<tr>
				<th scope="row"><?=$row["id"]?> </th>
				<td><?=$row["task"]?></td>
				<td><?=$row["deadline"]?></td>
				<td>
					<a href="edit.php?id=<?=$row["id"]?>" class="btn btn-success">
					<i class="fa fa-edit"></i></a>
					<a href="delete.php?id=<?=$row["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
<?
	}
?>
	  
					</table>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>