<?php
$error=" ";
$db=mysqli_connect('localhost','root','todo');
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$deadline=$_POST['deadline'];
	if(empty($title))
	{
		$error="You must fill the title";
	}
	else
	{
	mysqli_query($db,"INSERT INTO task(title,deadline) VALUES('$title','$deadline')");
	header('location:index.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>Add Todo</h2>
	</div>
	<form method="POST" action="todo.php">
		<?php 
		if(isset($errors)){
			 echo $errors; 
			}
		?>
		<input type="text" name="title" class="task-input" placeholder="Title">
		<input type="datetime-local" name="deadline" class="task-input" placeholder="Deadline" ><br>
		<button type="submit" class="task_btn" name="submit" value="submit">SUBMIT</button>
		<button type="reset" class="task_btn" name="clear" value="reset">CLEAR</button>
		 
	</form>


</body>
</html>