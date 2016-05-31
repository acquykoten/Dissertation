<script language="javascript">
    function report_cmt(id)
    {
        $.ajax({
            url : "report_cmt.php", // g?i ajax ??n file result.php
            type : "get", // ch?n ph??ng th?c g?i là get
            dateType:"text", // d? li?u tr? v? d?ng text
            data : {
                id : id
            },
            success : function (result){
                $('#'+id).html(result);
            }
        });
    }
    </script>
<div style="margin:0px 0px 0px 50px;height:500px;width:80%;">
	<?php
        $stm=$pdo->prepare("SELECT comment.id_film,comment.id_user,comment.content,comment.datetime,user.id_user,user.username, comment.id_cmt FROM comment INNER JOIN user ON comment.id_user = user.id_user where id_film=:id_film and comment.state=1 order by id_cmt DESC ");
        $stm->bindParam(":id_film",$id_film);
        $stm->execute();
        $r=$stm->fetchAll(PDO::FETCH_BOTH);
        foreach($r as $bl)
        {
    ?>
        <div style="border:solid 1px;width:99%;height:auto;margin-top:10px;-webkit-border-radius:10px;min-height:100px">  
            <div id="bl-r" style="float:left;margin:10px 0px 0px 10px;border:solid 0px;width:96%;">
                <div style="float:left;color:#69F;border:solid 0px;width:100%;height:auto;">
                    <h4>
                        <span style="float:left"><?php echo $bl['username'] ?> </span>
                    </h4>
                        <span style="float:right;"><?php echo $bl['datetime'] ?></span>
                </div>
                <hr />
                <div style="float:left;margin:5px 0px 0px 0px;border:solid 0px;width:99%;height:auto;overflow:auto">
                    <span style="overflow:scroll;color:#FFF"><?php echo $bl['content'] ?></span>
                </div>
                <div id="<?php echo $bl['id_cmt'];?>" style="margin-top: 30px">
                    <input type="button" style="background-color: #0000FF" value="Report" onclick="report_cmt(<?php echo $bl['id_cmt'];?>)">
                </div>
            </div>   
            <div class="xoa"></div>
        </div>

    <?php }?>
</div>