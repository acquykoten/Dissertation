<?php
//include("Ctr/footer.php");
//include("Entity/crud_user.php");
//include_once("Entity/crud_film.php");
$obj=new footer();
$user= new crud_user();
$film = new crud_film();
?>
<script language="javascript">
    function load_ajax(id)
    {
        $.ajax({
            url : "Ctr/ctr_cmt.php", // g?i ajax ??n file result.php
            type : "get", // ch?n ph??ng th?c g?i là get
            dateType:"text", // d? li?u tr? v? d?ng text
            data : {
                id : id
            },
            success : function (result){
                $('#'+id).html(result);
            }
        });
    }
    function delete_ajax(id)
    {
        $.ajax({
            url : "Ctr/delete_cmt.php", // g?i ajax ??n file result.php
            type : "get", // ch?n ph??ng th?c g?i là get
            dateType:"text", // d? li?u tr? v? d?ng text
            data : {
                id : id
            },
            success : function (result){
                $('#'+id).html(result);
            }
        });
    }
</script>
<div align="center" class="table-responsive"><h3>All New Data</h3>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>Id</th>
            <th>User Name</th>
            <th>Film Name</th>
            <th>Date Time</th>
            <th>Content</th>
                <th>State</th>
        </tr>
        </thead>
        <?php
        //if(isset($_REQUEST['del_id']))
        // { if($obj->deleteData($_REQUEST['del_id'],"user"))
        //{  echo"Your Data Successfully Deleted";
        // }
        // }
        $records_per_page=10;
        $query=$obj->pagingCmt(2,$records_per_page);
        if($obj->showData($query)!="") {
            foreach ($obj->showData($query) as $value) {
                $idCmt = $value["id_cmt"];
                $idf=$value['id_film'];
                ?>
                <tr>
                    <td><?php echo $value["id_cmt"] ?></td>
                    <td><?php extract($user->getById($value["id_user"])); echo $username ?></td>
                    <td><?php extract($film->getByIdF($idf)); echo $film_name ?></td>
                    <td><?php echo $value["datetime"] ?></td>
                    <td><?php echo $value["content"] ?></td>
                    <td><div id="<?php echo $idCmt ?>">
                        <input type="button" class="btn" onclick="load_ajax(<?php echo $idCmt ?>)" value="Confirm">
                            <input type="button" class="btn" onclick="delete_ajax(<?php echo $idCmt ?>)" value="Delete">
                        </div>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <div class="pagination-wrap">
        <?php
        $query2 = $obj->returnQuery("comment");
        $obj->page($query2,$records_per_page);
        ?>
    </div>
    <div align="center" class="table-responsive"><h3>All The Data</h3>
        <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>Id</th>
            <th>User Name</th>
            <th>Film Name</th>
            <th>Date Time</th>
            <th>Content</th>
            <th>State</th>
        </tr>
        </thead>
        <?php
        //if(isset($_REQUEST['del_id']))
        // { if($obj->deleteData($_REQUEST['del_id'],"user"))
        //{  echo"Your Data Successfully Deleted";
        // }
        // }
        $records_per_page=10;
        $query=$obj->pagingCmt(2,$records_per_page);
        if($obj->showData($query)!="") {
            foreach ($obj->showData($query) as $value) {
                $idCmt = $value["id_cmt"];
                ?>
                <tr>
                    <td><?php echo $value["id_cmt"] ?></td>
                    <td><?php extract($user->getById($value["id_user"])); echo $username ?></td>
                    <td><?php extract($film->getByIdF($value["id_film"])); echo $film_name ?></td>
                    <td><?php echo $value["datetime"] ?></td>
                    <td><?php echo $value["content"] ?></td>
                    <td>
                        <h4>OK</h4>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <div class="pagination-wrap">
        <?php
        $query2 = $obj->returnQuery("comment");
        $obj->page($query2,$records_per_page);
        ?>
    </div>
</div>
