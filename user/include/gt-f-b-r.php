<p><span style="color:#69F">Quốc Gia</span> : 
	<?php echo $r['country'];?>
</p><br />

<p><span style="color:#69F">Thời Lượng</span> : 
    <?php echo $r['length_movies'];?> Phút.
</p><br />

<p><span style="color:#69F"> Lượt Xem</span> :   
<?php 
    $id_news = $r['id_film'];
    $module_name = 'film';
    $session_name = $module_name . '_' . $id_news;
    if(!empty( $_SESSION[$session_name] ) )
    {
        $_SESSION[$session_name] = 1;
        $sql1 = "UPDATE film SET total_viewer=total_viewer+1 WHERE id_film='". $id_news."'";
        $stm=$pdo->prepare($sql1);
        $stm->execute();
    }
?>
<?php echo $r['total_viewer'];?>                   
</p><br />