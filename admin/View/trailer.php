<?php
//include_once("Ctr/footer.php");
//include("Entity/crud_film.php");
$obj=new footer();
$o=new trailer();
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div style="float: left"><tr class="success">
            <td scope="col" colspan="5">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_trailer">Insert New Data</a>
                    </button>

                </div>
            </td>
        </tr>
    </div>
    <div style="float: right">
        <form <form action="?cache=view&module=trailer" method="post">
            <div>
                <input type="text" name="nameF" placeholder="Search for..">
                <input class="btn btn-secondary" type="submit" name="search" value="Go!">
            </div>
        </form></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>Id</th>
            <th>Name Movie</th>
            <th>Url 1</th>
            <th>Url 2</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        if(isset($_REQUEST['del_id']))
        { if($o->deleteTrailer($_REQUEST['del_id']))
        {  echo"Your Data Successfully Deleted";
        }
        }
        if(isset($_REQUEST['search'])) {
            extract($_REQUEST);
            $name = $_REQUEST['nameF'];
            if ($o->searchFilm($name,"trailer")!= null) {
                foreach($o->searchFilm($name,"trailer") as $value){
                    $id=$value['id_trailer'];
                    ?>
                    <tr>
                        <td><?php echo $value["id_trailer"] ?></td>
                        <td><?php echo $value["film_name"] ?></td>
                        <td><?php echo $value["url1"] ?></td>
                        <td><?php echo $value["url2"] ?></td>
                        <td>
                            <button class="btn"><a
                                    href="?cache=view&module=update_trailer&update_id=<?php echo $id ?>">Edit</a></button>
                            &nbsp;&nbsp;
                            <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                                   href="?cache=view&module=trailer&del_id=<?php echo $id ?>">Delete</a>
                            </button>
                        </td>
                    </tr>

                    <?php
                }
                echo  '</table>';

                // echo $values['film_name'];
            }
            else{
                echo '<div align="center"><b><h4>Search Fail</h4></b></div>';
                echo'</table>';
            }

        } else {
        $records_per_page = 10;
        $query = $o->pagingTrailer($records_per_page);
        if ($obj->showData($query) != Null) {
            foreach ($obj->showData($query) as $value) {
                $id = $value["id_trailer"]
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $value["film_name"] ?></td>
                    <td><?php echo $value["url1"] ?></td>
                    <td><?php echo $value["url2"] ?></td>
                    <td>
                        <button class="btn"><a
                                href="?cache=view&module=update_trailer&update_id=<?php echo $id ?>">Edit</a></button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=trailer&del_id=<?php echo $id ?>">Delete</a>
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
        $query2 = $obj->returnQuery("episode");
        $obj->page($query2, $records_per_page);
        ?>
    </div>
    <?php
    }
    ?>
</div>
