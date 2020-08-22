<?
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'serwer1315618.home.pl';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@uks141.pl';                 // SMTP username
$mail->Password = 'gJ9Ug,vNu9zF';                           // SMTP password
$mail->SMTPSecure = 'ssl';    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';
$mail->setFrom('no-reply@uks141.pl ', 'Nabór klub UKS 141');
$mail->isHTML(true);    
?>