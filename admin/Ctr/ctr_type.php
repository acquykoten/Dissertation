<?php
//include("admin/Entity/crud_type.php");
$obj1=new crud_type();
if(isset($_REQUEST['update'])) {
    extract($_REQUEST);
    $id_type =$_REQUEST['id'];
    $name = $_REQUEST['name'];
    if($obj1->update($id_type,$name)){
        ?>
        <script language="JavaScript">
            window.alert("Update Successfully");
            location.href="?cache=view&module=type";
        </script>
        <?php
    }  }
if(isset($_REQUEST['insert']))
{
    extract($_REQUEST);
    if($name=="") {
        ?>
        <script language="JavaScript">
            window.alert("Please enter a  category name");
            location.href = "?cache=view&module=add_type";
        </script>
        <?php
    }
    elseif($obj1->getByName($name)!= null){
        ?>
        <script language="JavaScript">
            window.alert("Coincide category!!!");
            location.href = "?cache=view&module=add_type";
        </script>
        <?php

    }
    elseif($obj1->insertData($name)){
            ?>
            <script language="JavaScript">
                window.alert("Create Success!!!");
            location.href="?cache=view&module=type";
        </script>       <?php
        }
}
