<?php
//   Connect to all Pages In my Projects:
session_start();
//  Connect to my Database :
$connect = mysqli_connect( "localhost" , "root" , "" , "finnal_post");
// Variable Decerlaration :
$x1 = "";
$x2 = "";
$x3 = "";
$x4 = "";
$x5 = "";

$errors = array ();
$_SESSION["success"] = "";
//  Collect Data Frome Form :
if (isset($_POST["btn1"])){
    $x1 = $_POST["name1"];
    $x2 = $_POST["name2"];
    $x3 = $_POST["name3"];
    $x4 = $_POST["password1"];
    $x5 = $_POST["password2"];

    //  Validation :
    if (empty($x1)){
        array_push($errors , "Full Name is required");
    }
    // if (is_string($x1)){
    //     array_push ($errors , "Full Name Mustn have at least one number");
    // }
   
    if (empty($x2)){
        array_push($errors , "user name is required");
    }
    if (empty($x3)){
        array_push($errors , "email is required");
    }
    if (empty($x4)){
        array_push($errors , "password is required");
    }
    

    if ($x4 != $x5){
        array_push($errors , "Passwords Dont Match");
    }

    //  Insert Data To Tables :
    if (count($errors)==0){
        $insert = "INSERT INTO users (fullname , username , email , password) VALUES ('$x1' , '$x2' , '$x3' , '$x4')";
        $result = mysqli_query($connect , $insert);

        $_SESSION["name2"] = $x2;
        $_SESSION["success"] = "Register succefully";
    }
}



//    Login Page :

if (isset ($_POST["log"])){
    $y1 = $_POST["email"];
    $y2 = $_POST["password"];
    if (empty($y1)){
        array_push($errors , "email is required");
    }
   
    $compare = "SELECT * FROM users WHERE email = '$y1' and password = '$y2' ";
    $result2 = mysqli_query($connect , $compare);


}

// if (@mysqli_num_rows($result2) == TRUE ){
//     header("location:home.php");

// }

// else{
//     array_push($errors , "Email or password not correcr");
// }



//    Admin Page :
if (isset ($_POST["adminlogin"])){
    $t1 = $_POST["admin"];
    $t2 = $_POST["admin10"];

    $compare2 = "SELECT * FROM admin WHERE email = '$t1' and password = '$t2'";
    $result3 = mysqli_query($connect , $compare2);

}
// if (@mysqli_num_rows($result3)==1){
//     header("location:Dashboard.php");

// }

// else{
//     array_push($errors , "Email or password not correcr");

// }



?>