<?php

require_once 'connect.php';

$id = (int)$_GET['id'];

//$set_foreign_key_checks_0 = mysqli_query($link, "set foreign_key_checks = 0");

$sql = mysqli_query($link, "DELETE FROM employee WHERE employee_id = $id");

mysqli_close($link);

?>

<script type='text/javascript'>
    window.location = 'list.php'
</script>
