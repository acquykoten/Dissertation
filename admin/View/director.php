<?php
//include_once("Ctr/footer.php");
//include_once("Entity/crud_film.php");
$obj=new footer();
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div><tr class="success">
            <th scope="col" colspan="5" align="left">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_director">Insert New Data</a>
                    </button> </div>
            </th>
        </tr></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>Id</th>
            <th>IMG</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        if(isset($_REQUEST['del_id'])) {
            $director = new director();
            if ($director->getById_D($_REQUEST['del_id'])!=null) {
                if ($director->deleteDirector($_REQUEST['del_id'])) {
                    echo "Your Data Successfully Deleted";
                }
            }
            else{
                echo"Delete Fail!!";
            }
        }
        $records_per_page=10;
        $query=$obj->paging("director",$records_per_page);
        if($obj->showData($query)!= Null) {
            foreach ($obj->showData($query) as $value) {
                $id = $value["id_director"]
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><img style="width:100px;height:100px" src="image/actor/<?php echo $value['img'] ?>"></td>

                    <td><?php echo $value["director_name"] ?></td>
                    <td>
                        <button class="btn"><a
                                href="?cache=view&module=update_director&update_id=<?php echo $id ?>">Edit</a></button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=director&del_id=<?php echo $id ?>">Delete</a>
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
        $query2 = $obj->returnQuery("director");
        $obj->page($query2,$records_per_page);
        ?>
    </div>
</div>
