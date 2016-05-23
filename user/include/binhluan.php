<div style="background:url(image/line_bl.gif);height:21px;"></div>
<div style="background:url(image/icon_bl.gif) 0 0 no-repeat; width:560px;height:29px; padding-left:50px;font-size:20px; color:#C00;">Bình luận</div>
    <form id="formbinhluan" name="formbinhluan" method="post" action="index.php?ac=xlbl" style="margin:0px 0px 10px 40px">
    <input type="hidden" name="id_film" value="<?php echo $_REQUEST['id']; ?>" />
        <table width="466px" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td style="padding-left:10px;"><textarea name="comment" rows="7" cols="55" id="comment" style="float:left;background-image:url(image/text_bl.jpg);border:0px;padding-left:5px;"></textarea>
        </td>
        <td>
          <input type="submit" name="post_comment" id="post_comment" value="Gửi" style="float:left; margin:0px 30px 0px 30px;width:70px;height:50px" />
        </td>
        </tr>
        </table>
    </form>
