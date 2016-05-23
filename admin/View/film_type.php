<?php
//include_once("Ctr/footer.php");
//include_once("Entity/crud_film.php");
//include_once("Entity/crud_type.php");
$o = new film_type();
$obj = new footer();
$type = new crud_type();
$idF ='';
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div style="float: left"><tr class="success">
            <th scope="col" colspan="5" align="left">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_film_type&idF=<?php echo $idF ?>">Insert New Data</a>
                    </button> </div>
            </th>
        </tr></div>
    <div style="float: right">
        <form <form action="?cache=view&module=film_type" method="post">
            <div>
                <input type="text" name="nameF" placeholder="Search for..">
                <input class="btn btn-secondary" type="submit" name="search" value="Go!">
            </div>
        </form></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>ID Film</th>
            <th>Movies Name</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        if(isset($_REQUEST['del_idF']))
        { if($o->deleteFilm_Type($_REQUEST['del_idF'],$_REQUEST['del_idT']))
        {
            echo"Your Data Successfully Deleted";
        }
            else{
                echo "Delete Fail";
            }
        }
        if(isset($_REQUEST['search'])) {
            extract($_REQUEST);
            $name = $_REQUEST['nameF'];
            if ($o->searchFilm($name,'film_type')!= null) {
                foreach($o->searchFilm($name,'film_type') as $values){
                    $idF = $values["id_film"];
                    $idT = $values['id_type'];
                    ?>
                    <tr>
                        <td><?php echo $values["id_film"] ?></td>
                        <td><?php echo $values["film_name"] ?></td>
                        <td>
                            <?php

                            extract($type->getById($idT));
                            echo $type_name;
                            ?>
                        </td>
                        <td>
                            <button class="btn"><a
                                    href="?cache=view&module=update_film_type&update_id=<?php echo $id ?>">Edit</a></button>
                            &nbsp;&nbsp;
                            <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                                   href="?cache=view&module=film_type&del_idF=<?php echo $idF ?>&del_idT=<?php echo $idT ?>">Delete</a>
                            </button>
                            <button class="btn"><a href="?cache=view&module=add_film_type&idF=<?php echo $idF ?>">Insert</a></button>
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
        $query = $o->showFilm_type($records_per_page);
        if ($obj->showData($query) != "") {
            foreach ($obj->showData($query) as $value) {
                $idF = $value["id_film"];
                $idT = $value['id_type'];
                ?>
                <tr>
                    <td><?php echo $value["id_film"] ?></td>
                    <td><?php echo $value["film_name"] ?></td>
                    <td><?php echo $value["type_name"] ?></td>
                    <td>
                        <button class="btn"><a href="?cache=view&module=update_film_type&update_idT=<?php echo $idT ?>&idF=<?php echo $idF?>">Edit</a>
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=film_type&del_idF=<?php echo $idF ?>&del_idT=<?php echo $idT ?>">Delete</a>
                        </button>
                    </td>
                </tr>
                <?php
            }
        }
        ?>

    </table>
    <div>
        <?php

        ?>
        <div class="pagination-wrap">
            <?php
            $query2 = $obj->returnQuery("film_type");
            $obj->page($query2, $records_per_page);
            ?>
        </div>
    </div>
    <?php
    }
    ?>
</div>
