<?Php
$uname= $_POST['isim'];
$pass= $_POST['isbn'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab21";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "Select * from kitap where ISBN='$pass' and kitapadi='$uname' ";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
if(is_array($row)){
	echo "Kitap kutuphanemizde kayitlidir ANASAYFA sekmesine giderek kitabi alabilirsiniz. Tesekkurler.";
}	

else{
	echo "Aradiginiz kitap kutuphanemizde kayitli degildir !!";
}

?>
<html>
<head>
<style type = "text/css"> 
		
			#ver{
			background-image:url(anasayfa.jpg);
			background-size:200px 200px;
				position:absolute;
				top:30%;
				left:30%;
				border:2px red solid;
				height:200px;
				width:200px;
			}
			#sorgula{
			background-image:url(cikis.jpg);
			background-size:200px 200px;
				position:absolute;
				top:30%;
				left:60%;
				border:2px red solid;
				height:200px;
				width:200px;
			}
		</style>
</head>
<body>

<center>
<a href="kullanicigirisi.php"><div id="ver">

</div>
<a href="loginform.php"><div id="sorgula">

</div>
</center>

</body>
