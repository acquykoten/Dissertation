<?php
//include("admin/Entity/crud_film.php");
$obj = new episode();
$type = new film_type();
$trailer = new trailer();
if(isset($_REQUEST['insert_film'])){
    $name = trim($_POST['name']);
    //$img = trim($_POST['img']);
    $description =trim($_POST['description']);
   // $author=trim($_POST['author']);
    $year = trim($_POST['year']);
    $country=trim($_POST['country']);
    $stt=trim($_POST['stt']);
    $totalE=trim($_POST['totalE']);
    $length=trim($_POST['lengthM']);
    //$trangthai=trim($_POST['trangthai']);
    $date=getdate();
    $dateUp = $date["year"] . "-" . $date["mon"] . "-" . $date["mday"];
    $savefolder = 'image/film';        // folder for upload
    $max_size = 250;            // maxim size for image file, in KiloBytes
    $allowtype = array('bmp', 'jpg', 'jpeg','png');
    $img = $_FILES['UrlHinh']['name'];
    if($img==null){
        ?>
        <script language="JavaScript">
            window.alert("Please change IMG");
            // location.href="?cache=view&module=add_film";
            window.history.go(-1);
        </script>
    <?php  }
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
    if($name==null || $country==null|| $year==null){
        ?>
        <script language="JavaScript">
            window.alert("The fields not be blank: Name Film, Country, Year, status");
           // location.href="?cache=view&module=add_film";
            window.history.go(-1);
        </script>
        <?php
    }
    if($obj->getByFName($name)!= null){
        ?>
        <script language="JavaScript">
            window.alert("Coincide Film Name!!!");
            window.history.go(-1);
        </script>
        <?php
    }
    elseif($last_id =$obj->insertDataFilm($name,$img,$description,$totalE,$length,$year,$country,$dateUp,$stt))
    {
        if(isset($_POST["film_type"]))
        {
            if($_POST["film_type"]!="")
            {

                foreach($_POST["film_type"] as $idtl)
                {
                    $type->postFilm_Type($last_id,$idtl);
                }
            }
        }
        ?>
        <script language="JavaScript">
            window.alert("Create Success!!!");
            location.href="?cache=view&module=film";
        </script>
        <?php
    }
    else{
        ?>
        <script language="JavaScript">
            window.alert("Create Fail!!!");
            location.href="?cache=view&module=film";
        </script>
        <?php
    }

}
if(isset($_REQUEST['update_film'])) {
    extract($_REQUEST);
    $id_f = trim($_POST['id']);
    $name = trim($_POST['name']);
    //$img = trim($_POST['img']);
    $description =trim($_POST['description']);
   // $author=trim($_POST['author']);
    $year = trim($_POST['year']);
    $country=trim($_POST['country']);
    $stt=trim($_POST['stt']);
    $totalE=trim($_POST['totalE']);
    $length=trim($_POST['lengthM']);
    //$trangthai=trim($_POST['trangthai']);
    $date = getdate();
    $dateUp = $date["year"] . "-" . $date["mon"] . "-" . $date["mday"];

    $savefolder = 'image/film';        // folder for upload
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
    if($obj->updateFilm($id_f,$name,$img,$description,$totalE,$length,$year,$country,$dateUp,$stt)){
        ?>
        <script language="JavaScript">
            window.alert("Update Successfully");
            location.href="?cache=view&module=film";
        </script>
        <?php
    }
    else{
        echo "no ọk";
    }
}
if(isset($_REQUEST['insert_film_type']))
{
    $id_film   = $_POST['id_film'];
    if(isset($_POST["film_type"]))
    {
        if($_POST["film_type"]!="")
        {

            foreach($_POST["film_type"] as $idtl)
            {
                if($type->getByFilm_Type($idtl,$id_film)== null){
                if($type->postFilm_Type($id_film,$idtl)) {
                    ?>
                    <script language="JavaScript">
                        window.alert("Create Successfully");
                        location.href = "?cache=view&module=film_type";
                    </script>
                    <?php
                }
                }
                else{
                    ?>
                    <script language="JavaScript">
                        window.alert("Coincide Type Name");
//                        location.href="?cache=view&module=add_film_type&idF=<?php //cho $id_film ?>";
                        window.history.go(-1);

                    </script>
                    <?php
                    break;
                }
            }

        }
    }
}
if(isset($_REQUEST['update_episode'])) {
    extract($_REQUEST);
    $id_episode =$_REQUEST['id'];
    $url1 =$_REQUEST['url1'];
    $url2 =$_REQUEST['url2'];
    $name = $_REQUEST['name'];
    $date = getdate();
    $dateUp = $date["year"] . "-" . $date["mon"] . "-" . $date["mday"];
    if($obj->updateEpisode($id_episode,$name,$url1,$url2,$dateUp)){
        ?>
        <script language="JavaScript">
            window.alert("Update Successfully");
            location.href="?cache=view&module=episode";
        </script>
        <?php
    }
}
if(isset($_REQUEST['insert_episode']))
{
    $errors = array(
        'error' => 0
    );
    $nameE   = isset($_POST['name']) ? trim($_POST['name']) : '';
    $id_film   = isset($_POST['id_film']) ? trim($_POST['id_film']) : '';
    $url1   = isset($_POST['url1']) ? trim($_POST['url1']) : '';
    $url2   = isset($_POST['url2']) ? trim($_POST['url2']) : '';
    $date = getdate();
    $dateUp = $date["year"] . "-" . $date["mon"] . "-" . $date["mday"];
   /** if (empty($name)){
        $errors['name'] = 'B?n ch?a nh?p t�n t?p phim';
    }
    if (empty($url1)){
        $errors['url1'] = 'B?n ch?a nh?p URL';
    }
    if (count($errors) > 1){
        $errors['error'] = 1;
        die (json_encode($errors));
    }

    if($obj->getByNameE($id_film,$name)!= null){
            $errors['name'] = 'T?p Film ?� T?n T?i!!';
    }
    if (count($errors) > 1){
        $errors['error'] = 1;
        die (json_encode($errors));
    }
    if(!$obj->postEpisode($id_film,$name,$url1,$url2)){
        $errors['error'] = 1;
        $errors["sql"]="L?i !!!";
    }
    die (json_encode($errors));
    */
   // extract($obj->getByIdE($id_film));
    extract($_REQUEST);
    if(empty($name)||$nameE <0) {
        ?>
        <script language="JavaScript">
            window.alert("Please enter a  Episode name");
           // location.href = "?cache=view&module=add_episode";
            window.history.go(-1);

        </script>
        <?php
    }
    elseif($obj->getByNameE($id_film,$nameE)!= null){
        ?>
        <script language="JavaScript">
            window.alert("Coincide Episode Name!!!");
//            location.href = "?cache=view&module=add_episode";
            window.history.go(-1);

        </script>
        <?php

    }
    /*elseif(($name+1)!=$nameE){
        ?>
        <script language="JavaScript">
            window.alert("SOS!!!");
            //            location.href = "?cache=view&module=add_episode";
            window.history.go(-1);

        </script>
        <?php
    }*/
    elseif(empty($url1)){
        ?>
        <script language="JavaScript">
            window.alert("Please enter a  Url!!!");
//            location.href = "?cache=view&module=add_episode";
            window.history.go(-1);

        </script>
    <?php    }
    elseif($obj->postEpisode($id_film,$nameE,$url1,$url2,$dateUp)){
        ?>
        <script language="JavaScript">
            window.alert("Create Success!!!");
            location.href="?cache=view&module=episode";
        </script>       <?php
    }
}
if(isset($_REQUEST['insert_trailer']))
{
    $errors = array(
        'error' => 0
    );
    $id_film   = isset($_POST['id_film']);
    $url1   = isset($_POST['url1']) ? trim($_POST['url1']) : '';
    $url2   = isset($_POST['url2']) ? trim($_POST['url2']) : '';
    extract($_REQUEST);
    if(empty($url1)){
        ?>
        <script language="JavaScript">
            window.alert("Please enter a  Url 1!!!");
//            location.href = "?cache=view&module=add_trailer";
            window.history.go(-1);

        </script>
    <?php    }
    elseif($trailer->insertTrailer($id_film,$url1,$url2)){
        ?>
        <script language="JavaScript">
            window.alert("Create Success!!!");
            location.href="?cache=view&module=trailer";
        </script>       <?php
    }
}
if(isset($_REQUEST['update_trailer'])) {
    extract($_REQUEST);
    $id_trailer =$_REQUEST['id'];
    $url1 =$_REQUEST['url1'];
    $url2 =$_REQUEST['url2'];
    if($trailer->updateTrailer($id_trailer,$url1,$url2)){
        ?>
        <script language="JavaScript">
            window.alert("Update Successfully");
            location.href="?cache=view&module=trailer";
        </script>
        <?php
    }
}