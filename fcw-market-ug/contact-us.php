<?php 

$return = ['status' => 'error', 'message' => 'Error in message sending system.'];

if (isset($_GET['name']) and isset($_GET['email']) and isset($_GET['phone']) and isset($_GET['message'])) {
   $name = (isset($_GET['name']) and ($_GET['name'] != ''))?$_GET['name']:'' ;
   $email = (isset($_GET['email']) and ($_GET['email'] != ''))?$_GET['email']:'' ;
   $phone = (isset($_GET['phone']) and ($_GET['phone'] != ''))?$_GET['phone']:'' ;
   $message = (isset($_GET['message']) and ($_GET['message'] != ''))?$_GET['message']:'' ;
   $next = '<br />';
   
   $subject = "Enquiry form send from Falconcity Hyper market website";
   # $headers = "From: " . strip_tags($email) . " \r\n";
   $headers = "From: $name <noreply@alco-plant-hire.com> \r\n";
   # $headers .= "Reply-To: " . strip_tags($email) . " \r\n";
   $headers .= "Reply-To: $name <$email> \r\n";
   $headers .= "MIME-Version: 1.0 \r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
   
   $to = "eugine@almoosa.ae";
   $mailBody = '<html><body style="padding: 5px;">'
           .'<div style="border:#e0e0e0 solid 1px;padding: 15px; border-radius: 4px">'
           . 'Sir, ' . $next . ' A person send a message from Falconcity Hyper market page.' 
           # . date('H:i:s')  
           . $next . $next;
   $personalDetails = '<strong>Message Details:</strong> ' . $next;
   $personalDetails .= 'Name: ' . $name . $next;
   $personalDetails .= 'Email: ' . $email . $next;
   $personalDetails .= 'Phone: ' . $phone . $next;
   $personalDetails .= 'Message: ' . $message . $next . $next;
   
   $signature = '<div>Thanking you, ' . $next . $name . '</div>' 
           . '</div></body></html>';
   $body = $mailBody . $personalDetails . $signature;
   
   if (mail($to, $subject, wordwrap($body), $headers)) {
      $return = ['status' => 'success', 'message' => 'The message is sent successfully.']; 
   } else { 
      $return = ['status' => 'error', 'message' => 'Error in sending mail.'];
   }
}
echo json_encode($return);