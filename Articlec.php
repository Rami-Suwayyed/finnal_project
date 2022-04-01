<?php

$connect = mysqli_connect( "localhost" , "root" , "" , "finnal_post");

if(isset ($_POST["btn"])){

$x1=$_POST["name1"];
$x2=$_POST["name2"];

$insert ="INSERT INTO articlec(	Subject , content) VALUES('$x1','$x2')";
$result= mysqli_query($connect ,$insert);


}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articlec</title>
</head>
<body>
<?php include("header.php") ;?>


<section class="container">

<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject</label>
    <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Subject topic </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">content</label>
    <input type="text" name="name2" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
</section>



<footer>
    <?php include("footer.php") ;?>
    
    </footer>

</body>
</html>