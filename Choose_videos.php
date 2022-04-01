<?php

 $con = mysqli_connect( "localhost" , "root" , "" , "finnal_post");

if(isset ($_POST["upload"])){
    $name55 =@$_FILES["file"]["name"];
    $tmp =@$_FILES["file"]["tmp_name"];
    $x1=$_POST["vid_name"];



    move_uploaded_file($tmp ,"videos/".$name55);
    $insert = "INSERT INTO videos (text , video) VALUES('$x1','$name55')";
    $result = mysqli_query($con , $insert);

    if($result == 1){
        echo "your video ges succefully";
    }
    else{
    echo " Your photo is error";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOS</title>
</head>
<body>
<?php include("header.php") ;?>


<section class="container">

<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject</label>
    <input type="text" name="vid_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Subject topic </div>
  </div>
  <input type="file" name="file" class="form-control">
  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
</form>
</section>








<?php

$sel = "SELECT * FROM videos";

$ress =mysqli_query($con ,$sel);

while($row = mysqli_fetch_assoc($ress)){?>


<div class="div">
<video src="videos/<?php echo $row["video"]?>" controls><?php echo $row["text"]?></video>
</div>
<?php

}
?>








<footer>
    <?php include("footer.php") ;?>
    
    </footer>

</body>
</html>