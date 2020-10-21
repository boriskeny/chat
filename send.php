<?php 
if(isset($_POST['s']))
{
	$db_username = 'root';
    $db_password = '';
    $db_name     = 'userm';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
    $mess=mysqli_real_escape_string($db,htmlspecialchars($_POST['s']));
	
	
	$idsql =' SELECT id FROM user where login="'.$user.'" ' ;
    $rid=mysqli_query($db, $idsql);
    $id=mysqli_num_rows($rid);
    $iduser= $id['id'];

                              
	$sql = "INSERT INTO message(mess, id_user) VALUES ('".$mess."','".$id."')";
	mysqli_query($db,$sql); 
}else{
	echo 'erreur erreur';
}	



 ?>