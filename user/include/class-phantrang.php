<?php
class pager
        {
        
			function findStart($limit)
			{
				if((!isset($_GET['page'])) || ($_GET['page'] == "1"))
				{
					$start = 0;
					$_GET['page'] = 1;
				}
				else
				{
					$start = ($_GET['page']-1) * $limit;
				}
				return $start;
			}
			function findPages($count,$limit)
			{
				$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
				return $pages;
			}
			function nextPrev($curpage,$pages)
			{
				$next_prev = "";
				if (($curpage-1) <= 0)
				{
					$next_prev .= "Về trang trước";
				}
				else
				{
					$next_prev .= "<a href=\"index.php?ac=flyear&page=".($curpage-1)."\">Về trang trước</a>";
				}
				$next_prev .= " | ";
				if (($curpage+1) > $pages)
				{
					$next_prev .= "Đến trang sau";
				}
				else
				{
					$next_prev .= "<a href=\"index.php?page=".($curpage+1)."\">Đến trang sau</a>";
				}
				return $next_prev;
			}
		}
?>