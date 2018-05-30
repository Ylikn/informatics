<?php

include 'connection.php';

$query =  "SELECT workers.fio, plane.plane_number, plane_type.speed
FROM (plane_type INNER JOIN (crew INNER JOIN plane ON crew.id_crew = plane.id_crew) ON plane_type.model_number = plane.model_number)
INNER JOIN workers ON crew.id_crew = workers.id_crew
WHERE plane_type.speed > 950";

$result = mysqli_query($link, $query);
echo "<table border = 1 align=center>";
echo "<tr><td>ФИО сотрудника</td>";
echo "<td>Номер самолета</td>";
echo "<td colspan = 2>Редактировать</td></tr>";
while($row = mysqli_fetch_array($result)) {
	echo "<tr><td>" . $row['fio']. "</td>";
	echo "<td>" . $row['plane_number'] . "</td>";
	echo "<td><a href = './edit.php?id_workers=" . $row['id_workers'] . "&input_1=" . $row['fio'] . "&input_2=" . $row['plane_number'] . "'>Update</a></td>";
	echo "<td><a href = './delete.php?id_workers=". $row['id_workers'] . "'>Delete</a></td></tr>";
}
echo "</table>";
mysqli_close($link);
?>

