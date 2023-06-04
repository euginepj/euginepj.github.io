<?php

$name = (isset($_GET['name']) ? $_GET['name'] : '');
$phone = (isset($_GET['phone']) ? $_GET['phone'] : '');
$email = (isset($_GET['email']) ? $_GET['email'] : '');
$address = (isset($_GET['address']) ? $_GET['address'] : '');
$products = (isset($_GET['products']) ? $_GET['products'] : '');

$return = ['status' => 'error', 'message' => 'Error in message sending system.'];

if (isset($name) and ( $name != '') and isset($phone) and ( $phone != '') and
        isset($address) and ( $address != '')) {

   $body = '<html>'
           . '<body style="background: #f4f4f4; padding-top:10px; padding-bottom: 10px;">'
           . '<table width="600" style="background: #ffffff; border: #ddd solid 1px; margin: 10px auto"><tr><td>'
           . '<table width="100%" style="width: 100%"><tr><td align="center" style="text-align: center"><img src="https://marketing-image-production.s3.amazonaws.com/uploads/9da37b8a068587ed2d00a75032fd57368219fbc11907de2500b1b5e5ddf7b399a1e698fa57254902d97752b058ddb96901a8685ef47afe630ff21cb52e6f5f5a.png" alt="Falconcity Logo" width="200" height="107">'
           . '</td></tr><tr><td><table width="100%" style="padding: 20px; border-top: #ddd solid 1px;">'
           . '<tr><td><table cellpadding="4" style="padding: 10px 0">'
           . '<tr><td width="100" style="font-family: \'Trebuchet MS\', sans-serif"><strong>Name</strong></td>'
           . '<td style="font-family: \'Trebuchet MS\', sans-serif;">' . $name . '</td></tr>'
           . '<tr><td style="font-family: \'Trebuchet MS\', sans-serif"><strong>Phone</strong></td>'
           . '<td style="font-family: \'Trebuchet MS\', sans-serif;">' . $phone . '</td></tr>'
           . '<tr><td style="font-family: \'Trebuchet MS\', sans-serif"><strong>Email</strong></td>'
           . '<td style="font-family: \'Trebuchet MS\', sans-serif;">' . $email . '</td></tr>'
           . '<tr><td style="font-family: \'Trebuchet MS\', sans-serif"><strong>Address</strong></td>'
           . '<td style="font-family: \'Trebuchet MS\', sans-serif;">' . $address . '</td></tr>'
           . '<tr><td colspan="2" style="font-family: \'Trebuchet MS\', sans-serif; padding-top: 10px">'
           . '<strong style="">The products ordered: </strong></td></tr></table>'
           . '<table width="100%" style="text-align: left; border: #bbb solid 1px">'
           . '<tr><th style="background: #eee; border-right: #bbb solid 1px">Product Name</th>'
           . '<th width="120" style="background: #eee">Quantity </th></tr>';

   // Listing the portal. 
   foreach ($products as $product) {
      $body .= '<tr><td style="border-top: #bbb solid 1px; border-right: #bbb solid 1px">'
              . (isset($product['name'])?$product['name']:'') .'</td>'
              . '<td style="border-top: #bbb solid 1px">'
              . (isset($product['qty'])?$product['qty']:'') .'</td></tr>';
   }
   
   
   $subject = "Enquiry form send from Falconcity Hyper market website";
   # $headers = "From: " . strip_tags($email) . " \r\n";
   $headers = "From: $name <noreply@alco-plant-hire.com> \r\n";
   # $headers .= "Reply-To: " . strip_tags($email) . " \r\n";
   $headers .= "Reply-To: $name <$email> \r\n";
   $headers .= "MIME-Version: 1.0 \r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
   $to = "eugine@almoosa.ae";
   
   if (mail($to, $subject, wordwrap($body), $headers)) {
      $return = ['status' => 'success', 'message' => 'The message is sent successfully.']; 
   } else { 
      $return = ['status' => 'error', 'message' => 'Error in sending mail.'];
   }
}
echo json_encode($return);