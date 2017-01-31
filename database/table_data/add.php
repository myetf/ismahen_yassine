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
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$categorie = mysqli_real_escape_string($mysqli, $_POST['categorie']);
	$genre = mysqli_real_escape_string($mysqli, $_POST['genre']);
	$prix = mysqli_real_escape_string($mysqli, $_POST['prix']);
    $description = mysqli_real_escape_string($mysqli, $_POST['description']);
    $image = mysqli_real_escape_string($mysqli, $_POST['image']);
	// checking empty fields
	if(empty($nom) || empty($categorie) || empty($genre)|| empty($prix)|| empty($description)|| empty($image)) {

        if(empty($nom)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($categorie)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }

        if(empty($genre)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($prix)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($description)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }

        if(empty($image)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO article(nom,categorie,genre,prix,description,image) VALUES('$nom','$categorie','$genre','$prix','$description','$image')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='../../control.php'>View Result</a>";
	}
}
?>
</body>
</html>
