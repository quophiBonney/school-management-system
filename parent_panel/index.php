<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="images/svg.png">
<title>Home</title>
<!--Custom CSS -->
<link rel="stylesheet" href="quophi.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g=="
crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css" integrity="sha512-hj9rznBPdFg9A4fACbJcp4ttzdinMDtPrtZ3gBD11DiY3O1xJfn0r1U5so/J0zwfGOzq9teIaH5rFmjFAFw8SA==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Courses</a>
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
<div class="ml-auto">
  <button type="button" class="btn btn-primary"><a class="text
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
    <img src="images/slider-3.jpg" alt="Los Angeles" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="images/k.jpg" alt="Chicago" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="images/campus.jfif" alt="New York" class="d-block w-100">
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
    <div class="col-md-12 ">
      <h3 class="text-center font-weight-bolder">KNOW WHO WE ARE</h3>
      <hr>
    </div>
    <div class="col-md-3 text-center">
      <img src="images/vasity.png" width="70px" height="70px">
      <p class="text-center p-3">We help and nucture our students
        to graduate with best grades and professional skills.
      </p>
    </div>
    <div class="col-md-3 text-center">
      <img src="images/idea.png" width="70px" height="70px">
      <p class="text-center p-3">Our students shines and bright so 
        they can be easily be found in the job market and offices.
      </p>
    </div>
    <div class="col-md-3 text-center">
      <img src="images/class.png" width="70px" height="70px">
      <p class="text-center p-3">Our tutors are well trained with 
        complete knowledge on the job both in class and outside 
        the class.
      </p>
    </div>
    <div class="col-md-3 text-center">
      <img src="images/computer.png" width="70px" height="70px">
      <p class="text-center p-3">Technology is what is ruling our 
        human world now due to that we've got the best IT lab.
      </p>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center align-items-center text-center mt-4 p-3">
  <div class="row">
    <div class="col-md-6">
    <img class="message-img" src="images/Kalybos-construction-works-regnant-properties.png" alt="smiling-students">
    </div>
    <div class="col-md-6">
    <h3 class="text-center">MESSAGE FROM THE FOUNDER</h3>
      <p class="text-center">Borex Institute Of Technology is one of the schools in the world. 
    We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time. We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system.and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a systemand motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that 
    <center><img src="images/rating.png" alt="rating"></center>
    </div>
</div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
<div class="row">
<div class="col-md-6 mb-4">
        <div class="py-3 mt-4">
            <h4 class="m-0 font-weight-bold text-center">0UR RECORDS FOR 2021</h4>
        <hr>
          </div>
        <div class="card-body">
        <h4 class="small font-weight-bold">Teaching Staff<span
                    class="float-right">80%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Learning Facilities <span
                    class="float-right">90%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Acadamics<span
                    class="float-right">96%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 96%"
                    aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Student's Protection <span
                    class="float-right">98%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 98%"
                    aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Flexible Fee Payment<span
                    class="float-right">Complete!</span></h4>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
</div>
<div class="col-md-6 p-3 mt-4">
          <img class="awards-img" src="images/school park.jpg">
        </div>
</div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center align-items-center text-center mt-4 p-3">
  <div class="row">
    <div class="col-md-6">
    <h3 class="text-center mt-5">MESSAGE FROM OUR STUDENTS</h3>
      <p class="text-center">Borex Institute Of Technology is one of the schools in the world. 
    We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time. We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here. Some of us never taught and believe that we have a place(school) which has a system. believe that we have a place(school) which has a system 
    to keep the students more focus, thrilled, excited and motivated to aspire for greatness all 
    the time.We the students here don't call it school, we call it home because everything can be found 
    here.
    <center><img src="images/rating.png" alt="rating"></center>
    </div>
    <div class="col-md-6">
    <img class="message-img" src="images/students.png" alt="smiling-students">
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center font-weight-bolder">OUR GALLERY</h3>
      <hr>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/awards3.png">
   <strong><p class="text-center">Best In Creative Arts, 2021</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award1.jpg">
      <strong><p class="text-center">Most Influencing School, 2019</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award2.jfif">
      <strong><p class="text-center">Best Private School, 2020</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award.jpg">
      <strong><p class="text-center">Best Learning Infrastructure, 2021</p></strong>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
  <div class="row">
    <div class="col-md-6">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/Xg3EciGTTxU?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/z7HD5iI9H9k?start=9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container-fluid testimonial-section">
<div class="row">
      <div class="col-md-3 test-message text-center justify-content-center align-items-center p-3">
    <img class="svg-img" src="images/Kalybos-construction-works-regnant-properties.png" alt="svg">
      <div class="text-light p-3">
    We the students here don't call it school, we call it home because everything can be found 
    here.
    <div class="text-center p-3">
    <strong>MR BROWN<br>
    CEO, CODLOGIC ENG LTD</strong><br>
    <img src="images/rating.png" alt="rating">
    </div>
    </div>
  </div>
    <div class="col-md-3 card WOW fadeInLef slow test-message text-center justify-content-center align-items-center p-3">
    <img class="svg-img" src="images/svg1.png" alt="svg">
      <div class="text-dark p-3">
    We the students here don't call it school, we call it home because everything can be found 
    here.
    <div class="text-center p-3">
    <strong>MR BROWN<br>
    CEO, CODLOGIC ENG LTD</strong><br>
    <img src="images/rating.png" alt="rating">
    </div>
    </div>
  </div>
  <div class="col-md-3 shadow test-message text-center justify-content-center align-items-center p-3">
    <img class="svg-img" src="images/svg1.png" alt="svg">
      <div class="text-light p-3">
    We the students here don't call it school, we call it home because everything can be found 
    here.
    <div class="text-center p-3">
    <strong>MR BROWN<br>
    CEO, CODLOGIC ENG LTD</strong><br>
    <img src="images/rating.png" alt="rating">
    </div>
    </div>
  </div>
    <div class="col-md-3 card test-message text-center justify-content-center align-items-center p-3">
    <img class="svg-img" src="images/svg1.png" alt="svg">
      <div class="text-dark p-3">
    We the students here don't call it school, we call it home because everything can be found 
    here.
    <div class="text-center p-3">
    <strong>MR BROWN<br>
    CEO, CODLOGIC ENG LTD</strong><br>
    <img src="images/rating.png" alt="rating">
    </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center font-weight-bolder">AWARDS & CERTIFICATION</h3>
      <hr>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/awards3.png">
   <strong><p class="text-center">Best In Creative Arts, 2021</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award1.jpg">
      <strong><p class="text-center">Most Influencing School, 2019</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award2.jfif">
      <strong><p class="text-center">Best Private School, 2020</p></strong>
    </div>
    <div class="col-md-3">
      <img class="awards-img" src="images/award.jpg">
      <strong><p class="text-center">Best Learning Infrastructure, 2021</p></strong>
    </div>
  </div>
</div>
<div class="space-out"></div>
<div class="space-out"></div>
 <!-- Carousel -->
 <div class="container text-center">
   <h3>PARTNERS & SPONSORS</h3>
   <hr>
 </div>
   <!-- Carousel -->
   <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-slide-to="0" class="active"></button>
  <button type="button" data-target="#demo" data-slide-to="1"></button>
  <button type="button" data--target="#demo" data-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/slider-3.jpg" alt="Los Angeles" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="images/k.jpg" alt="Chicago" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="images/campus.jfif" alt="New York" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
<div class="space-out"></div>
<div class="container-fluid enroll-section">
  <div class="container justify-content-center">
    <h3 class="text-center mt-4 p-3 text-light text-uppercase">Join the best school</h3>
    <p class="text-center">
    <button class="btn btn-primary" id="enroll-btn">Enroll Now</button>
      </p>
  </div>
  <br>
  <div id="form"></div>
</div>
<div class="fluid justify-content-center bg-dark text-center mt-4 p-3 footer-section">
  <div class="row">
    <div class="col-md-3">
      <strong><h5 class="text-center text-danger text-uppercase">Quick Links</h5></strong>
      <ul class="quicklinks">
      <li><a href="index.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="facilities.php">Facilities</a></li>
</ul>
    </div>
    <div class="col-md-3">
    <strong><h5 class="text-center text-danger text-uppercase">Quick Links</h5></strong>
      <ul class="quicklinks">
      <li><a href="index.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
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
