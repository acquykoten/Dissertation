<?php
//include_once('Entity/connDB.php');
class footer extends connDB{
    public function showData($sql)
    {
        $q = $this->conn->prepare($sql) or die("failed!");
        $q->execute();
        $data=Array();
        try{
        while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }}catch (Exception $e){}
            return $data;
        $this->closeCN();
    }
    public function returnQuery($table)
    {
        $sql = "SELECT * FROM $table";
        return $sql;
    }
    public function returnQuery_index($sql)
    {
        return $sql;
    }
    public function paging_index($sql,$records_per_page)
    {
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function paging($table,$records_per_page)
    {
        $sql = "SELECT * FROM $table";
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function pagingFilm($records_per_page)
    {
        $sql = "SELECT episode.id_episode,episode.id_film,episode.name,episode.url2,episode.url1, film.film_name FROM episode,film WHERE episode.id_film=film.id_film";
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function pagingCmt($state,$records_per_page)
    {
        $sql = "SELECT * FROM comment WHERE state =$state";
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $sql . " limit $starting_position,$records_per_page";
        return $query2;
    }
    public function page($query,$records_per_page)
    {
    $self = $_SERVER['REQUEST_URI'];
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $total_no_of_records = $stmt->rowCount();

    if($total_no_of_records > 0)
    {
        ?><ul class="pagination"><?php
        $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
        $current_page=1;
        if(isset($_GET["page_no"]))
        {
            $current_page=$_GET["page_no"];
        }
        if($current_page!=1)
        {
            $previous =$current_page-1;
            echo "<li><a href='".$self."&page_no=1'>First</a></li>";
            echo "<li><a href='".$self."&page_no=".$previous."'>Previous</a></li>";
        }
        for($i=1;$i<=$total_no_of_pages;$i++)
        {
            if($i==$current_page)
            {
                echo "<li><a href='".$self."&page_no=".$i."' style='color:red;'>".$i."</a></li>";
            }
            else
            {
                echo "<li><a href='".$self."&page_no=".$i."'>".$i."</a></li>";
            }
        }
        if($current_page!=$total_no_of_pages)
        {
            $next=$current_page+1;
            echo "<li><a href='".$self."&page_no=".$next."'>Next</a></li>";
            echo "<li><a href='".$self."&page_no=".$total_no_of_pages."'>Last</a></li>";
        }
        ?></ul>
        <?php
    }
}
    public function page_index($query,$records_per_page)
    {
        $self = $_SERVER['REQUEST_URI'];
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $total_no_of_records = $stmt->rowCount();

        if($total_no_of_records > 0)
        {
            ?><ul class="page_index"><?php
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;
            if(isset($_GET["page_no"]))
            {
                $current_page=$_GET["page_no"];
            }
            if($current_page!=1)
            {
                $previous =$current_page-1;
                echo "<li style='display: inline-block;float: left; margin-left: 10px;font-size: 25px'><a style='color:#ffffff;' href='".$self."&page_no=1'>First</a></li>";
                echo "<li style='display: inline-block;float: left;margin-left: 10px;font-size: 25px'><a  style='color:#ffffff;' href='".$self."&page_no=".$previous."'>Previous</a></li>";
            }
            for($i=1;$i<=$total_no_of_pages;$i++)
            {
                if($i==$current_page)
                {
                    echo "<li style='display: block;float: left;margin-left: 10px; font-size: 25px'><a href='".$self."&page_no=".$i."' style='color:#dacb46;'>".$i."</a></li>";
                }
                else
                {
                    echo "<li style='display: block;float: left;margin-left: 10px;font-size: 25px'><a  style='color:#ffffff;' href='".$self."&page_no=".$i."'>".$i."</a></li>";
                }
            }
            if($current_page!=$total_no_of_pages)
            {
                $next=$current_page+1;
                echo "<li style='display: block;float: left;margin-left: 10px;font-size: 25px'><a  style='color:#ffffff;' href='".$self."&page_no=".$next."'>Next</a></li>";
                echo "<li style='display: block;float: left;margin-left: 10px;font-size: 25px'> <a  style='color:#ffffff;' href='".$self."&page_no=".$total_no_of_pages."'>Last</a></li>";
            }
            ?></ul>
            <?php
        }
    }
}