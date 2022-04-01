<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <title>Home</title>

    <style>
        .sec1{
            width: 100%;
            height: 600px;
            color: red;
        }

        .azzam{
            margin-top: 280px;

        }

        .azzam p{
            color: gold;

        }
        .azzam button{
            color: crimson;
            border-radius: 50px;

        }
        .resalt0{
            margin-left: 30px;

        }



    </style>
</head>
<body>


<?php include("header.php") ;?>
    <section class="sec1 text-center"  data-vide-bg="laptop">
    <h1> welcome to my E-commece Project</h1>
        <h1><span class="text"></span></h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="azzam">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, quaerat repudiandae. Vero nemo aliquam alias adipisci quo eligendi veniam, earum, voluptates est, suscipit ratione voluptas eveniet atque ea iusto officia?</p>
                        <a href=""><button class="btn btn-success">Lets Start</button></a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="azzam">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, quaerat repudiandae. Vero nemo aliquam alias adipisci quo eligendi veniam, earum, voluptates est, suscipit ratione voluptas eveniet atque ea iusto officia?</p>
                        <a href=""><button class="btn btn-success">Lets Start</button></a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <?php
    
    $connectOne = mysqli_connect( "localhost" , "root" , "" , "finnal_post");

    $selectt = "SELECT * FROM articlec";

    $resaltToo = mysqli_query($connectOne ,$selectt);

    if(isset($resaltToo)){
      while($row = mysqli_fetch_assoc($resaltToo)){?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col resalt0">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["id"]?></h5>
        <h1 class="card-title"><?php echo $row["Subject"]?></h1>
        <p class="card-text"><?php echo $row["content"]?></p>
      </div>
      <div class="card-footer text-center">
      <a href="show.php?id=<?php echo$row["id"]?>"><button type="button" class="btn btn-danger">Danger</button></a>
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<?php
      }

    } 
    
    
    ?>





    <footer>
    <?php include("footer.php") ;?>
    
    </footer>





<script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" integrity="sha512-xbl0smDcemxvxGBO15P8UbrrP1TWMfT2VQq0uggureCJQGr7umzx72azYCQLospxRd9RvMqRGJcKjrmbJ5cWQA==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="hellow.js"></script>
    <script src="wow.min.js"></script>
    <script src="jquery.vide.min.js"></script>
    <script src="typed.min.js"></script>


    <!--   *************** Start Typing Library Cding****************** -->
    <script>
        var x = new Typed (".sec1 .text",{
            strings:["" , "<i class='fas fa-smile-wink'></i>welcome t jrdan" , "<i class='fas fa-laugh-squint'></i>are you good" , "<i class='fas fa-laugh-squint'></i>tmrrw i jkhfiufhgitggrhyht"],
            typeSpeed:250,
            backSpeed:50,
            loop:true,
        });

    </script>
    <!--   *************** End Typing Library Cding****************** -->

</body>
</html>