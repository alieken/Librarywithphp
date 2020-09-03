<?Php
session_start();
//echo "Favorite color is " . $_SESSION["kullaniciid"] . ".<br>";
$kullaniciid=$_SESSION["kullaniciid"];
//echo "$_SESSION["kullaniciid"]";
//print_r($_SESSION);

$uname= $_POST['isim'];
$pass= $_POST['isbn'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab21";

$con=mysqli_connect("localhost","root","","yazlab21") or die("Hata");
            $sql="select * from kitaptakip where kullaniciID = '$kullaniciid' ";
            $res=mysqli_query($con,$sql);
			
   while ($row=mysqli_fetch_assoc($res)) {
	   if($row['Sure']< 0){
		   echo "Kutuphaneye teslim etmeniz gereken zamani gecmis kitap bulunmaktadir. Yeni kitap alamazsiniz !!!";
		   goto a;		   		   
	   }
			
            }
  mysqli_close($con);







// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "Select * from kitaptakip where kullaniciID='$kullaniciid' ";

$result = $conn->query($sql);
$numrows = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if(is_array($row)){
	if($numrows<3){
		$sql = "Select * from kitap where ISBN='$pass' ";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);
	$kitapid=3;
			if(is_array($row)){
			$kitapid=$row["id"];
			$sql = "Select * from kitaptakip where kitapID='$kitapid' ";
			$result = $conn->query($sql);
			$row=mysqli_fetch_array($result);
				if(is_array($row)){
					echo "Bu kitap su an baska bir kullanicinin uzerinde lutfen teslim edilmesini bekleyiniz. Tesekkurler.";
				}else{
					$sql = "INSERT INTO kitaptakip(kitapID, kullaniciID,Sure,kitapISBN) VALUES ('$kitapid','$kullaniciid',7,'$pass')";
					$result = $conn->query($sql);
					echo "Sectiginiz kitap 7 gunluk sureyle size teslim edilmistir. Lutfen kitabi zamaninda teslim ediniz !!!";
				}
			}	
			else{
				echo "Kutuphanemizde boyle bir kitap bulunmamamktadir !!!!";
			}

	}else{
		echo "Kitap alma kapasitesini doldurdunuz. Oncelikle elinizde bulunan bir kitabi kutuphaneye teslim ediniz !!!";
	}
	
	
}else{
	$sql = "Select * from kitap where ISBN='$pass' ";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result);
$kitapid=3;
if(is_array($row)){
	$kitapid=$row["id"];
	$sql = "Select * from kitaptakip where kitapID='$kitapid' ";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);
	if(is_array($row)){
		echo "Bu kitap su an baska bir kullanicinin uzerinde lutfen teslim edilmesini bekleyiniz. Tesekkurler.";
	}else{
		$sql = "INSERT INTO kitaptakip(kitapID, kullaniciID,Sure,kitapISBN) VALUES ('$kitapid','$kullaniciid',7,'$pass')";
		$result = $conn->query($sql);
		echo "Sectiginiz kitap 7 gunluk sureyle size teslim edilmistir. Lutfen kitabi zamaninda teslim ediniz !!!";

	}
}	
else{
	echo "Kutuphanemizde boyle bir kitap bulunmamamktadir !!!!";
}


	
	
}

a:

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
