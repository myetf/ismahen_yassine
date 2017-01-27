<?php
require_once 'defines.php';
$page_title = 'Control'; ?>
<?php
require_once('conn.php');
require_once('check_connect.php');
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';
//upload
//$filetoupload='';
//if(array_key_exists("fileToUpload",$_POST))
//{
//    $filetoupload=$_POST['fileToUpload'];
//}
//$target_dir = "images/";
//$target_file = $target_dir . basename($_FILES[$filetoupload]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//if (isset($_POST["submit"])) {
//    $check = getimagesize($_FILES[$filetoupload]["tmp_name"]);
//    if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
//// Allow certain file formats
//if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//    && $imageFileType != "gif"
//) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//}
//// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES[$filetoupload]["tmp_name"], $target_file)) {
//        echo "The file " . basename($_FILES[$filetoupload]["name"]) . " has been uploaded.";
//    } else {
//        echo "Sorry, there was an error uploading your file.";
//    }
//}
/////////////////////////////////





////////////////////////////////////////////////

//you get the following information for each file:
//$_FILES['field_name']['name']
//$_FILES['field_name']['size']
//$_FILES['field_name']['type']
//$_FILES['field_name']['tmp_name']

$result1 = mysqli_query($mysqli, "SELECT * FROM article ORDER BY id DESC");
$result2 = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
$users = get_user_list();
$articles = get_articles_list();

?>
<main>

    <!--    <h2>Ceci est le main de la page catalogue</h2>-->
    <!--    <ul>-->
    <!--        <li><a href="?categorie=Pull">Pull</a></li>-->
    <!--        <li><a href="?categorie=Veste">Veste</a></li>-->
    <!--        <li><a href="?categorie=Tshirt">Tshirt</a></li>-->
    <!--        <li><a href="?categorie=Jean">Jean</a></li>-->
    <!--    </ul>-->
    <div class="container">
        <section class="main row">

            <form action="control.php" method="post" enctype="multipart/form-data">
                Your Photo: <input type="file" name="photo" size="25" />
                <input type="submit" name="submit" value="Submit" />
            </form>


            <a href="add_data.html">Add New Data</a><br/><br/>

            <table width='80%' border=0>

                <tr bgcolor='#CCCCCC'>
                    <td>Nom</td>
                    <td>Categorie</td>
                    <td>Genre</td>
                    <td>Prix</td>
                    <td>Description</td>
                    <td>Image</td>
                </tr>
                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while ($res = mysqli_fetch_array($result1)) {
                    echo "<tr>";
                    echo "<td>" . $res['nom'] . "</td>";
                    echo "<td>" . $res['categorie'] . "</td>";
                    echo "<td>" . $res['genre'] . "</td>";
                    echo "<td>" . $res['prix'] . "</td>";
                    echo "<td>" . $res['description'] . "</td>";
                    echo "<td>" . $res['image'] . "</td>";
                    echo "<td><a href=\"edit_data.php?id=$res[id]\">Edit</a> | <a href=\"delete_data.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
                ?>
            </table>
            <div></div>
            <a href="add_user.html">Add New User</a><br/><br/>

            <table width='80%' border=0>

                <tr bgcolor='#CCCCCC'>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Mail</td>
                    <td>Tagname</td>
                    <td>Rang</td>
                </tr>
                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result2)) {
                    echo "<tr>";
                    echo "<td>".$res['username']."</td>";
                    echo "<td>".$res['password']."</td>";
                    echo "<td>".$res['mail']."</td>";
                    echo "<td>".$res['tagname']."</td>";
                    echo "<td>".$res['rang']."</td>";
                    echo "<td><a href=\"edit_user.php?id=$res[id]\">Edit</a> | <a href=\"delete_user.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
                ?>
            </table>
        </section>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</