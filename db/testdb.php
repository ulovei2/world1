<?php
require('./db/connect-db.php');  //เรียกใช้ไฟล์.ในfolder db ไฟล์
$sql_office = "SELECT * from tbl_office";
$query_office = mysqli_query($conn,$sql_office);
while($obj= mysqli_fetch_array($query_office))
{echo $obj["office_name"]."   ".$obj["office"]."<br>";		
	
}



?>

