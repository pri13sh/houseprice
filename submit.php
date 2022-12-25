<?php
require_once('config.php');
// print_r($_POST);
// $token=$_POST['stripeToken'];
// \Stripe\Charge::create(array(
//     "amount"=>500,
//     "currency"=>"inr",
//     "description"=>"Api integration fees",
//     "source"=>$token,
// ));
$data=Stripe::PaymentIntent.create(array(
    "currency" => 'inr',
    "customer" =>$token,
    "amount" => 500,
    "description" => 'Api integration fees',
));

echo "<pre>";
print_r($data);
?>