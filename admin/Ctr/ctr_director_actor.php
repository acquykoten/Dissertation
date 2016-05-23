<?php
//include("admin/Entity/crud_film.php");
$ojb = new director();
$ojb1= new actor();
$film_director = new film_director();
$film_actor = new film_actor();

if(isset($_REQUEST['insert_director']))
{
$name   = isset($_POST['d_name']) ? trim($_POST['d_name']) : '';
    $savefolder = 'image/actor';        // folder for upload
    $max_size = 250;            // maxim size for image file, in KiloBytes
    $allowtype = array('bmp', 'jpg', 'jpeg','png');
    $img = $_FILES['UrlHinh']['name'];
    if($img==null){
        $img = 'full-sex.jpg';
    }
    else
    {
        $type = end(explode(".", strtolower($_FILES['UrlHinh']['name'])));
        if (in_array($type, $allowtype)) {
            if ($_FILES['UrlHinh']['size'] <= $max_size * 10000) {
                if ($_FILES['UrlHinh']['error'] == 0) {
                    $thefile = $savefolder . "/" . $_FILES['UrlHinh']['name']; //. $_FILES['myfile']['name'];
                    if (!move_uploaded_file($_FILES['UrlHinh']['tmp_name'], $thefile)) {
                        //$result = 'Upload ko thanh cong';
                        ?>
                        <script language="JavaScript">
                            window.alert("Upload Img Fail!!!");
                            window.history.go(-1);
                        </script>
                        <?php
                    } else {
                        $img = $_FILES['UrlHinh']['name'];
                    }
                }
            } else {
                ?>
                <script language="JavaScript">
                    window.alert("Dung l??ng quá l?n!!!");
                    window.history.go(-1);
                </script>
                <?php
            }
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Sai dinh dang anh!!!");
                window.history.go(-1);
            </script>
            <?php
        }
    }
if(!empty($name)) {
    if ($ojb->insertDirector($name, $img)) {
        ?>
        <script language="JavaScript">
            window.alert("Create Success!!!");
            location.href = "?cache=view&module=director";
        </script>       <?php
    }
}
    else{
?>
<script language="JavaScript">
    window.alert("Please enter a director name!!!");
    //            location.href = "?cache=view&module=add_trailer";
    window.history.go(-1);

</script>
<?php
    }
}
if(isset($_REQUEST['update_director'])){
    $id= $_POST['id'];
    $name =  isset($_POST['d_name'])?trim($_POST['d_name']):'';
    $savefolder = 'image/actor';        // folder for upload
    $max_size = 250;            // maxim size for image file, in KiloBytes
    $allowtype = array('bmp', 'jpg', 'jpeg','png');
    $img = $_FILES['UrlHinh']['name'];
    if($img==null){
        $img = $_REQUEST['old_img'];
    }
    else
    {
        $type = end(explode(".", strtolower($_FILES['UrlHinh']['name'])));
        if (in_array($type, $allowtype)) {
            if ($_FILES['UrlHinh']['size'] <= $max_size * 10000) {
                if ($_FILES['UrlHinh']['error'] == 0) {
                    $thefile = $savefolder . "/" . $_FILES['UrlHinh']['name']; //. $_FILES['myfile']['name'];
                    if (!move_uploaded_file($_FILES['UrlHinh']['tmp_name'], $thefile)) {
                        //$result = 'Upload ko thanh cong';
                        ?>
                        <script language="JavaScript">
                            window.alert("Upload Img Fail!!!");
                            window.history.go(-1);
                        </script>
                        <?php
                    } else {
                        $img = $_FILES['UrlHinh']['name'];
                    }
                }
            } else {
                ?>
                <script language="JavaScript">
                    window.alert("Dung l??ng quá l?n!!!");
                    window.history.go(-1);
                </script>
                <?php
            }
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Sai dinh dang anh!!!");
                window.history.go(-1);
            </script>
            <?php
        }
    }
    if(empty($name)){
        ?>
        <script language="JavaScript">
            window.alert("Please enter a director name!!!");
            //            location.href = "?cache=view&module=add_trailer";
            window.history.go(-1);

        </script>
    <?php    }
    elseif($ojb->updateDirector($id,$name,$img)){
        ?>
        <script language="JavaScript">
            window.alert("Update Success!!!");
            location.href="?cache=view&module=director";
        </script>       <?php
    }
}
if(isset($_POST['insert_actor'])) {
    $name = isset($_POST['a_name']) ? trim($_POST['a_name']) : '';
    $sex = $_POST['sex'];
    $savefolder = 'image/actor';        // folder for upload
    $max_size = 250;            // maxim size for image file, in KiloBytes
    $allowtype = array('bmp', 'jpg', 'jpeg','png');
    $img = $_FILES['UrlHinh']['name'];
    if($img==null){
            $img = 'full-sex.jpg';
    }
    else
    {
        $type = end(explode(".", strtolower($_FILES['UrlHinh']['name'])));
        if (in_array($type, $allowtype)) {
            if ($_FILES['UrlHinh']['size'] <= $max_size * 10000) {
                if ($_FILES['UrlHinh']['error'] == 0) {
                    $thefile = $savefolder . "/" . $_FILES['UrlHinh']['name']; //. $_FILES['myfile']['name'];
                    if (!move_uploaded_file($_FILES['UrlHinh']['tmp_name'], $thefile)) {
                        //$result = 'Upload ko thanh cong';
                        ?>
                        <script language="JavaScript">
                            window.alert("Upload Img Fail!!!");
                            window.history.go(-1);
                        </script>
                        <?php
                    } else {
                        $img = $_FILES['UrlHinh']['name'];
                    }
                }
            } else {
                ?>
                <script language="JavaScript">
                    window.alert("Dung l??ng quá l?n!!!");
                    window.history.go(-1);
                </script>
                <?php
            }
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Sai dinh dang anh!!!");
                window.history.go(-1);
            </script>
            <?php
        }
    }
    if(!empty($name)) {
        if($ojb1->insertActor($name, $img, $sex)) {
            ?>
            <script language="JavaScript">
                window.alert("Create Success!!!");
                location.href = "?cache=view&module=actor";
            </script>       <?php
        }
        else{
            ?>
            <script language="JavaScript">
                window.alert("Create Fail!!!");
                window.history.go(-1);
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script language="JavaScript">
            window.alert("Please enter a actor name!!!");
            window.history.go(-1);
        </script>
        <?php
    }
}
if(isset($_REQUEST['update_actor'])){
    $id= $_POST['id'];
    $name =  isset($_POST['a_name'])?trim($_POST['a_name']):'';
    //$img = isset($_POST['img'])?trim($_POST['img']):'';
    $sex = $_POST['sex'];
    $savefolder = 'image/actor';        // folder for upload
    $max_size = 250;            // maxim size for image file, in KiloBytes
    $allowtype = array('bmp', 'jpg', 'jpeg','png');
    $img = $_FILES['UrlHinh']['name'];
    if($img==null){
        $img = $_REQUEST['old_img'];
    }
    else
    {
        $type = end(explode(".", strtolower($_FILES['UrlHinh']['name'])));
        if (in_array($type, $allowtype)) {
            if ($_FILES['UrlHinh']['size'] <= $max_size * 10000) {
                if ($_FILES['UrlHinh']['error'] == 0) {
                    $thefile = $savefolder . "/" . $_FILES['UrlHinh']['name']; //. $_FILES['myfile']['name'];
                    if (!move_uploaded_file($_FILES['UrlHinh']['tmp_name'], $thefile)) {
                        //$result = 'Upload ko thanh cong';
                        ?>
                        <script language="JavaScript">
                            window.alert("Upload Img Fail!!!");
                            window.history.go(-1);
                        </script>
                        <?php
                    } else {
                        $img = $_FILES['UrlHinh']['name'];
                    }
                }
            } else {
                ?>
                <script language="JavaScript">
                    window.alert("Dung l??ng quá l?n!!!");
                    window.history.go(-1);
                </script>
                <?php
            }
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Sai dinh dang anh!!!");
                window.history.go(-1);
            </script>
            <?php
        }
    }
    if(empty($name)){
        ?>
        <script language="JavaScript">
            window.alert("Please enter a actor name!!!");
            //            location.href = "?cache=view&module=add_trailer";
            window.history.go(-1);

        </script>
    <?php    }
    elseif($ojb1->updateActor($id,$name,$img,$sex)){
        ?>
        <script language="JavaScript">
            window.alert("Update Success!!!");
            location.href="?cache=view&module=actor";
        </script>       <?php
    }
}
// insert film actor
if(isset($_REQUEST['insert_film_ac'])){
    $idF = $_POST['id_film'];
    $idA= $_POST['id_actor'];
    if($film_actor->getById_F_A($idF,$idA)==null){
        if ($film_actor->insertFilm_Actor($idF, $idA)){
            ?>
            <script language="JavaScript">
                window.alert("Insert Success!!!");
                location.href = "?cache=view&module=film_actor";
            </script>
            <?php
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Insert Fail!!!");
                location.href = "?cache=view&module=film_actor";
            </script>       <?php
        }
    }
    else{
        //extract($film_actor->getById_F_A($idF,$idA))
        //echo $id_film.$id_actor;
        ?>
        <script language="JavaScript">
            window.alert("Coincidence Values!!!");
            location.href = "?cache=view&module=film_actor";
        </script>
        <?php
    }
}
if(isset($_REQUEST['update_film_ac'])){
    $idF = $_POST['id_film'];
    $idA= $_POST['id_actor'];
    if($film_actor->getById_F_A($idF,$idA)== null){
        if ($film_actor->updateFilm_Actor($idF, $idA)){
            ?>
            <script language="JavaScript">
                window.alert("Update Success!!!");
                location.href = "?cache=view&module=film_actor";
            </script>
            <?php
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Update Fail!!!");
                location.href = "?cache=view&module=film_actor";
            </script>       <?php
        }
    }
    else{
        ?>
        <script language="JavaScript">
            window.alert("Coincidence Values!!!");
            location.href = "?cache=view&module=film_actor";
        </script>
        <?php
    }
}
//insert film director
if(isset($_REQUEST['insert_film_d'])){
    $idF = $_POST['id_film'];
    $idD= $_POST['id_director'];
    if($film_director->getById_F_D($idF,$idD)== null){
        if ($film_director->insertFilm_Director($idF, $idD)) {
            ?>
            <script language="JavaScript">
                window.alert("Insert Success!!!");
                location.href = "?cache=view&module=film_director";
            </script>
            <?php
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Insert Fail!!!");
                location.href = "?cache=view&module=film_director";
            </script>       <?php
        }
    }
    else{
        ?>
        <script language="JavaScript">
            window.alert("Coincidence Values!!!");
            location.href = "?cache=view&module=film_director";
        </script>
        <?php
    }
}
if(isset($_REQUEST['update_film_d'])){
    $idF = $_POST['id_film'];
    $idD= $_POST['id_director'];
    if(extract($film_director->getById_F_D($idF,$idD))== null){
        if ($film_director->updateFilm_Director($idF, $idD)){
            ?>
            <script language="JavaScript">
                window.alert("Update Success!!!");
                location.href = "?cache=view&module=film_director";
            </script>
            <?php
        } else {
            ?>
            <script language="JavaScript">
                window.alert("Update Fail!!!");
                location.href = "?cache=view&module=film_director";
            </script>       <?php
        }
    }
    else{
        ?>
        <script language="JavaScript">
            window.alert("Coincidence Values!!!");
            location.href = "?cache=view&module=film_director";
        </script>
        <?php
    }

}