<?php
$db=mysqli_connect('localhost','root','todo');
$title=mysqli_query($db,"SELECT  title FROM task");
$deadline=mysqli_query($db,"SELECT  deadline FROM task");

if(isset($_GET['del_title'])){
	$title=$_GET['del_title'];
	mysqli_query($connect,"DELETE FROM tasks WHERE title=$title");
header('location:todo.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TO-DO APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>Todo's</h2>
	</div>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Deadline</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			<?php
			while($row=mysqli_fetch_array($task)){

			}
			?>
			<tr>
				<td><?php echo $row['title'];?></td>
				<td class="task"><?php echo $row['deadline'];?></td>
				<td class="delete"> <a href="index.php?del_title=<?php echo $row['title'];?>"></a></td>
			</tr>
	
		</tbody>
	</table>


</body>
</html>