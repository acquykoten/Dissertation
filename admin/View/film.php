<?php
$obj=new footer();
$o = new crud_film();
$type = new film_type();
$e = new episode();
$film_d = new film_director();
$director =new director();
$actor = new actor();
$film_a = new film_actor();
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div style="float: left"><tr class="success">
            <th scope="col" colspan="5" align="left">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_film">Insert New Data</a>
                    </button> </div>
            </th>
        </tr></div>
    <div style="float: right">
        <form <form action="?cache=view&module=film" method="post">
            <div>
                <input type="text" name="nameF" placeholder="Search for..">
                <input class="btn btn-secondary" type="submit" name="search" value="Go!">
            </div>
        </form></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>ID</th>
            <th>Movie Name</th>
            <th>Status</th>
            <th>Director</th>
            <th>Total Episode</th>
            <th>Total viewer</th>
            <th>Total Asses</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
       if(isset($_REQUEST['del_id']))
        { if($o->deleteDataFilm($_REQUEST['del_id']))
        {
            echo"Deleted Successfully:";

            if($type->deleteAllFilm_Type($_REQUEST['del_id']))
           {
               echo"Type";
           }
            if($e->deleteAllDataE($_REQUEST['del_id'])){
                echo", Episode";
            }
        }

        }
        if(isset($_REQUEST['search'])) {
            extract($_REQUEST);
            $name = $_REQUEST['nameF'];
            if ($o->searchFilmF($name)!= null) {
                foreach($o->searchFilmF($name) as $value){
                    $id=$value['id_film'];
                    ?>
                    <tr>
                        <td><?php echo $value["id_film"] ?></td>
                        <td><?php echo $value["film_name"] ?></td>
                        <td><?php echo $value["status"] ?></td>
                        <td>
                            <?php
                            if($film_d->getByAll_FD($id)!=null) {
                                foreach ($film_d->getByAll_FD($id) as $values) {
                                    extract($director->getById_D($values['id_director']));
                                    echo $director_name;
                                }
                            }
                            else
                            {
                                echo 'Chưa Cập nhật';
                            }
                            ?>
                        <td><?php echo $value["total_episode"] ?></td>
                        <td><?php echo $value["total_viewer"] ?></td>
                        <td><?php echo $value["total_Assess"] ?></td>
                        <td>
                            <button class="btn"><a
                                    href="?cache=view&module=update_film&update_id=<?php echo $id ?>">Edit</a>
                            </button>
                            &nbsp;&nbsp;
                            <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                                   href="?cache=view&module=film&del_id=<?php echo $id ?>">Delete</a>
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
        $query = $obj->paging("film", $records_per_page);
        if ($obj->showData($query) != "") {
            foreach ($obj->showData($query) as $values) {
                $id = $values["id_film"]
                ?>
                <tr>
                    <td><?php echo $values["id_film"] ?></td>
                    <td><?php echo $values["film_name"] ?></td>
                    <td><?php echo $values["status"] ?></td>
                    <td>
                        <?php
                        if($film_d->getByAll_FD($id)!=null) {
                            foreach ($film_d->getByAll_FD($id) as $values1) {
                                extract($director->getById_D($values1['id_director']));
                                echo $director_name.', ';
                            }
                        }
                        else
                        {
                            echo 'Chưa Cập nhật';
                        }
                        ?>
                    </td>
                    <td><?php echo $values["total_episode"] ?></td>
                    <td><?php echo $values["total_viewer"] ?></td>
                    <td><?php echo $values["total_Assess"] ?></td>
                    <td>
                        <button class="btn"><a
                                href="?cache=view&module=update_film&update_id=<?php echo $id ?>">Edit</a>
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=film&del_id=<?php echo $id ?>">Delete</a>
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
            $query2 = $obj->returnQuery("film");
            $obj->page($query2, $records_per_page);
            ?>
        </div>
    </div>
    <?php
    }
    ?>
</div>
