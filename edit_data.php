<?php
// including the database connection file
include_once("conn.php");

if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$categorie = mysqli_real_escape_string($mysqli, $_POST['categorie']);
	$genre = mysqli_real_escape_string($mysqli, $_POST['genre']);
    $description = mysqli_real_escape_string($mysqli, $_POST['description']);
    $prix = mysqli_real_escape_string($mysqli, $_POST['prix']);
    $image = mysqli_real_escape_string($mysqli, $_POST['image']);

	// checking empty fields
	if(empty($nom) || empty($categorie) || empty($genre) || empty($prix) || empty($image)) {
			
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
            echo "<font color='red'>Image field is empty.</font><br/>";
        }
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE article SET nom='$nom',categorie='$categorie',genre='$genre',description='$description',prix='$prix',image='$image' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is control.php
		header("Location: control.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM article WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nom = $res['nom'];
	$categorie = $res['categorie'];
    $genre = $res['genre'];
    $prix = $res['prix'];
    $description = $res['description'];
    $image = $res['image'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="control.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_data.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nom" value="<?php echo $nom;?>" placeholder="<?php echo $nom;?>"></td>
			</tr>
			<tr> 
				<td>Categorie</td>
				<td><input type="text" name="categorie" placeholder="<?php echo $categorie;?>"></td>
			</tr>
			<tr> 
				<td>Genre</td>
				<td><label for="genre">feminin</label><input type="radio" name="genre" value="feminin"></td>
                <td><label for="genre">male</label><input type="radio" name="genre" value="male"></td>
			</tr>
            <tr>
                <td>Prix</td>
                <td><input type="number" name="prix" value="<?php echo $prix;?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea type="" name="description" value="<?php echo $description;?>">description</textarea></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="image" value="<?php echo $image;?>"></td>
            </tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update">Update</td></td>
			</tr>
		</table>
	</form>
</body>
</html>
