<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_YOUR_SECRET_KEY",
  "publishable_key" => "pk_YOUR_PUB_KEY"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>