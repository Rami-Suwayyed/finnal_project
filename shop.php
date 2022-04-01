<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="animate.min.css">



    <style>
        .images img{
            width: 100%;
            height: 300px;
        }
        .images{
            /**********  important***********/
            position: relative;
            overflow: hidden;

        }

        .images .img2{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            opacity: 0;
            transform: scale(300);
            transition: 0.5s;
        }

        .images:hover .img2{
            opacity: 1;
            transform: scale(1);
        }

    .mydiv ul{
        position: absolute;
        left: 25px;
        top: 50%;
        transform: translateY(-50%);
        list-style: none;

    }

    .mydiv ul li a:hover::before{
        content: attr(data-tip);
        color: red;
        background-color: darkblue;
        padding: 10px 20px;
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        white-space: nowrap;
    }

    .mydiv:hover ul li{
        transform: translateX(0);

    }

    #id1{
        color: darkgreen;

    }

    #id2{
        color: crimson;
        text-decoration: line-through;

    }
</style>
</head>
<body>

<?php include("header.php") ;?>

    <section class="sec1 text-center wow animate__wobble" data-wow-duration="4s" data-wow-iteration="10" data-wow-delay="4s" >
        <h1> welcome to Home Project</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/1.webp" alt="">
                              <img class="img2" src="img/2.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare" ><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search" ><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
    
                    </div>

                    <div>
                        <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                        <h1><span>200$</span> <span>100$</span></h1>
                    </div>

                </div>

                <!--     DIV2********************* -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/3.webp" alt="">
                              <img class="img2" src="img/4.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare"><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search"><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>


                <!-- *****DIV3************ -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/5.jpg" alt="">
                              <img class="img2" src="img/6.jpg" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>



                <!-- *********DIV4************* -->

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/7.jfif" alt="">
                              <img class="img2" src="img/8.jpg" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span id="id1">200$</span> <span id="id2">100$</span></h1>
                        </div>
    
                    </div>

                </div>
              
            </div>
        </div>
    </section>

    <!--    Strat Section 2 -->


    <section class="sec1 text-center wow animate__rubberBand" data-wow-duration="4s" data-wow-iteration="10"  data-wow-offset="60">
        <h1> welcome to my E-commece Project</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/9.jfif" alt="">
                              <img class="img2" src="img/10.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare" ><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search" ><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
    
                    </div>

                    <div>
                        <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                        <h1><span>200$</span> <span>100$</span></h1>
                    </div>

                </div>

                <!--     DIV2********************* -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/11.jfif" alt="">
                              <img class="img2" src="img/12.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare"><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search"><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>


                <!-- *****DIV3************ -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/13.jfif" alt="">
                              <img class="img2" src="img/14.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>



                <!-- *********DIV4************* -->

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/15.jfif" alt="">
                              <img class="img2" src="img/16.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span id="id1">200$</span> <span id="id2">100$</span></h1>
                        </div>
    
                    </div>

                </div>
              
            </div>
        </div>
    </section>

    <!--    Start section 3************ -->

    <section class="sec1 text-center wow animate__fadeInBottomLeft" data-wow-duration="4s" data-wow-iteration="10"  data-wow-offset="120">
        <h1> welcome to my E-commece Project</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/17.jfif" alt="">
                              <img class="img2" src="img/18.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare" ><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search" ><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
    
                    </div>

                    <div>
                        <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                        <h1><span>200$</span> <span>100$</span></h1>
                    </div>

                </div>

                <!--     DIV2********************* -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/19.jfif" alt="">
                              <img class="img2" src="img/20.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare"><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search"><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>


                <!-- *****DIV3************ -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/21.jfif" alt="">
                              <img class="img2" src="img/22.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>



                <!-- *********DIV4************* -->

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/23.jfif" alt="">
                              <img class="img2" src="img/24.jpg" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span id="id1">200$</span> <span id="id2">100$</span></h1>
                        </div>
    
                    </div>

                </div>
              
            </div>
        </div>
    </section>


    <!--    Start Section 4******************** -->


    <section class="sec1 text-center">
        <h1> welcome to my E-commece Project</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/25.jfif" alt="">
                              <img class="img2" src="img/26.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare" ><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search" ><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
    
                    </div>

                    <div>
                        <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                        <h1><span>200$</span> <span>100$</span></h1>
                    </div>

                </div>

                <!--     DIV2********************* -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/27.jfif" alt="">
                              <img class="img2" src="img/28.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="" data-tip="Like"><i class="fas fa-heart"></i></a></li>
                              <li><a href="" data-tip="Compare"><i class="fas fa-desktop"></i></a></li>
                              <li><a href="" data-tip="Search"><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>


                <!-- *****DIV3************ -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/29.jfif" alt="">
                              <img class="img2" src="img/30.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span>200$</span> <span>100$</span></h1>
                        </div>
    
                    </div>

                </div>



                <!-- *********DIV4************* -->

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mydiv">
                        <div class="images">
                          <a href="">
                              <img class="img1" src="img/31.jfif" alt="">
                              <img class="img2" src="img/32.jfif" alt="">
                          </a>
    
                          <ul>
                              <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href=""><i class="fas fa-heart"></i></a></li>
                              <li><a href=""><i class="fas fa-desktop"></i></a></li>
                              <li><a href=""><i class="fas fa-search"></i></a></li>
                          </ul>
                        </div>
                        <div>
                            <h3><a href="Tshirt.html"> Man Tshirt</a></h3>
                            <h1><span id="id1">200$</span> <span id="id2">100$</span></h1>
                        </div>
    
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

<script src="jquery.min.js"></script>
<script src="wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>