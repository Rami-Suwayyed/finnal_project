<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>

    <style>
        .Rami{

            margin-top: 200px;
            margin-bottom: 100px;
        }

    </style>
</head>
<body>
<?php 

$connect56 = mysqli_connect( "localhost" , "root" , "" , "finnal_post");
$select56= "SELECT * FROM picture";

$resalt55 = mysqli_query($connect56 ,$select56);

$row = mysqli_fetch_assoc($resalt55);
?>

<?php 
include("header.php");
?>



<div class="card Rami">
  <div class="card-body">
        <!-- <h1 class="card-title"><?php echo $row["Subject"]?></h1> -->
        <img src="<?php echo"images/".$row["image"]?>">
        <h5 class="card-title"><?php echo $row["id"]?></h5>
</div>





<?php 
include("footer.php");
?>    
</body>
</html>