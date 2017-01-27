<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("conn.php");

if(isset($_POST['Submit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$mail = mysqli_real_escape_string($mysqli, $_POST['mail']);
    $tag = mysqli_real_escape_string($mysqli, $_POST['tagname']);
    $rang = mysqli_real_escape_string($mysqli, $_POST['range']);

//    // checking empty fields
//	if(empty($username) || empty($password) || empty($mail)) {
//
//		if(empty($name)) {
//			echo "<font color='red'>Name field is empty.</font><br/>";
//		}
//
//		if(empty($age)) {
//			echo "<font color='red'>Age field is empty.</font><br/>";
//		}
//
//		if(empty($email)) {
//			echo "<font color='red'>Email field is empty.</font><br/>";
//		}
		
		//link to the previous page
//		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    // if all the fields are filled (not empty)

    //insert data to database
    $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='control.php'>View Result</a>";
	} else { 


}
?>
</body>
</html>
