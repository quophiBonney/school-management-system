<?php 
require_once('vendor/autoload.php');
//\Stripe\Stripe\Charge::create(['amount' => 2000, 'currency' => 'usd', 'source' => 'tok_189fqt2eZvKYlo2CTGBeg6Uq'])
\Stripe\Stripe::setApiKey('sk_test_BQokikJOvBiI2H1WgH4o1fQ2');

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$firstName = $POST['firstName'];
$lastName = $POST['lastName'];
$email = $POST['email'];
$token = $POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    'email' => $email, 
    'source' => $token
));

$charge = \Stripe\Charge::create(array(
    "amount" => 500, 
    "currency" => "usd", 
    "description" => "Payment of school fees", 
    "customer" => $customer->id
));
//Redirect 
header("Location: success.php?tid='.$charge->id. '&product = '.$charg->description");
?>