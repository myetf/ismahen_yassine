<?php
$page_title = 'Control';
require_once ('check_connect.php');
require_once ('database/conn.php');
require_once ('defines.php');
require_once ('views/page_head.php');
require_once ('views/header.php');
require_once ('views/aside.php');

$result = mysqli_query($mysqli, "SELECT * FROM article ORDER BY id DESC");

ajout();
$users = get_user_list();
$articles = get_articles_list();

?>
<?php if ((is_logged_in())&&(array_key_exists('rang', $_SESSION))&&($_SESSION['rang']==0)){?>
<main>


    <div class="container">
        <section class="main row">

            <form action="_upload.php" method="post" enctype="multipart/form-data">
                Your Photo: <input type="file" name="image_files" size="25" />
                <input type="submit" value="submit" name="upload_Submit" />
            </form>


            <a href="database/table_data/add.html">Add New Data</a><br/><br/>

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
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['nom']."</td>";
                    echo "<td>".$res['categorie']."</td>";
                    echo "<td>".$res['genre']."</td>";
                    echo "<td>".$res['prix']."</td>";
                    echo "<td>".$res['description']."</td>";
                    echo "<td>".$res['image']."</td>";
                    echo "<td><a href=\"database/table_data/delete_user.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
                ?>
            </table>
            <a href="database/table_user/add.html">Add New User</a><br/><br/>

            <table width='80%' border=0>

                <tr bgcolor='#CCCCCC'>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Mail</td>
                    <td>Tagname</td>
                    <td>Rang</td>
                </tr>

                <?php foreach($users as $user ){ ?>
                    <tr>
                    <td><?=$user['username']?></td>
                    <td><?=$user['password']?></td>
                    <td><?=$user['mail']?></td>
                    <td><?=$user['tagname']?></td>
                    <td><?=$user['rang']?></td>
                    <td><a href="database/table_user/delete_user.php?id=<?=$user['id']?>" >Delete</a></td>
                    </tr>
                        <?php } ?>
            </table>
        </section>
    </div>
</main><?php }?>
<?php
require_once 'views/footer.php';
?>
</body>
</html>