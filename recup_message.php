<?php 
	$sql="SELECT login, mess FROM user u, message m WHERE u.id=m.id_user";
	$result=  mysqli_query($db,$sql); 
	if(mysqli_num_rows($result)>0){
		while($chat=  mysqli_fetch_array($result)){



 ?>