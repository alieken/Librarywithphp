<?php
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$uname= $_POST['username'];
$pass= $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab21";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
$sql = "Select * from kullanici where kullaniciadi='$uname' and sifre='$pass' ";
$kullaniciid=5;
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
if($row['kullaniciadi']==$uname && $row['sifre']==$pass && $row['yetki']=='user'){
	$kullaniciid=$row['id'];
	 header("Location: http://localhost/yazlab2/kullanicigirisi.php");
	echo " welcome " .$uname;
}else if($row['kullaniciadi']==$uname && $row['sifre']==$pass && $row['yetki']=='admin'){
	header("Location: http://localhost/yazlab2/admingiris.php"); 
	echo " welcome " .$uname;
	
}
else{
	echo " Failed ";
}
$_SESSION["kullaniciid"] = $kullaniciid;

//$result = mysqli_query("Select * from tablo where kadi='$uname' and sifre='$pass'  ") or die("failed to query".mysqli_error());


?>