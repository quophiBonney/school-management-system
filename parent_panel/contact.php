<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Home</title>
<!--Custom CSS -->
<link rel="stylesheet" href="quophi.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”>

</script>
</head> 
<body>  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<div class="container-fluid">
<a class="navbar-brand" href="#">Logo</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<a class="nav-link active" href="index.php">Home</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="classes.php" role="button" data-toggle="dropdown">Courses</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="agric_science.php">Agric Science</a></li>
    <li><a class="dropdown-item" href="home_economics.php">Home Economics</a></li>
    <li><a class="dropdown-item" href="technical.php">Technical</a></li>
    <li><a class="dropdown-item" href="visual_art.php">Visual Art</a></li>
    <li><a class="dropdown-item" href="business.php">Business</a></li>
  </ul>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="classes.php" role="button" data-toggle="dropdown">Payment</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="payment.php">Pay Fees</a></li>
    <li><a class="dropdown-item" href="#">Pay Books</a></li>
  </ul>
</li>
<li class="nav-item">
<a class="nav-link" href="facilities.php">Facilities</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>
</ul>
</div>
</div>
</nav>
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
  <img src="images/campus.jfif" alt="elohim international school" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="images/k.jpg" alt="marshal school" class="d-block w-100">
  </div>
  <div class="carousel-item">
  <img src="images/slider-3.jpg" alt="africa students" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-target="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-target="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
  <div class="row">
    <div class="col-md-4 text-center">
    <img src="images/phone.png" alt="contact-svg" width="70px" height="70px">
      <p class="text-center p-3">We provide 24/7 support for 
        phone calls so parents can have effective talks with us(management).
      </p>
    </div>
    <div class="col-md-4 text-center">
    <img src="images/idea.png" alt="smiling-svg" width="70px" height="70px">
      <p class="text-center p-3">We provide 24/7 support for 
        phone calls so parents can have effective talks with us(management).
      </p>
      </p>
    </div>
    <div class="col-md-4 text-center">
      <img src="images/contact.png" alt="contact-svg" width="70px" height="70px">
      <p class="text-center p-3">We provide 24/7 support for 
        phone calls so parents can have effective talks with us(management).
      </p>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
  <div class="row">
    <div class="col-md-6">
    <img class="awards-img" src="images/email.png" alt="goodbye svg">
    </div>
    <div class="col-md-6 text-center">
    <h4 class="text-center p-3">WRITE TO US</h4>
            <hr>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="fullName" placeholder="Full Name" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="contact" placeholder="Contact" required="" class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" style="height:150px;" placeholder="Write your message here.."></textarea>
            </div>
            <div class="form-group">
                <button type="button" name="send_message" class="btn btn-primary d-block form-control">SEND MESSAGE</button>
            </div>
        </form>
      </p>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="fluid justify-content-center bg-dark text-center mt-4 p-3 footer-section">
  <div class="row">
    <div class="col-md-3">
      <strong><h5 class="text-center text-danger text-uppercase">Quick Links</h5></strong>
      <ul class="quicklinks">
      <li><a href="index.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="facilities.php">Facilities</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
</ul>
    </div>
    <div class="col-md-3">
    <strong><h5 class="text-center text-danger text-uppercase">Quick Links</h5></strong>
      <ul class="quicklinks">
      <li><a href="index.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
</ul>
    </div>
    <div class="col-md-3">
    <strong><h5 class="text-center text-danger text-uppercase">Location</h5></strong>
      <ul class="quicklinks">
      <li><a href="index.php">Behind Royal Nick</a></li>
      <li><a href="courses.php">Tema Comm 7</a></li>
      <li><a href="contact.php">P.0. Box 21N</a></li>
      <li><a href="dashboard.php">Tema - Ghana</a></li>
</ul>
    </div>
    <div class="col-md-3">
    <h5 class="text-center text-danger text-uppercase">Follow Us</h5>
      <ul class="quicklinks justify-content-center text-center d-flex">
                <li class="mr-2"><a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                <li  class="mr-2"><a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                <li  class="mr-2"><a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                <li  class="mr-2"><a href="https://www.whatsapp.com"><i class="fa-brands fa-whatsapp"></i></a></li>
                
            </ul>
    </div>
  </div>
</div>
<a class="to-top" href="#">TOP</a>
<script>
  const toTop = document.querySelector(".to-top");
  window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100) {
    toTop.classList.add("to-top");
    }else {
   toTop.classList.remove("to-top");
    }
  })
  </script>
</body>
</html>
<script>
function dashboard() {
alert("Dashboard is for only admin. Thank you");
}
</script>