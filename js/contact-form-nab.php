<?php

if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}


if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$grupa     = $_POST['grupa'];
$par_name     = $_POST['par_name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$redo   = $_POST['redo'];

if(trim($name) == '') {
	echo '<div class="error_message">Podaj imię i nazwisko.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Podaj poprawny adres e-mail.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">Podaj poprawny adres e-mail.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "yourname@yourdomain.com";

$address = "klub@uks141.pl";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'Zgłoszenie dziecka na obóz letni 2019';

// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "Imię i nazwisko dziecka: $name <br>" . PHP_EOL . PHP_EOL;
$e_content = "Grupa dziecka: \"$grupa\"<br> Imię i nazwisko opiekuna: $par_name <br> "  . PHP_EOL . PHP_EOL;
$e_reply = " Adres email opiekuna: $email ".PHP_EOL." <br> Telefon opiekuna: $phone <br> Zgoda: $redo".PHP_EOL;

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

			// instal php mailer
			require '../PHPMailer/PHPMailerAutoload.php'; 
			// create new mail
			$mail = new PHPMailer;			
			// phpMailer bug - AddReplyTo must be before SetFrom
			//$mail->AddReplyTo($email, $name);
			// load config
			include '../PHPMailer/no-reply.php';			
			// create mail
			$mail->addAddress($address);
			$mail->Subject = $e_subject;
			$mail->Body    = $msg;
			//$mail->AltBody = 'coś Ci html nie działa...';
			
			if(!$mail->send()) { 
			    echo 'Error! ';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else { 

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h2>Wiadomość wysłana!</h2>";
	echo "<p><strong>Dziękujemy za kontakt.</strong></p>";
	echo "</div>";
	echo "</fieldset>";

}