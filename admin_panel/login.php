<?php 
if(isset($_POST['login'])) {
$conn = mysqli_connect("localhost", "root", "", "staff");
$email = $_POST['email'];
$password = $_POST['password'];
if($email == "admin@gmail.com" && $password == "admin12") {
    header("Location: dashboard.php");
}else {
    echo '<script>alert("Invalid inputs")</script>';
}
}
?>
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
<link rel="stylesheet" href="fontawesome/css/quophi.css?v=<?php echo time(); ?>">
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
<div class="space-out"></div>
<div class="container-fluid mt-5">
    <div class="row justify-content-center mt-5">
    <div class="col-md-6 text-center shadow bg-light mt-5">
    <h4 class="text-center p-3">ADMIN LOGIN</h4>
        <form action="login.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter email" required="" class="button form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required="" class="button form-control" autocomplete="off">
            </div>
        
            <button type="submit" name="login" class="buttons bg-success w-100 d-block border-0 text-light">LOGIN</button>
        
            <a class="font-weight-bolder text-dark" href="#">Add New Admin</a>
        </form>
      </p>
    </div>
  </div>
</div>