<?php

$connect55 = mysqli_connect( "localhost" , "root" , "" , "finnal_post");

if(isset ($_POST["btn"])){
    $folder ="images/".basename($_FILES["image"]["name"]);
    $x1=$_POST["text"];
    $x2=$_FILES["image"]["name"];
$insert ="INSERT INTO picture(text , image) VALUES('$x1','$x2')";
$result55 = mysqli_query($connect55 ,$insert);


}
if(move_uploaded_file($_FILES["image"]["tmp_name"] , $folder)){
    echo "Your photo is upload";
}
else{
    echo " Your photo is error";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICTUER</title>
</head>
<body>
<?php include("header.php") ;?>


<section class="container">

<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject</label>
    <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Subject topic </div>
  </div>
  <input type="file" name="image" class="form-control">
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
</section>



<footer>
    <?php include("footer.php") ;?>
    
    </footer>

</body>
</html>