<script language="JavaScript">
    $(document).ready(function(){
        $('#inrt').click(function(){
            var data = {
                name    : $('#name').val(),
                url1    : $('#url1').val(),
                url2    : $('#url2').val(),
                idF    : $('#idF').val()
            };
            $.ajax({
                type : "post",
                dataType : "JSON",
                url : "Ctr/ctr_film.php",
                data : data,
                success : function(result)
                {
                    // Có l?i, t?c là key error = 1
                    if (result.hasOwnProperty('error') && result.error == '1'){
                        var html = '';

                        // L?p qua các key và x? lý n?i l?i
                        $.each(result, function(key, item){
                            // Tránh key error ra vì nó là key thông báo tr?ng thái
                            if (key != 'error'){
                                html += '<li>'+item+'</li>';
                            }
                        });
                        $('.alert-danger').html(html).removeClass('hide');
                        $('.alert-success').addClass('hide');
                    }
                    else{ // Thành công
                        $('.alert-success').html('Create thành công!').removeClass('hide');
                        $('.alert-danger').addClass('hide');
                    }
                }
            });
        });
    });

</script>
<?php
//include_once("Entity/crud_film.php");
$obj= new episode();
?>
<div align="center">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post" data-parsley-validate>
            Episode Name <input   type="text" name="name" id="name" placeholder="Episode Name" data-parsley-trigger="change" data-parsley-required="true">
            -Movie Name
            <?php
            if($_REQUEST['idF']!=0) {
                extract($obj->getByIdF($_REQUEST['idF']));
                echo '<input value="'.$id_film.'" hidden name="id_film">';
                echo '<input type="text" name="nameF" value="' . $film_name . '" readonly>';
            }
            else{
             ?>
            <select name="id_film" id="idF">
                <?php
                foreach($obj->show('film') as $r)
                {
                    ?>
                    <option value="<?php echo $r['id_film']?>"><?php echo $r['film_name'] ?></option>
                <?php }?>
            </select>
            <?php
            }?>
            -Url 1 <input type="text" name="url1" id="url1" placeholder="Url 1" data-parsley-trigger="change" data-parsley-required="true">
            -Url 2 <input type="text" name="url2" id="url2" placeholder="Url 2" data-parsley-trigger="change" data-parsley-required="true">

            <input type="submit" name="insert_episode" id="inrt" value="Insert" class="btn">
        </form>
    </button>
        <div class="alert alert-danger hide">

        </div>
        <div class="alert alert-success hide">

    </div>
</div>