<?Php
session_start();
$atilangun= $_POST['gun'];
//echo "$atilangun";
date_default_timezone_set('Europe/Istanbul');
$nowDate = date("d-m-Y");
//echo "Gunun Tarihi....:".$nowDate;
//echo "<br/>";
$gun = 5;
$gun = (int)$atilangun;
//echo "$gun";
$newDate = strtotime('1 day',strtotime($nowDate));
for($sayi = 0; $sayi < $atilangun-1 ; $sayi++) {
	$newDate = date('d-m-Y' ,$newDate );
   $newDate = strtotime('1 day',strtotime($newDate));
}
$newDate = date('d-m-Y' ,$newDate );
$_SESSION["tarih"] = $newDate;


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
</head>
<body>

<center>
<?Php
date_default_timezone_set('Europe/Istanbul');
$nowDate = date("d-m-Y");
echo "Gunun Tarihi >>>> ".$newDate;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yazlab21";
// Create connection
   $con=mysqli_connect("localhost","root","","yazlab21") or die("Hata");
            $sql="select * from kitaptakip";
            $res=mysqli_query($con,$sql);
			
   while ($row=mysqli_fetch_assoc($res)) {
			$gunsayisi= $row['Sure']-$atilangun;
			$sql = "UPDATE kitaptakip SET Sure=$gunsayisi";
			$result = $con->query($sql);
			//$numrows = mysqli_num_rows($result);
            }
            mysqli_close($con);
?>
</center>
<center>
<a href="admingiris.php"><div id="ver">

</div>
<a href="loginform.php"><div id="sorgula">

</div>
</center>
</body>
</html>