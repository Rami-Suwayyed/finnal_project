
<?php
include("header.php")
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $x = fopen("Data.txt" ,"a" );
    fwrite($x ,"\n" );
    fwrite($x ," Subject : " );
    fwrite($x ,$_POST["Subject"] );
    fwrite($x ,"\n" );
    fwrite($x ," Message : " );
    fwrite($x ,$_POST["message"] );
    fwrite($x ,"\n" );
    fwrite($x ,"\n" );
    fwrite($x ,"*****************   Next ***************************" );
    fwrite($x ,"\n" );
     fclose($x);

}
?>
<div class="container" style="margin-top: 30px;">
<form action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Subject</label>
  <input type="text" class="form-control" name="Subject" id="exampleFormControlInput1" placeholder="Subject">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message textarea</label>
  <textarea class="form-control"name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3 container">
<button name="btn" class="btn btn-success">Send</button>
</div>
</form>
</div>