
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
<link rel="stylesheet" href="quophi.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

<!--Boostrap CDN-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”>
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>
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
</div>
</nav>
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container justify-content-center text-center align-items-center mt-5 p-3">
    <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">
          <h3>School Fees</h3>
          <h5>$200.00</h5>
        </div>
    <form action="/create-checkout-session.php" method="POST" id="payment-form">
        <div class="form-row">
            <input type="text" name="firstName" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
            <input type="text" name="lastName" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
            
            <div id="card-element" class="form-control">
            </div>
            <div id="card-errors" role="alert">
            </div>
        </div>
    <button type="submit" id="checkout-button" class="btn btn-primary mt-2 btn-block">Pay Fess</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>

  </body>
</html>