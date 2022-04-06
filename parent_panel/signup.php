<?php
require 'controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Parent Signup</title>
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
<body class="login">  
<div class="space-out"></div>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <form action="signup.php" method="POST" class="bg-light shadow">
        <h5 class="text-center text-dark"><marquee>PARENT SIGNUP</marquee></h5>
        <small class="text-center font-weight-bold">kindly signup as a parent</small>
            <div class="form-group button mt-2">
                <input type="text" name="fullName" placeholder="Full Name"  required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="text" name="contact" placeholder="Contact" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="email" name="email" placeholder="Email" required=""  class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="text" name="wardName" placeholder="Ward Name" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="text" name="wardClass" placeholder="Ward Class" required=""  class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="password" name="parentPassword" placeholder="Password" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group button">
                <input type="password" name="repeatPassword" placeholder="Repeat Password" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group buttons d-flex bg-primary align-items-center justify-content-center text-center">
            <input type="submit" name="signup" value="SIGN UP" class="bg-primary border-0 text-light">
            </div>
            <div class="form-group button">
           Already a member? <a class="text-primary" href="login.php"><?php echo "Login" ?></a>
</div>
        </form>
      <p></p>
     <br><br>
    </div>
  </div>
</div>