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
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="script/payment.js"></script>
</head> 
<body> 

<div class="col-xs-12 col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<span class="paymentErrors alert-danger"></span>	
			<form action="process.php" method="POST" id="paymentForm">				
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="custName" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="custEmail" class="form-control">
				</div>
				<div class="form-group">
					<label>Card Number</label>
					<input type="text" name="cardNumber" size="20" autocomplete="off" id="cardNumber" class="form-control" />
				</div>	
				<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label>CVC</label>
						<input type="text" name="cardCVC" size="4" autocomplete="off" id="cardCVC" class="form-control" />
					</div>	
				</div>	
				</div>
				<div class="row">
					<div class="col-xs-10">
						<div class="form-group">
							<label>Expiration (MM/YYYY)</label>
							<div class="col-xs-5">
								<input type="text" name="cardExpMonth" placeholder="MM" size="2" id="cardExpMonth" class="form-control" /> 
							</div>							
							<div class="col-xs-5">
								<input type="text" name="cardExpYear" placeholder="YY" size="4" id="cardExpYear" class="form-control" />
							</div>
						</div>	
					</div>
				</div>
				<br>	
				<div class="form-group">
					<input type="submit" id="makePayment" class="btn btn-success" value="Make Payment">
				</div>			
			</form>	
		</div>
	</div>
</div>