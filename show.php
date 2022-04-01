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

$connectToo = mysqli_connect( "localhost" , "root" , "" , "finnal_post");
$Test = $_GET["id"];
$select100 = "SELECT * FROM articlec WHERE id=$Test";

$resaltTest = mysqli_query($connectToo ,$select100);

$row = mysqli_fetch_assoc($resaltTest);
?>

<?php 
include("header.php");
?>



<div class="card Rami">
  <div class="card-body">
        <h1 class="card-title"><?php echo $row["Subject"]?></h1>
        <p class="card-text"><?php echo $row["content"]?></p>
        <h5 class="card-title"><?php echo $row["id"]?></h5>
</div>





<?php 
include("footer.php");
?>    
</body>
</html>