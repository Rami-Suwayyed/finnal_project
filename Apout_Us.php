<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <Style>
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}


</Style>
</head>
<body>
    
<?php include("header.php") ;?>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>
<div class="container">
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <img src="img/57.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="btn btn-secondary">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img src="img/53.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="btn btn-secondary">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img src="img/52.jfif" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="btn btn-secondary">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</div>

<footer>
    <?php include("footer.php") ;?>
    
    </footer>

</body>
</html>