<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>




<!DOCTYPE html>
<html lang="en">


<head>
   
    <title>Project</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
</head>



<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a style="padding-left: 15px;" class="navbar-brand" href="#">JIR LOGO HOUSE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
     
    </ul>
    <form style="padding-right: 10px;" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Neville Brody</h3>
        <p>“Digital design is like painting, except the paint never dries.”</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Steve Jobs-</h3>
        <p>“Design is not just what it looks like and feels like. Design is how it works.”</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Torrie T. Asai-</h3>
        <p>“Creativity is nothing but a mind set free.”</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
     
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="img/4.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">I am Jannatul Islam Rabbi</h2>
        <p>I am a professional logo designer. My company name is JIR LOGO HOUSE. We mainly make mordern logo. we also make Bussiness card, Template, Banners, Flyers etc.</p>
    <a href="about.php" class="btn btn-success">See more</a>
    </div>
    </div>
    </div>

</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-4 col-md-4 col-12">


                 <div class="card" style="width:400px">
                     <img class="card-img-top" src="img/5.jpg" alt="Card image">
                  
                   <div class="card-body">
         <h4 class="card-title">LOGO</h4>
         <p class="card-text">Choice your design.</p>
         <a href="#" class="btn btn-primary">See More</a>
                   </div>

                 </div> 


            </div> 


            
            <div class="col-lg-4 col-md-4 col-12">


                 <div class="card" style="width:400px">
                     <img class="card-img-top" src="img/6.jpg" alt="Card image">
                  
                   <div class="card-body">
         <h4 class="card-title">BUSSINESS CARD</h4>
         <p class="card-text">Choice your design.</p>
         <a href="#" class="btn btn-primary">See More</a>
                   </div>

                 </div> 


            </div> 
            
            <div class="col-lg-4 col-md-4 col-12">


                 <div class="card" style="width:400px">
                     <img class="card-img-top" src="img/7.jpg" alt="Card image">
                  
                   <div class="card-body">
         <h4 class="card-title">BANNER</h4>
         <p class="card-text">Choice your design.</p>
         <a href="#" class="btn btn-primary">See More</a>
                   </div>

                 </div> 


            </div> 

        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">OUR DESIGN</h2>
    </div>

    <div class="container-fluid">
          <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/9.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/11.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/14.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/18.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/17.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/13.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/12.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/16.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/20.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/15.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/19.jpg" class="img-fluid pb-4">
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                  <img src="img/10.jpg" class="img-fluid pb-4">
                  </div>
          </div>
    </div>

</section> 




  <section id="social-media">
      <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icon">
          <a href="#"><img src="img/fac.png"></a>
          <a href="#"><img src="img/f.png"></a>
          <a href="#"><img src="img/ff.png"></a>
          <a href="#"><img src="img/fff.png"></a>
          <a href="#"><img src="img/snap.png"></a>
          <a href="#"><img src="img/w.png"></a>
        </div>
      </div>
    </section> 


<section>
  <div class="container">
  <div class="row">
    
    <div class="col-lg-4 col-md-4 col-sm-12"  style="background-color: #b2a9a9; padding-top: 10px;" align="center" >
     
    </div>

       <div class="col-lg-4 col-md-4 col-sm-12"  style="background-color: #b2a9a9; padding-top: 15px; padding-bottom: 15px;" align="center">
      <h2>Order Here</h2>
      <form action="registration2.php" method="post">
        
                 <div class="form-group">
                  <label>Design Name</label>
                  <input type="text" name="Name" class="form-control">
                 </div>

                 <div class="form-group">
                   <label>Discription</label>
                   <textarea class="form-control" name="about"></textarea>
                  </div>
                 <button type="submit" class="btn btn-primary">Submit</button>


      </form>
    </div>

        <div class="col-lg-4 col-md-4 col-sm-12"  style="background-color: #b2a9a9" align="center">
     
    </div>

  </div>
</div>

</section>


<section>

	<div style=" margin-right: 101px; margin-bottom: 10px; padding-bottom: 10px; padding-top: 20px;" align="right">

		<h3>Logout here</h3>


		<a href="logout.php" class="btn btn-success">LOGOUT</a>
	
	</div>

</section>


<section id="footer">
      <img src="img/r.png" class="footer-img">

      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-box">
            <img src="img/fti.png">
            <p>Please visit our website and learn about Website development , Digital marketing , Programming , Graphics Designing etc.</p>
          </div>
          <div class="col-md-4 footer-box">
            <p><b>CONTACT US</b></p>
            <p><i class="fas fa-map-marker-alt"></i>JIR DEVELOPER, DHAKA,BANGLADESH</p>
            <p><i class="fas fa-phone"></i>+8801709-681330</p>
            <p><i class="fas fa-envelope"></i>jannatul1330@gmail.com</p>  
        </div>
        <div class="col-md-4 footer2-box">
          <p><b>SUBSCRIBE NEWSLETTER</b></p>
          <input type="email" class="form-control" placeholder="Your Email">
          <button type="button" class="btn btn-primary">SUBSCRIBE</button>
        </div>
        </div>
        <hr>
        <p class="me">@JIR DEVELOPER</p>
      </div>
    </section>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 