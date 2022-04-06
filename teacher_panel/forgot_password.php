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
<title>Reset Password</title>
<!--Custom CSS -->
<link rel="stylesheet" href="quophi.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”>

</script>
</head> 
<body id="login_background">  
<div class="space-out"></div>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <form action="forgot_password.php" method="POST" class="bg-light shadow">
        <h5 class="text-center text-dark"><marquee>RESET YOUR PASSWORD</marquee></h5>
        <small class="text-center font-weight-bold">type your email to receive a reset code</small>
            <div class="form-group button">
                <input type="email" name="email" placeholder="Email" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group buttons d-flex bg-danger align-items-center justify-content-center text-center">
            <input type="submit" name="reset" value="RESET PASSWORD" class="bg-danger border-0 text-light">
            </div>
            <div class="resend bg-light">
            <a class="text-dark float-right" href="#">Didn't receive code?</a>
</div>
        </form>
      <p></p>
     <br><br>
    </div>
  </div>
</div>

</body>
</html>