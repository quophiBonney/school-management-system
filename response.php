<?php 
include '../database.php';
session_start();
?>
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

<script src="../javascript.js"></script>
<script type="text/javascript" src="../jquery-3.5.1.min.js"></script>
 
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaction Status</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Transaction Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">

     <?php

$transactionid = $_GET['ref'];

$curl = curl_init();
    curl_setopt_array($curl, array(

    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$transactionid,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: test key here", // test secret key here
      "Cache-Control: no-cache",
    ),
  ));

  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } 
  else{
        $tranx = json_decode($response);
    $session= $tranx->data->metadata->session;
    $class= $tranx->data->metadata->class;
    $term= $tranx->data->metadata->term;
    $regno= $tranx->data->metadata->regno;
    $name= $tranx->data->metadata->name;
    $des= $tranx->data->metadata->des;   
        $_SESSION['error'] = ' 	<div class="alert alert-warning alert-dismissible fade show">
    <strong> </strong> Payment '. $tranx->data->status .'. Try again
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
    </div>';
    
  }
 
   $tranx = json_decode($response);
   $session= $tranx->data->metadata->session;
   $class= $tranx->data->metadata->class;
   $term= $tranx->data->metadata->term;
   $regno= $tranx->data->metadata->regno;
   $name= $tranx->data->metadata->name;
   $des= $tranx->data->metadata->des;

  if(!$tranx->status){
    $_SESSION['error'] = ' 	<div class="alert alert-warning alert-dismissible fade show">
<strong> </strong>'. $tranx->message .' Pay again
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
</div>';
echo '<script>window.location ="payment2.php?regno='.base64_encode($regno).'&class='. base64_encode($class).'&session='.base64_encode($session).'&term='. base64_encode($term).'&name='.base64_encode($name).'" </script>'; 
    // there was an error from the API
    die('API returned error: ' . $tranx->message);
    
  }
  
  if(('success' == $tranx->data->status)){ 
    $paid=($tranx->data->amount )/100;

    $querypay =("INSERT INTO `transactions`(`transactionid`,`regno`, `class`, `session`, `term`, `description`, `amount`, `status`) 
    VALUES 
    ('$transactionid','$regno','$class','$session','$term','$des','$paid','PAID')");
    	$resultpay = mysqli_query($con,$querypay);

			if ($resultpay){
        $query11= ("select sum(amount) as total2 FROM transactions WHERE class='$class' && session='$session' && term='$term' && description='$des'&& regno='$regno'");
        $res11=mysqli_query($con,$query11);
        if(mysqli_num_rows($res11)>0){
          while($row=mysqli_fetch_assoc($res11)){
        
        $totalpaid=$row['total2'];
        }}	
        
        $queryupdate=(" UPDATE `payment2` SET `$des`='$totalpaid' WHERE class='$class' && session='$session' && term='$term' && adm_no='$regno' ");
        $resultupdate=(mysqli_query($con,$queryupdate));
      }

$_SESSION['error'] = ' 	<div class="alert alert-success alert-dismissible fade show">
<strong> </strong>Payment of '.number_format($paid,0,"",",")  .' was successful. 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
</div>';
echo '<script>window.location ="payment2.php?regno='.base64_encode($regno).'&class='. base64_encode($class).'&session='.base64_encode($session).'&term='. base64_encode($term).'&name='.base64_encode($name).'" </script>'; 
}
 ?>
</div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




</body>
</html>