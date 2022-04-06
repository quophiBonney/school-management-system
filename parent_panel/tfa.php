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
<title>Account Validation</title>
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
<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <form action="tfa.php" method="POST" class="bg-light shadow" style="width: 100%;">
        <h5 class="text-center text-dark">ONE STEP AWAY TO COMPLETE YOUR SIGNUP</h5>
        <small class="text-center font-weight-bold">Enter the shortcode that has been sent 
            to your email address and click "VALIDATE YOUR ACCOUNT" to finish the signup process.
        </small>
            <div class="form-group button mt-3">
                <input type="text" name="token" placeholder="Pin Code" required="" class="form-control text-center" autocomplete="off">
            </div>
            <div class="form-group buttons d-flex bg-danger align-items-center justify-content-center text-center">
            <input type="submit" name="validate" value="VALIDATE YOUR ACCOUNT" class="bg-danger border-0 text-light">
            </div>
            <div class="form-group button bg-light">
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