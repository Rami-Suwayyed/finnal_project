
<?php
include("server.php");
include("header.php");


?>


<div class="container" style="margin-top: 30px;">
<form class="container"  action="register.php" method="POST" >
    <?php include ("errors.php")?>
  <div class="form-group">
    <label for="exampleInputEmail1">Fullname:</label>
    <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Username :</label>
    <input type="text" name="name2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Emai</label>
    <input type="email" name="name3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password :</label>
    <input  type="password" name="password1" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1">Re-enter-password</label>
    <input  type="password" name="password2" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="row" style="margin-top: 10px;">
    <div class="col-sm">
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <div class="col-sm">
     <button  type="submit" name="btn1" class="btn btn-dark"> Register </button>
    </div>
  </div>
    <div class="col-sm">
      <label class="btn btn-link">Do You Have An Account  ??????</label>
    </div>
    <div class="col-sm">
     <a  class="btn btn-outline-primary" href="login.php">Login</a>
    </div>
  
</form>
</div>