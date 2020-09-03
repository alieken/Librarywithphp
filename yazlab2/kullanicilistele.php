<!DOCTYPE html>
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
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                KitapID
            </th>
			 <th>
                KullaniciID
            </th>
			 <th>
                Sure
            </th>
			 <th>
                KitapISBN
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $con=mysqli_connect("localhost","root","","yazlab21") or die("Hata");
            $sql="select * from kitaptakip";
            $res=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_assoc($res)) {
				echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["kitapID"]."</td>";
				echo "<td>".$row["kullaniciID"]."</td>";
                echo "<td>".$row["Sure"]."</td>";
				echo "<td>".$row["kitapISBN"]."</td>";
				echo "</tr>";
            }
            mysqli_close($con);

            ?>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>