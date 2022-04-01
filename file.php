<?php
if (isset($_POST["btn"])){

    $File_X = @$_FILES["name1"];


    copy ($File_X["tmp-name"] ,$File_X["name"] );
}

// if (@$_SERVER["REQUEST_METHOD"]=="POST"){
//        @$File_X = @$_FILES["Choose"];


//    @copy (@$File_X["tmp_name"] ,@$File_X["name"] );

// }


?>


<form action="file.php" method="POST" enctype="multipart/form-data">
<p> Upload Your File :</p>
<input type="file" name="Choose" accept=".pdf , .docx"> <br> <br>

<button type="submit" name="Send">Send</button>


</form>