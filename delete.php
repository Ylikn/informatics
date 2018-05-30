<?php
// delete records
include "connection.php";
$id_workers = $_GET['id_workers'];
$query = "DELETE FROM workers
	WHERE id_workers ='" . $id_workers . "'";
$result = mysqli_query($link, $query);
// redirect
header('location: ./list.php');