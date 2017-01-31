<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 1/29/2017
 * Time: 11:36 AM
 */

?>
<html>
<head>
    <title>Add Data</title>
</head>

<body>
<a href="control.php">Home</a>
<br/><br/>

<form action="add_data.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td><label for="name">Nom</label></td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td><label for="categorie">Categorie</label></td>
            <td><input type="text" name="categorie"></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td><INPUT type="radio" name="genre" value="male"> Homme<BR>
                <INPUT type="radio" name="genre" value="feminin"> Femme<BR></td>
        </tr>
        <tr>
            <td><label for="prix">Prix</label></td>
            <td><input type="text" name="prix"></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea type="text" name="description"></textarea></td>
        </tr>
        <tr>
            <td><label for="image">Source Image</label></td>
            <td><input type="text" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add_data"></td>
        </tr>
    </table>
</form>
</body>
</html>


