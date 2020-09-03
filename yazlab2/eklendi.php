<?Php
$uname= $_POST['isim'];
$pass= $_POST['isbn'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab21";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "Select * from kitap where ISBN='$pass' ";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
if(is_array($row)){
	echo "Ayni ISBN numarasindan veritabanina kayitli olan bir kitap bulunmaktadir. Lutfen kontrol ediniz !";
}	

else{
	$sql = "INSERT INTO kitap(kitapadi, ISBN) VALUES ('$uname','$pass')";
$result = $conn->query($sql);
echo "Tebrikler kitap ekleme isleminiz basariyla tamamlandi !!!";
}

?>
<html>
<head>
<style type = "text/css"> 
		
		#al{
			background-image:url(ekle.jpg);
			background-size:200px 200px;
			position:absolute;
			top:30%;
			left:10%;
			border:2px red solid;
			height:200px;
			width:200px;
			}
			#ver{
			background-image:url(anasayfa.jpg);
			background-size:200px 200px;
				position:absolute;
				top:30%;
				left:40%;
				border:2px red solid;
				height:200px;
				width:200px;
			}
			#sorgula{
			background-image:url(cikis.jpg);
			background-size:200px 200px;
				position:absolute;
				top:30%;
				left:70%;
				border:2px red solid;
				height:200px;
				width:200px;
			}
		</style>
</head>
<body>

<center>

<a href="eklesahte.php"><div id="al">

</div>
</a>
<a href="admingiris.php"><div id="ver">

</div>
<a href="loginform.php"><div id="sorgula">

</div>
</center>

</body>
