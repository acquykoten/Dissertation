<?php
if(isset($_SESSION['id_admin'])){
    unset($_SESSION['id_admin']);
    unset($_SESSION['admin_name']);

    header('location:?cache=view&module=index');
}
header('location:?cache=view&module=login');
