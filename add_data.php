<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("conn.php");

if(isset($_POST['Submit'])) {	
	$nom =$_POST['nom'];
	$categorie = $_POST['categorie'];
	$genre = $_POST['genre'];
    $prix =  $_POST['prix'];
    $description = $_POST['description'];
    $image = $_POST['image'];
		
	// checking empty fields
	if(empty($nom) || empty($acategorie) || empty($prix) || empty($genre) || empty($image)) {
				
		if(empty($nom)) {
			echo "<font color='red'>Nom field is empty.</font><br/>";
		}
		
		if(empty($categorie)) {
			echo "<font color='red'>Categorie field is empty.</font><br/>";
		}
		
		if(empty($genre)) {
			echo "<font color='red'>Genre field is empty.</font><br/>";
		}
        if(empty($prix)) {
            echo "<font color='red'>Prix field is empty.</font><br/>";
        }
        if(empty($image)) {
            echo "<font color='red'>Source Image field is empty.</font><br/>";
        }
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO article(nom,categorie,genre,prix,description,image) VALUES('$nom','$categorie','$genre','$prix','$description','$image')");
		
		//display success message
		echo "<a href='control.php'>Data added successfully.</a>";
		echo "<br/><a href='control.php'>View Result</a>";
	}
}
?>
</body>
</html>
