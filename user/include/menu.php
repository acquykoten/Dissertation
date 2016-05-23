<div class="banner">
   <div class="menu-t"><?php
			include"logo.php";
			include"find.php";
		?>
			<div class="login-name" style="position: relative">
            <?php
			session_start();
                if(isset($_SESSION['username']))
                {	
					//	echo '<span>Xin Chào, '.$_SESSION['username'].' |</span>';
					echo "&nbsp;";
					echo '<ul class="drop">';
					echo '<li>';
					//echo '<ul>';
					//echo '&nabla;';
					echo '<span style="float:right">&nabla; Xin Chào, '.$_SESSION['username'].'.</span>';
					echo '<ul class="drop">';
					echo "<li>";
					echo '<a href="index.php?ac=ttcn">Thông tin cá nhân</a>';
					echo "</li>";
					echo "<li>";
					echo '<a href="index.php?ac=changepw">Đổi Mật Khẩu</a>';
					echo "</li>";
					echo "<li>";
					echo '<a href="index.php?ac=logout">Đăng Xuất</a>';
					echo "</li>";
					echo "</ul>";
					echo '</li>';
					echo '</ul>';
                }else
                {
					echo "<a href='index.php?ac=login'>
					<input type='button' class='login-dangnhap' value='Đăng Nhập' /></a>";
				}
			?>  
            		</div>
   </div>
</div>
<div class="menu">
<hr color="#dacb46" size="2px">	
 <div class="menu-b">
   		<?php
        	include"ct-menu.php";
		?>
   </div>
   </div>