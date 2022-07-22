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
		<h1>My tasks!</h1>
    </header>

    <ul>
        <li><a class="active" >Input</a></li>
        <li><a href="view.php">Tasks</a></li>
    </ul>


    <div class="main-content">

        <form class="form-basic" method="post" action="request.php">

            <div class="form-title-row">
                <h1>TASKS</h1>
              
            </div>
            <div class="form-row">
                <label>
                    <span>Theme</span>  
                    <textarea name="task"></textarea>
                </label>
            </div> 
            <div class="form-row">
                <label>
                    <span>Deadline</span>
                    <input type="date" name="deadline">
                </label>
            </div>                
            <div class="form-row">
                <label>
                    <span>Storage</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>
            <div id="bottom">
                <button  type="submit" name="s">OK</button>
            </div>

        </form>

    </div>

</body>

</html>
