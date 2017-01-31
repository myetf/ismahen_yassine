<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../conn.php");
global $mysqli;
if(isset($_POST['Submit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$mail = mysqli_real_escape_string($mysqli, $_POST['mail']);
	$tagname = mysqli_real_escape_string($mysqli, $_POST['tagname']);
    $rang = mysqli_real_escape_string($mysqli, $_POST['rang']);

	// checking empty fields
	if(empty($username) || empty($password) || empty($mail)|| empty($tagname)|| empty($rang)) {

        if(empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }

        if(empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }

        if(empty($mail)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($tagname)) {
            echo "<font color='red'>Tagname field is empty.</font><br/>";
        }

        if(empty($rang)) {
            echo "<font color='red'>Rang field is empty.</font><br/>";
        }


		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			$pass=md5($password);
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO user(username,password,mail,tagname,rang) VALUES('$username','$pass','$mail','$tagname','$rang')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='../../control.php'>View Result</a>";
	}
}
?>
</body>
</html>
