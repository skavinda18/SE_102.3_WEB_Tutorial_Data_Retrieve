<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nsbm1";

$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection faild");
}
$sql="select * from student";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	echo $row["Name"] . " " . $row["ID"] . "<br>";

	}
}
else {
	echo "No Data";
}
?>