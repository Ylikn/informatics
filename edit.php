<?php
// edit records
include "connection.php";
$id = $_GET['id_workers'];
$fio = $_GET['input_1'];
$plane_number = $_GET['input_2'];
$query = "SELECT workers.fio, plane.plane_number, plane_type.speed
FROM (plane_type INNER JOIN (crew INNER JOIN plane ON crew.id_crew = plane.id_crew) ON plane_type.model_number = plane.model_number)
INNER JOIN workers ON crew.id_crew = workers.id_crew
WHERE plane_type.speed > 950 AND workers.fio LIKE '%" . $fio . "%' 
		         AND plane.plane_number LIKE '%" . $plane_number . "%'";
	
$result = mysqli_query($link, $query);
 
// script for update
if(isset($_GET['button']))
{
	$input_1 = $_GET['input_1'];
	$input_2 = $_GET['input_2'];
	$id_workers = $id;
	$query = "UPDATE workers
		SET name ='" . $input_1 . "'
		WHERE id_workers =' " . $id_workers . " '; ";
			
	$result = mysqli_query($link, $query);
			
	$query = "UPDATE kaf
		SET plane_number ='" . $input_2 . "';";
			
	$result = mysqli_query($link, $query);
	// redirect
	header('location: ./list.php'); 
}
?>

<html>
<body>
	<div  align = center>
	<form action = 'edit.php' method = 'get'>
	<table>
	<tr><th><i>Редактировать значения:</i></th></tr>
	<tr hidden><td>ID сотрудника: <input name = 'id_workers' type = 'text' value='<?php echo $id; ?>'></td></tr>
	<tr><td>ФИО сотрудника: <input name = 'input_1' type = 'text' value='<?=@$_GET['input_1']?>'></td></tr>
	<tr><td>Номер самолета: <input name = 'input_2' type = 'text' value='<?=@$_GET['input_2']?>'></td></tr>
	</table>
	<br/>
	<input type = 'submit' name = 'button'>
	</form>
	</div> 
</body>
</html>
