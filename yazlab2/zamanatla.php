<?Php
session_start();
?>

<html>
<body>

<center>
<?Php
date_default_timezone_set('Europe/Istanbul');
$nowDate = date("d-m-Y");
echo "Gunun Tarihi >>>> ".$nowDate;
?>
<p></p>
 <div class="container">
 <form method="POST" action="atlandi.php">
 <div class="form-input">
 <input type="text" name="gun" placeholder="Kac gun ileriye ?"/> 
 </div>
 </div>
 <input type="submit" type="submit" value="ONAYLA" onClick="" class="btn-login"/>
 </form>
 </div>
</center>

</body>