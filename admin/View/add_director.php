<div align="center">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_director_actor" method="post" enctype="multipart/form-data" data-parsley-validate>
           <table width="400px" border="1px">
           <tbody>
           <tr style="height: 50px"><th>-Director Name</th>
            <td><input type="text" name="d_name" placeholder="Name" data-parsley-trigger="change" data-parsley-required="true"></td>
            </tr>
            <tr style="height: 50px">
                <th>-Image</th>
            <td align="center">
                <input type="file" name="UrlHinh" ></td>
            </tr>
           </tbody>
           </table>
            <div style="clear: both; margin-top: 20px"><input type="submit" name="insert_director" id="inrt" value="Insert" class="btn">
            </div>
        </form>
    </button>
</div>