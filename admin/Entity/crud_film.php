<?php
include_once('connDB.php');
class crud_film extends connDB{
    //get data a movie
    public function getByIdF($id){
        $sql="SELECT * FROM film WHERE id_film = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    //
    public function showIdF(){
        $sql="SELECT max(id_film) AS max_id FROM film";
        $q = $this->conn->prepare($sql);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
        $this->conn=null;
    }
    // get all data in table
    public  function show($table){
        $sql="SELECT * FROM $table";
        $q = $this->conn->prepare($sql) or die("failed!");
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        return $data;
    }
    public function getByFName($name)
    {
        $sql = "SELECT * FROM film WHERE film_name = :name";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':name', $name);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
        $con= $this->conn;
        $con=null;
    }
    // search by name movie,get data all table
    public  function searchFilm($name,$table){
        $sql = "SELECT * FROM film,$table WHERE film.film_name LIKE :namef AND $table.id_film=film.id_film";
        $q = $this->conn->prepare($sql) or die("failed!");
        $nameFilm="%".$name."%";
        $q->bindParam(':namef',$nameFilm);
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        return $data;
        $this->conn=null;
    }
    public  function searchFilmF($name){
        $sql = "SELECT * FROM film WHERE film.film_name LIKE :namef";
        $q = $this->conn->prepare($sql) or die("failed!");
        $nameFilm="%".$name."%";
        $q->bindParam(':namef',$nameFilm);
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        return $data;
        $this->conn=null;
    }
    //update data a movie
    public function updateFilm($id,$name,$img,$des,$totalE,$length,$year,$country,$updateDay,$stt){
        $sql = "UPDATE film SET film_name=:name,film_name=:name, img=:img, description=:des,total_episode=:total,length_movies=:lengthM,year=:year,country=:country,update_day=:update_day,status=:stt WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->execute(array('id'=>$id,':name'=>$name,'img'=>$img,'des'=>$des,'total'=>$totalE,'lengthM'=>$length,'year'=>$year,'country'=>$country,'update_day'=>$updateDay,'stt'=>$stt));
        return true;
    }
    //insert data a movie
    public function insertDataFilm($name,$img,$des,$totalE,$length,$year,$country,$updateDay,$stt){
        $sql = "INSERT INTO film SET film_name=:name, img=:img, description=:des, total_episode=:total,length_movies=:lengthM,year=:year,country=:country,update_day=:updateday,status=:stt,total_viewer=0";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,'img'=>$img,'des'=>$des,'total'=>$totalE,'lengthM'=>$length,'year'=>$year,'country'=>$country,'updateday'=>$updateDay,'stt'=>$stt));
        //return true;
        $conn=null;
        return $last_id = $this->conn->lastInsertId();
    }
    //delete a film
    public function deleteDataFilm($id){
        $sql="DELETE FROM film WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $conn=null;

        return true;
    }
}
// class qli film(n)-typr(n)
class film_type extends crud_film{
    public function getByType($id){
        $sql="SELECT * FROM film_type WHERE id_type = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function getByFilm_Type($idT, $idF){
        $sql="SELECT * FROM film_type WHERE id_type = :idT AND id_film=:idF  ";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idT',$idT);
        $q->bindParam(':idF',$idF);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function getFilm_Type($idFilm){
    $sql="SELECT film.id_film, film.name_film,type.id_type, type.name_type FROM type, film, film_type WHERE film_type.id_film=:idF";
        $q = $this->conn->prepare($sql) or die("failed!");
        $q->bindParam(':idF',$idFilm);
        $q->bindParam(':idT',$idType);
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        $conn=null;
        return $data;
    }
    public function showFilm_type($records_per_page)
    {
        $sql = "SELECT film.id_film, film.film_name,type.id_type, type.type_name FROM type, film, film_type WHERE film_type.id_film=film.id_film and film_type.id_type = type.id_type";
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function deleteFilm_Type($idF,$idT){
        $sql="DELETE FROM film_type WHERE id_film=:id_film AND id_type=:id_type";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->bindParam(':id_type',$idT);
        $q->execute();
        $conn=null;
        return true;
    }
    public function deleteAllFilm_Type($idF){
        $sql="DELETE FROM film_type WHERE id_film=:id_film";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->execute();
        $conn=null;
        return true;
    }
    public function postFilm_Type($idF,$idT){
        $sql = "INSERT INTO film_type SET id_film=:idF,id_type=:idT";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':idF'=>$idF,':idT'=>$idT));
        $conn=null;
        return true;
    }
    public function updateFilm_type($idF,$idT){
        $sql = "UPDATE film_type SET id_type=:idT WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idT',$idT);
        $q->bindParam(':id',$idF);
        $q->execute();
        $this->closeCN();
        return true;
    }
}
// class qan li các tập film
class episode extends crud_film{
    public function getByIdE($id){
        $sql="SELECT * FROM episode WHERE id_episode = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function postEpisode($id_film,$name,$url1,$url2,$date){
        $sql = "INSERT INTO episode SET id_film=:idF,name=:name,url1=:url1,url2=:url2,datetime=:datatime";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':idF'=>$id_film,':name'=>$name,':url1'=>$url1,':url2'=>$url2,':datatime'=>$date));
        $conn=null;
        return true;
    }
    public function updateEpisode($id,$name,$url1,$url2,$date){
        $sql = "UPDATE episode SET name=:name,url1=:url1,url2=:url2,datetime=:date WHERE id_episode=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':name',$name);
        $q->bindParam(':url1',$url1);
        $q->bindParam(':url2',$url2);
        $q->bindParam(':date',$date);
        $q->execute();
        $conn=null;
        return true;
    }
    public  function getByNameE($id_film,$name){
        $sql="SELECT * FROM episode WHERE name= :name and id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':name',$name);
        $q->bindParam(':idF',$id_film);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }

    public function deleteDataEpisode($id){
        $sql="DELETE FROM episode WHERE id_episode=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $conn=null;
        return true;

    }
    public function deleteAllDataE($id_film){
        $sql="DELETE FROM episode WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id_film);
        $q->execute();
        $conn=null;
        return true;
    }
}
// class ql trailer
class trailer extends crud_film
{
    public function getByIdTrailer($id){
        $sql="SELECT * FROM trailer WHERE id_trailer = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function pagingTrailer($records_per_page)
    {
        $sql = "SELECT trailer.id_trailer,trailer.id_film,trailer.url2,trailer.url1, film.film_name FROM trailer,film WHERE trailer.id_film=film.id_film";
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function deleteTrailer($id){
        $sql="DELETE FROM trailer WHERE id_trailer=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $conn=null;
        return true;

    }
    public function insertTrailer($id_film,$url1,$url2){
        $sql = "INSERT INTO trailer SET id_film=:idF,url1=:url1,url2=:url2";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':idF'=>$id_film,':url1'=>$url1,':url2'=>$url2));
        $conn=null;
        return true;
    }
    public function updateTrailer($id,$url1,$url2){
        $sql = "UPDATE trailer SET url1=:url1,url2=:url2 WHERE id_trailer=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':url1',$url1);
        $q->bindParam(':url2',$url2);
        $q->execute();
        $conn=null;
        return true;
    }

}
class actor extends connDB
{
    public function getById_A($id){
        $sql="SELECT * FROM actor WHERE id_actor = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function deleteActor($id){
        $sql="DELETE FROM actor WHERE id_actor=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $this->closeCN();
        return true;

    }
    public function insertActor($name,$img,$sex){
        $sql = "INSERT INTO actor SET actor_name=:name,img=:img,sex=:sex";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':img'=>$img,':sex'=>$sex));
        $this->closeCN();
        return true;
    }
    public function updateActor($id,$actor_name,$img,$sex){
        $sql = "UPDATE actor SET actor_name=:actor_name,img=:img,sex=:sex WHERE id_actor=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':actor_name',$actor_name);
        $q->bindParam(':img',$img);
        $q->bindParam(':sex',$sex);
        $q->execute();
        $this->closeCN();
        return true;
    }
}
class director extends connDB
{
    public function getById_D($id){
        $sql="SELECT * FROM director WHERE id_director = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $conn=null;
        return $data;
    }
    public function deleteDirector($id){
        $sql="DELETE FROM director WHERE id_director=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $this->closeCN();
        return true;

    }
    public function insertDirector($name,$img){
        $sql = "INSERT INTO director SET director_name=:name,img=:img";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':img'=>$img));
        $this->closeCN();
        return true;
    }
    public function updateDirector($id,$director_name,$img){
        $sql = "UPDATE director SET director_name=:director_name,img=:img WHERE id_director=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':director_name',$director_name);
        $q->bindParam(':img',$img);
        $q->execute();
        $this->closeCN();
        return true;
    }
}
//class qli các diễn viên của phim
class film_actor extends crud_film{
    public function getByAll_FA($idF){
        $sql="SELECT * FROM film_actor WHERE id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idF',$idF);
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        $this->closeCN();
        return $data;
    }
    public function deleteFilm_Actor($idF,$idA){
        $sql="DELETE FROM film_actor WHERE id_film=:id_film AND id_actor=:id_actor";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->bindParam(':id_actor',$idA);
        $q->execute();
        $this->closeCN();
        return true;
    }
    public function deleteAllFilm_Actor($idF){
        $sql="DELETE FROM film_type WHERE id_film=:id_film";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->execute();
        $this->closeCN();
        return true;
    }
    public function getById_F_A($idF,$idA){
        $sql="SELECT * FROM film_actor WHERE  id_film=:idF and id_actor = :idD ";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idF',$idF);
        $q->bindParam(':idD',$idA);
        $q->execute();
//        $data = NULL;
     //   $data = Array();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        /*try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }
        }
        catch (Exception $e){
        }
		        $this->closeCN();
*/
        return $data;
    }
    public function insertFilm_Actor($idF,$idA){
        $sql = "INSERT INTO film_actor SET id_actor=:idD,id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':idF'=>$idF,':idD'=>$idA));
        $this->closeCN();
        return true;
    }
    public function updateFilm_Actor($idF,$idA){
        $sql = "UPDATE film_actor SET id_actor=:idA WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idA',$idA);
        $q->bindParam(':id',$idF);
        $q->execute();
        $this->closeCN();
        return true;
    }
}
// class qli các đạo diễn của phim
class film_director extends crud_film{
    public function deleteFilm_Director($idF,$idD){
        $sql="DELETE FROM film_director WHERE id_film=:id_film AND id_director=:id_director";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->bindParam(':id_director',$idD);
        $q->execute();
        $this->closeCN();
        return true;
    }
    public function deleteAllFilm_Director($idF){
        $sql="DELETE FROM film_director WHERE id_film=:id_film";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id_film',$idF);
        $q->execute();
        $this->closeCN();
        return true;
    }
    public function insertFilm_Director ($idF,$idD){
        $sql = "INSERT INTO film_director SET id_director=:idD,id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':idF'=>$idF,':idD'=>$idD));
        $this->closeCN();
        return true;
    }
    public function getById_F_D($idF,$idD){
        $sql="SELECT * FROM film_director WHERE id_director = :idD and id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idD',$idD);
        $q->bindParam(':idF',$idF);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        /*$data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        */
        $this->closeCN();
        return $data;
    }
    public function getByAll_FD($idF){
        $sql="SELECT * FROM film_director WHERE id_film=:idF";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idF',$idF);
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        $this->closeCN();
        return $data;
    }
    public function updateFilm_Director($idF,$idD){
        $sql = "UPDATE film_director SET id_director=:idD WHERE id_film=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':idD',$idD);
        $q->bindParam(':id',$idF);
        $q->execute();
        $this->closeCN();
        return true;
    }

}