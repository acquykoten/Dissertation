<div align="center" class="container">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post" enctype="multipart/form-data" data-parsley-validate>
           <table style="min-height: 500px; min-width: 500px">
               <tr><th><span>-Film Name</th></span>
                <td><span><input type="text" name="name" placeholder="Film Name" data-parsley-trigger="change" data-parsley-required="true"></span></td></tr>
               <tr><th><span>-Url Image</span></th>
                   <td><span>
                           <input type="file" name="UrlHinh" placeholder="Image" data-parsley-trigger="change" data-parsley-required="true"></span>
                   </td></tr>
               <tr><th><span>-Description</span></th>
                        <td><span><textarea name="description" placeholder="Description" data-parsley-trigger="change" data-parsley-required="true"></textarea></span></td></tr>
              <!-- <tr><th><span>-Author</span></th>
                        <td><span><input type="text" name="author" placeholder="Author" data-parsley-trigger="change" data-parsley-required="true"></span></td></tr>
               -->
               <tr><th><span>-Total Episode</span></th>
                        <td><span><input type="text" name="totalE" placeholder="Total Episode" data-parsley-trigger="change" data-parsley-required="true"></span></td></tr>
               <tr><th><span>-Length Movies</span></th>
                        <td><span><input type="text" name="lengthM" placeholder="Length Movies" data-parsley-trigger="change" data-parsley-required="true"></span></td></tr>
               <tr><th><span>-Year</span></th>
                        <td>
                            <select name="year">
                                <option>Select Year</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="Trước Năm 2000">Trước Năm 2000</option>
                            </select>
                        </td></tr>
               <tr><th><span>-Country</span></th>
                        <td>
                            <select name="country">
                                <option value="Việt Nam"><span>Việt Nam</span></option>
                                <option value="Nhật Bản"><span>Nhật Bản</span></option>
                                <option value="Mỹ"><span>Mỹ</span></option>
                                <option value="Hàn Quốc"><span>Hàn Quốc</span></option>
                                <option value="Trung Quốc"><span>Trung Quốc</span></option>
                                <option value="Anh"><span>Anh</span></option>
                                <option value="Úc"><span>Úc</span></option>
                                <option value="Pháp"><span>Pháp</span></option>
                                <option value="Thái Lan"><span>Thái Lan</span></option>
                                <option value="Hồng Công"><span>Hồng Công</span></option>
                                <option value="Đài Loan"><span>Đài Loan</span></option>
                                <option value="Quốc Gia Khác"><span>Quốc Gia Khác</span></option>
                            </select>
                        </td></tr>
               <tr><th><span>-Status</span></th>
                        <td><span><input type="text" name="stt" placeholder="Status" data-parsley-trigger="change" data-parsley-required="true"></span></td></tr>
               <!--<td>
<tr><th><span>-Trạng Thái</span></th>
    <select name="trangthai">
        <option value="0"><span>Phim Mới</span></option>
        <option value="1"><span>Hoàn Thành</span></option>
    </select>
</td></tr>
-->
           </table>
            <br>
            <span><b>Type</b></span><br><br>
<p>
            <?php
//include_once('Entity/crud_film.php');
$obj=new crud_film();
if($obj->show('type')!=null) {
    foreach ($obj->show('type') as $value) {
        ?>
                 <input type="checkbox"  name="film_type[]" value="<?php echo $value['id_type'] ?>" /><?php echo $value['type_name'];
    }
}
?>
</p><br>
            <div><input type="submit" name="insert_film" value="Insert" class="btn"></div>
        </form>
    </button>
</div>