<div align="center">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_director_actor" enctype="multipart/form-data" method="post" data-parsley-validate>
            -Actor Name
            <input type="text" name="a_name" placeholder="Name" data-parsley-trigger="change" data-parsley-required="true">
            -Image
            <td><input type="file" name="UrlHinh" id="UrlHinh" /></td>
            -Sex:
            Men
            <input type="radio" name="sex" value="0" checked>
            Women
            <input type="radio" name="sex" value="1">
            <input type="submit" name="insert_actor" id="inrt" value="Insert" class="btn">
        </form>
    </button>
</div>