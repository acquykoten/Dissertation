<?php
echo $id=$_REQUEST['idE'];
echo $name=$_REQUEST['idF'];
$sql ='SELECT * FROM episode WHERE id_film = :id AND episode.name = :ep';
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->bindParam(":ep",$name);
$stmt->execute();
$r=$stmt->fetch(PDO::FETCH_BOTH);
echo 'aaaaaa';
echo'<iframe src="'.$r['url1'].'" frameborder="0" allowfullscreen height="100%"
							width="100%"></iframe>';