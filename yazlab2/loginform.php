<?php 
 /*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutuphane";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
/*
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    echo "$uname $password";
    $sql="select * from tablo where kadi='".$uname."'AND sifre='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        //exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        //exit();
    }
        
}
*/

/*
function login(){
	
	$uname=$_POST['username'];
    $password=$_POST['password'];
    echo "$uname $password";
	
}
*/
/*

$sql = "SELECT kadi,sifre FROM tablo";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

    // her bir satırı döker

    while($row = $result->fetch_assoc()) {

        echo "    kadi: " . $row["kadi"]. " - sifre: " . $row["sifre"]. "    ";
	
    }

} else {

    echo "0 results";

}

$conn->close();
*/
?>

<!DOCTYPE html>
<html>
<head>
 <title> Login Form in HTML5 and CSS3</title>
 <link rel="stylesheet" a href="style.css">
 <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
 <div class="container">
 <img src="login.png"/>
 <form method="POST" action="process.php">
 <div class="form-input">
 <input type="text" name="username" placeholder="Username"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="Password"/>
 </div>
 <input type="submit" type="submit" value="LOGIN" onClick="" class="btn-login"/>
 </form>
 </div>
</body>
</html>