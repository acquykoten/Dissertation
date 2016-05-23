<?php
//include_once("Ctr/footer.php");
//include("Entity/crud_film.php");
$obj=new footer();
$o=new episode();
if(isset($_REQUEST['search'])) {
    extract($_REQUEST);
    $name = $_REQUEST['nameF'];
    if ($o->searchFilm($name)!= null) {
        foreach($o->searchFilm($name) as $values){
            echo $values['film_name'];
        }

    } else {

    }
}