<?php
//including the database connection file
include("../conn.php");

//getting id of the data from url
$id = $_GET['id'];
global $mysqli;
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:../../control.php");
?>

