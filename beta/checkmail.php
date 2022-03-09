<?php
$from = 'choochye9@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $body = '
    <html>
        <body>
            <img src="https://lima-asiadynamics.com/beta/checkmail.php?o=1"/>
            Test mail        
        </body>
    </html>
          
    ';

    mail('$from', 'Test PHP', $body, $headers);
    echo 'sent';
    if(isset($_GET['o'])){
        $msg = $_SERVER['REMOTE_ADDR'];
        mail('choochye9@gmail.com', 'CHECKER', $msg , $headers);
    }