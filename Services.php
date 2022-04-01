<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <style>
        .azzam{
            margin-bottom: 15px;
            margin-top: 15px;

        }


        .azzam img{
            width: 100%;
            height: 250px;
        }





    </style>

</head>
<body>
<?php include("header.php") ;?>
    <section class="sec text-center">
        <h1> welcome to my mix section</h1>
        <div class="button">
            <button class="btn btn-success" data-filter=".all">all</button>
            <button class="btn btn-danger" data-filter=".Front-end"> Front-end</button>
            <button class="btn btn-primary" data-filter=".Back-end"> Back-end</button>
            <button class="btn btn-secondary" data-filter=".Python"> Python</button>
            <button class="btn btn-info" data-filter=".Java"> Java</button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mix Front-end python Java all ">
                    <div class="azzam">
                        <img src="img/50.jfif" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Front-end all">
                    <div class="azzam">
                        <img src="img/51.jfif" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mix Front-end all">
                    <div class="azzam">
                        <img src="img/52.jfif" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Python all">
                    <div class="azzam">
                        <img src="img/53.jpg" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Python all">
                    <div class="azzam">
                        <img src="img/54.jfif" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Java Front-end python all ">
                    <div class="azzam">
                        <img src="img/56.jfif" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Java all">
                    <div class="azzam">
                        <img src="img/57.jpg" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Front-end all">
                    <div class="azzam">
                        <img src="img/58.jpeg" alt="">
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mix Front-end all">
                    <div class="azzam">
                        <img src="img/59.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mix Back-end all">
                    <div class="azzam">
                        <img src="img/60.jfif" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mix Back-end all">
                    <div class="azzam">
                        <img src="img/61.jfif" alt="">
                    </div>
                </div>
            </div>
        </div>




    </section>
    








    <footer>
    <?php include("footer.php") ;?>
    
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="mixitup.min.js"></script>
<script>
    var azzam = mixitup (".container");
</script>
</body>
</html>