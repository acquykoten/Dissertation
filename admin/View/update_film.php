<?php
//include("Entity/crud_film.php");
$obj1=new crud_film();
extract($obj1->getByIdF($_REQUEST['update_id']));
?>
<div class="container" align="center">
    <button class="class="well well-lg">
        <h3>Edit Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post" enctype="multipart/form-data">
            <table style="min-height: 500px; min-width: 500px" border="1">
                <tr> <th scope="row">Id</th>
                    <td><input type="text" name="id" value="<?php echo $id_film ?>" readonly="readonly"></td></tr>
                <tr><th><span>-Film Name</th></span>
                    <td><span><input type="text" name="name" value="<?php echo $film_name ?>"></span></td></tr>
                <tr><th><span>-Url Image</span></th>
                    <td><span>
                            <img src="image/film/<?php echo $img ?>" style="width: 200px; height: 241px">
                            <input hidden type="text" value="<?php echo $img ?>" name="old_img">
                            <input type="file" name="UrlHinh" value="<?php echo $img ?>"></span></td></tr>
                <tr><th><span>-Description</span></th>
                    <td><span><textarea  name="description" style="min-width: 90%; min-height: 100px"><?php echo $description ?></textarea></span></td></tr>
               <!-- <tr><th><span>-Author</span></th>
                    <td><span><input type="text" name="author" value="<?php //echo $author ?>"></span></td></tr>
                    -->
                <tr><th><span>-Total Episode</span></th>
                    <td><span><input type="text" name="totalE" value="<?php echo $total_episode ?>"></span></td></tr>
                <tr><th><span>-Length Movies</span></th>
                    <td><span><input type="text" name="lengthM" value="<?php echo $length_movies ?>"></span></td></tr>
                <tr><th><span>-Year</span></th>
                    <td>
                        <select name="year">
                            <option value="<?php echo $year ?>"><?php echo $year ?></option>
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
                            <option value="<?php echo $country ?>"><span><?php echo $country ?></span></option>
                            <?php// if($country==$_REQUEST['country'])
                            ?>
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
                    <td><span><input type="text" name="stt" value="<?php echo $status ?>"></span></td></tr>
               <!-- <tr><th><span>-Trạng Thái</span></th>
                    <td>
                        <select name="trangthai">
                            <option value="0"><span>Phim Mới</span></option>
                            <option value="1"><span>Hoàn Thành</span></option>
                        </select>
                    </td></tr>
                    -->
            </table>
            <div><input type="submit" name="update_film" value="Update" class="btn-block"></div>
        </form>
    </button>
</div>