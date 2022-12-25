
<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productName = "Badi Company";  
$productID = "DP12345";  
$productPrice = 55; 
$currency = "usd"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 

define('STRIPE_API_KEY', 'sk_test_51MIVXFSD1XmWzN2KWq0n1i97AOFXd3vGHrBFXcagIk7BOU74EnJ70DXCwDKZnKrqNrSgYeHD5lWiskLCsrLxJsTs00y4Z8p0cs'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51MIVXFSD1XmWzN2K9Y8TfkXJUMhqT42XX8TwSU1pe7OnoQqywEjD0rLHPv1HKCHjDHbTLZ9dV9wYkj6yfWOJG43g00Q28Cb5OW'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/stripe/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/stripe/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'localhost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');   
define('DB_NAME', 'stripe'); 
 


$db = new mysqli(DB_HOST, DB_USERNAME,DB_PASSWORD,DB_NAME);   
   
// Display error if failed to connect   
if ($db->connect_errno) {   
    printf("Connect failed: %s\n", $db->connect_error);   
    exit();   
}
?>