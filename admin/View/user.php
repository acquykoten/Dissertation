<?php
//include("Ctr/footer.php");
$obj=new footer();
$user = new crud_user();
?>
<div align="center" class="table-responsive"><h3>All The Data</h3>
<table width="750" border="1" class="table">
<thead class="thead-inverse">
<tr class="something">
<th>Name</th>
<th>Email</th>
<th>Password</th>
    <th>Action</th>
</tr>
</thead>
<?php
if(isset($_REQUEST['del_id']))
{ if($user->deleteData($_REQUEST['del_id'],"user"))
{  echo"Your Data Successfully Deleted";
}
}
$records_per_page=10;
$query=$obj->paging("user",$records_per_page);
if($obj->showData($query)!="") {
foreach ($obj->showData($query) as $value) {
    $id = $value["id_user"]
    ?>
    <tr>
        <td><?php echo $value["username"] ?></td>
        <td><?php echo $value["email"] ?></td>
        <td>***********</td>
        <td>
            <?php
            //echo"<button class='btn'><a href="?cache=view&module=user_update&update_id=<?php echo $id ">Edit</a>
            //</button>";
            ?>
            &nbsp;&nbsp;
            <button class="btn"><a onclick="return confirm('Are you sure want to delete it?')"
                                   href="?cache=view&module=user&del_id=<?php echo $id ?>">Delete</a></button>
        </td>
    </tr>
    <?php
}
}
?>
</table>
<div class="pagination-wrap">
    <?php
    $query2 = $obj->returnQuery("user");
    $obj->page($query2,$records_per_page);
    ?>
</div>
</div>