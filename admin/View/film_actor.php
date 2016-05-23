<?php
//include_once("Ctr/footer.php");
//include_once("Entity/crud_film.php");
$obj = new footer();
$film_actor = new film_actor();
$actor = new actor();
$idF ='';
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
    <div style="float: left"><tr class="success">
            <th scope="col" colspan="5" align="left">
                <div align="left">
                    <button class="btn">
                        <a href="?cache=view&module=add_film_actor&idF=<?php echo $idF ?>">Insert New Data</a>
                    </button> </div>
            </th>
        </tr></div>
    <div style="float: right">
        <form <form action="?cache=view&module=film_actor" method="post">
            <div>
                <input type="text" name="F_name" placeholder="Search for..">
                <input class="btn btn-secondary" type="submit" name="search" value="Go!">
            </div>
        </form></div>
    <table width="750" border="1" class="table">
        <thead class="thead-inverse">
        <tr class="something">
            <th>ID Film</th>
            <th>Movies Name</th>
            <th>ID Actor</th>
            <th>Actor Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        if(isset($_REQUEST['del_idF']))
        { if($film_actor->deleteFilm_Actor($_REQUEST['del_idF'],$_REQUEST['del_idA']))
        {
            echo"Your Data Successfully Deleted";
        }
            else{
                echo "Delete Fail";
            }
        }
        if(isset($_REQUEST['search'])) {
            extract($_REQUEST);
            $name = $_REQUEST['F_name'];
            if ($film_actor->searchFilm($name,'film_actor')!= null) {
                foreach($film_actor->searchFilm($name,'film_actor') as $values){
                    $idF = $values["id_film"];
                    $idA = $values['id_actor'];
                    ?>
                    <tr>
                        <td><?php echo $idF ?></td>
                        <td><?php echo $values["film_name"] ?></td>
                        <td><?php echo $idA ?></td>

                        <td>
                            <?php

                            extract($actor->getById_A($idA));
                            echo $actor_name;
                            ?>
                        </td>
                        <td>
                            <button class="btn"><a
                                    href="?cache=view&module=update_film_actor&idF=<?php echo $idF ?>&idA=<?php echo $idA ?>">Edit</a></button>
                            &nbsp;&nbsp;
                            <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                                   href="?cache=view&module=film_actor&del_idF=<?php echo $idF ?>&del_idA=<?php echo $idA?>">Delete</a>
                            </button>
                            <button class="btn"><a href="?cache=view&module=add_film_actor&idF=<?php echo $idF ?>">Insert</a></button>
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
        $records_per_page=10;
        $query=$obj->paging("film_actor",$records_per_page);
        if($obj->showData($query)!= Null) {
            foreach ($obj->showData($query) as $value) {
                $idA = $value["id_actor"];
                $idF = $value['id_film'];
                ?>
                <tr>
                    <td><?php echo $idF ?></td>
                    <td>
                        <?php
                        extract($film_actor->getByIdF($idF));
                        echo $film_name;
                        ?>
                    </td>
                    <td><?php echo $idA ?></td>

                    <td>
                        <?php
                        extract($actor->getById_A($idA));
                        echo $actor_name;
                        ?>
                    </td>
                    <td>
                        <button class="btn"><a
                                href="?cache=view&module=update_film_actor&idF=<?php echo $idF ?>&idA=<?php echo $idA ?>">Edit</a></button>
                        &nbsp;&nbsp;
                        <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                               href="?cache=view&module=film_actor&del_idF=<?php echo $idF ?>&del_idA=<?php echo $idA ?>">Delete</a>
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
            $query2 = $obj->returnQuery("film_actor");
            $obj->page($query2, $records_per_page);
            ?>
        </div>
    </div>
    <?php
    }
    ?>
</div>
