
<?php
include("server.php");
include("errors.php");
include("header.php")

?>

<?php
$connect100 = mysqli_connect("localhost" , "root" , "" , "finnal_post");
$select100 = "SELECT * FROM users";
$X = mysqli_query($connect100 , $select100);


// $insert = "INSERT INTO users (fullname , username , email , password) VALUES ('$x1' , '$x2' , '$x3' , '$x4')";
        // $result = mysqli_query($connect , $insert);

//   Functions to Admin
// Admin Can Add Users / Items :

// if (isset($_POST["add-users"])){
//   $z1 = $_POST["name1"];
//   $z2 = $_POST["name2"];
//   $z3 = $_POST["name3"];
//   $z4 = $_POST["name4"];
//   $z5 = $_POST["name5"];

//   $jordan = "INSERT INTO users (id , name , username , password , email) VALUES ('$z1' , '$z2' , '$z3' , '$z4' , '$z5')";
//   mysqli_query($connect100 ,$jordan );
// }
?>
<?php

// Add Users in items 
if (isset($_POST["add-users"])){
  $a1 = $_POST["name1"];
  $a2 = $_POST["name2"];
  $a3 = $_POST["name3"];
  $a4 = $_POST["name4"];
  $a5 = $_POST["name5"];
  
  $addition11 ="INSERT INTO users (fullname, username, email, password) VALUES ('$a2','$a3','$a4','$a5')";
  mysqli_query($connect100 , $addition11);
  }
  

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div class="container" style="margin-top: 30px; margin-bottom: 20px;">
<div class="btn-group container" role="group" aria-label="Basic checkbox toggle button group">
  <input type="checkbox"  class="btn-check" id="btncheck1" autocomplete="off">
  <i class="fas fa-user-plus"></i>
  
<span>&nbsp</span>
  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-danger" for="btncheck2"> Delete <i class="fas fa-user-times"></i></label>
<span>&nbsp</span>
  <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
  <label class="btn btn-primary" for="btncheck3"> Update <i class="fas fa-wrench"></i></label>
<span>&nbsp</span>
  <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
  <label class="btn btn-secondary" for="btncheck4"> Search <i class="fas fa-search"></i></label>
</div>
</div>

<button type="button" class="btn btn-success">Add_Usar </button>
<form class="container" method="$_POST">
<div class="row">
  <div class="col-sm">
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="email" name="name1" class="form-control" id="ID1" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="col-sm">
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">Full_Name</label>
      <input type="email" name="name2" class="form-control" id="ID2" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="col-sm">
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">User_Name</label>
      <input type="email" name="name3" class="form-control" id="ID3" aria-describedby="emailHelp">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="name4" class="form-control" id="ID5" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
  </div>
  <div class="col-sm">
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="txet" name="name5" class="form-control" id="ID4">
    </div>
  </div>
</div>
<button type="button" class="btn btn-success"  name="add-users">Success</button>

</form>
<!-- #########################          table            ########################### -->
<div class="container">
<table class="table table-striped thead-dark" id="Search">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <?php
        while($row = mysqli_fetch_array($X)){
            echo "<tr>";
            echo "<td>".@$row["id"]."</td>";
            echo "<td>".@$row["fullname"]."</td>";
            echo "<td>".@$row["username"]."</td>";
            echo "<td>".@$row["email"]."</td>";
            echo "<td>".@$row["password"]."</td>";
            echo "</tr>";

        } 
        ?>
</table>
</div>



<script>
    // document.getElementById("azzam").style.color="red";
    // document.getElementById ("azzam100").style.backgroundColor="green";


    var NoClk = document.getElementById("Search");
    for (var x = 1 ; x<NoClk.rows.length; x++){
      NoClk.rows[x].onclick = function(){
            document.getElementById("ID1").value = this.cells[0].innerHTML;
            document.getElementById("ID2").value = this.cells[1].innerHTML;
            document.getElementById("ID3").value = this.cells[2].innerHTML;
            document.getElementById("ID4").value = this.cells[3].innerHTML;
            document.getElementById("ID5").value = this.cells[4].innerHTML;
            // document.getElementById(x.rows).style.color="Red";
            // document.getElementById(x.rows).style.backgroundColor="red";
        }
    }
   
</script>

</body>
</html>