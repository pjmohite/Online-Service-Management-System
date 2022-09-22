<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">

 <title>SERVICE</title>
</head>
<style>
  .collapse navbar-collapse
  {
    background-color: black;
  }
</style>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">SM</a>
  <span class="navbar-text">Customer's Happiness is our Aim</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
   <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
    <li class="nav-item"><a href="Admin/login.php" class="nav-link">Admin Login</a></li>
   </ul>
  </div>
 </nav> <!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image:url(images/in.jpg);">
  <div class="myclass mainHeading">
   <h1 class="text-uppercase text-warning font-weight-bold">Welcome to SM</h1>
   <p class="font-italic">Customer's Happiness is our Aim</p>
   <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
   <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
  </div>
 </header> <!-- End Header Jumbotron-->

 <!-- Start Introduction Section -->
 <div class="container">
  <div class="jumbotron">
   <h3 class="text-center">Online Services</h3>
   <p>
    SM Services is India’s leading chain of multi-brand Electronics and Electrical service workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class Electronic Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care services to keep the devices fit and healthy and customers happy and smiling”.
    
    With well-equipped Electronic Appliances service centres and fully trained mechanics, we provide quality services with excellent packages that are designed to offer you great savings.
    
    Our state-of-art workshops are conveniently located in many
    cities across the country. Now you can book your service online by doing Registration.    
   </p>
  </div>
 </div> <!-- End Introduction Section Container -->

 <!-- Start Services Section -->
 <div class="container text-center border-bottom" id="Services">
  <h2>Our Services</h2>
  <div class="row mt-4">
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
    <h4 class="mt-4">Electronic Appliances</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
    <h4 class="mt-4">Preventive Maintenance</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
    <h4 class="mt-4">Fault Repair</h4>
   </div>
  </div>
 </div> <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form Container -->

 <!-- Start Happy Customer -->
 <div class="jumbotron bg-info">
   <div class="container">
    <h2 class="text-center text-white">Happy Customers</h2>
    <div class="row mt-5">
     <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/img11.jfif" class="img-fluid" style="border-radius:100px;" alt="avt1">
        <h4 class="card-title">Akash Manik</h4>
        <p class="card-text">This is really good website and I did suggest it to others who doesnt have time to go to shop.</p>
       </div>
      </div>
     </div> <!-- End 1st Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/p4.jfif" class="img-fluid" style="border-radius:100px;" alt="avt2">
        <h4 class="card-title">Athiya Shelar</h4>
        <p class="card-text">Honestly I really had different experience that I never have while using this website.Thank you so much.</p>
       </div>
      </div>
     </div> <!-- End 2nd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/img14.jpg" class="img-fluid" style="border-radius:100px;" alt="avt3">
        <h4 class="card-title">Avinash Pawar</h4>
        <p class="card-text">It was my first time using such kind of website for service but the experience was good.Suggest to others.</p>
       </div>
      </div>
     </div> <!-- End 3rd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/p5.jfif" class="img-fluid" style="border-radius:100px;" alt="avt4">
        <h4 class="card-title">Priya Gupta</h4>
        <p class="card-text">The overall process was very easy to understand and it also reduces my time and extra efforts.</p>
       </div>
      </div>
     </div> <!-- End 4th Column -->
    </div>
   </div>
 </div> <!-- End Happy Customer -->

 <!-- Start Contact US -->
 <div class="container" id="Contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
   <!-- Start 1st Column -->
    <?php include('contactform.php') ?>
   <!-- End 1st Column -->
   <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
    <strong>Headquarter:</strong><br>
    SM pvt Ltd,<br>
    Narhe ,Pune - 411041<br>
    Phone: +91 9887654734<br>
    <a href="#" target="_blank">www.sm.com</a><br>
    <br> <br>
    <strong>Branch:</strong><br>
    SM pvt Ltd,<br>
    Ambegaon Bk,<br>
    Pune-411046<br>
    Phone: +91 9956473546<br>
    <a href="#" target="_blank">www.sm.com</a><br>    
   </div> <!-- End 2nd Column -->
  </div>
 </div> <!-- End Contact US -->

 <!-- Start Footer -->
 <footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
   <div class="row py-3">
    <div class="col-md-6"> <!-- Start 1st Column -->
     <span class="pr-2">Follow Us: </span>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
    </div> <!-- End 1st Column -->
    <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
     <small>Designed by PJNIKS &copy; 2022</small>
    </div> <!-- End 2nd Column -->
   </div>
  </div>
 </footer>

 <!-- JavaScript -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
</body>
</html>