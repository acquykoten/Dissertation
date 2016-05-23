<?php
//include_once("Ctr/footer.php");
//include_once("Entity/crud_type.php");
//include_once("Entity/crud_film.php");
$obj=new footer();
$obj1=new crud_type();
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div><tr class="success">
            <th scope="col" colspan="5" align="left">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_type">Insert New Data</a>
                    </button> </div>
            </th>
        </tr></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        if(isset($_REQUEST['del_id'])) {
            $type = new film_type();
            if ($type->getByType($_REQUEST['del_id'])!=null) {
                if ($obj1->deleteDataType($_REQUEST['del_id'])) {
                    echo "Your Data Successfully Deleted";
                }
            }
            else{
                echo"You can't delete it! Plead Delete All Film OF IT!!";
            }
        }
        $records_per_page=10;
        $query=$obj->paging("type",$records_per_page);
        if($obj->showData($query)!= Null) {
            foreach ($obj->showData($query) as $value) {
                $id = $value["id_type"]
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $value["type_name"] ?></td>
                    <td>
                        <button class="btn"><a
                                href="?cache=view&module=update_type&update_id=<?php echo $id ?>">Edit</a></button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=type&del_id=<?php echo $id ?>">Delete</a>
                        </button>
                    </td>
                </tr>

                <?php
            }
        }
        ?>


    </table>
    <div class="pagination-wrap">
        <?php
        $query2 = $obj->returnQuery("type");
        $obj->page($query2,$records_per_page);
        ?>
    </div>
</div>
