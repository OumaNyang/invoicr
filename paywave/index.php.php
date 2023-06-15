<?php
$env = 'sandbox'; // 'sandbox' or 'production'

if ($env === 'sandbox') {
    define('API_KEY', 'ISPubKey_test_995f0e29-81ae-48f7-9f95-a96537837ae1');
    define('API_SECRET', 'ISSecretKey_test_3bbecc34-6e0e-4ad2-9bf7-93854093b47c');
} elseif ($env === 'production') {
    define('API_KEY', 'ISPubKey_live_c47b0926-0cd4-4ceb-bece-74b76b5a33a5');
    define('API_SECRET', 'ISSecretKey_live_6216a706-3f50-4f3b-b337-6d021d858be6');
} else {
    // Handle invalid environment value
     define('API_KEY', 'ISPubKey_test_995f0e29-81ae-48f7-9f95-a96537837ae1');
    define('API_SECRET', 'ISSecretKey_test_3bbecc34-6e0e-4ad2-9bf7-93854093b47c');
}

 use IntaSend\IntaSendPHP\Checkout;

$credentials = [
    'token'=>API_SECRET,
    'publishable_key'=>API_KEY,
    'test'=>true,
];
$checkout = new Checkout();
$checkout->init($credentials);
// $response = $checkout->create(currency="KES", method="M-PESA",amount=10, phone_number="254723...", email="joe@doe.com", api_ref="order-1");
// print_r(response);