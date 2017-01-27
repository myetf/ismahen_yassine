<?php
// including the database connection file
include_once("conn.php");

if(isset($_POST['update']))
{	

//	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$mail = mysqli_real_escape_string($mysqli, $_POST['mail']);$age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $tagname = mysqli_real_escape_string($mysqli, $_POST['tagname']);
    $rang = mysqli_real_escape_string($mysqli, $_POST['rang']);

    // checking empty fields
//	if(empty($name) || empty($age) || empty($email)) {
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
//	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: control.php");
//	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nom = $res['nom'];
	$age = $res['age'];
	$mail = $res['mail'];
	$tagname = $res['tagname'];
    $rang = $res['rang'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="control.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_user.php">
		<table border="0">
			<tr> 
				<td>Nom</td>
				<td><input type="text" name="username" placeholder="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" placeholder="<?php echo $password;?>"></td>
			</tr>
			<tr> 
				<td>Mail</td>
				<td><input type="text" name="mail" placeholder="<?php echo $mail;?>"></td>
			</tr>
            <tr>
                <td>Tagname</td>
                <td><input type="text" name="mail" placeholder="<?php echo $tagname;?>"></td>
            </tr>
            <tr>
                <td>Rang</td>
                <td><input type="number" name="rang" placeholder="<?php echo $rang;?>"></td>
            </tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
