<?php
$path = ".";

$title = "Mandapay - Pay online with your bank account...and nothing else";

$noindex = true;

include $path."/haut.php";
?> 
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="text-align: center;">
					<h2>Please request your access at our demo page</h2>
					<h3>We will get back to you as soon as we can</h3>
					</br>
					</br>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="font-size: 16px">
                  <div class="form-group">
						<div class="row">
					    <div class="col-sm-4">
						<div style="margin-top: 9px; text-align: right;">
						<b>Your name</b>
						</div>
						</div>
					    <div class="col-sm-4">						
						<input type="text" name="name" class="form-control" id="">
						</div>
						</div>
						</div>
                  <div class="form-group">						
						<div class="row">
					    <div class="col-sm-4">
						<div style="margin-top: 9px; text-align: right;">
						<b>Your email</b>
						</div>
						</div>
					    <div class="col-sm-4">						
						<input type="email" name="mail" class="form-control" id="">
						</div>
						</div>
						</div>
                  <div class="form-group">		
						<div class="row">
					    <div class="col-sm-4">
						<div style="margin-top: 9px; text-align: right;">
						<b>Your phone</b>
						</div>
						</div>
					    <div class="col-sm-4">						
						<input type="text" name="phone" class="form-control" id="">

						</div>
						</div>
					</div>
			 					</br>
		                   <button type="submit" class="btn btn-red"><span style="padding: 0 125px; font-size: 18px">Send<span></button>

				</form>
				<?php
function send_email($from, $to, $titre, $message, $cci = false, $piecejointe = false)
	{
		// Envoi d'un mail
		$entetedate = date("D, j M Y H:i:s");
		$entetemail  =  "From: $from \n"; 
		$entetemail .=  "Cc: \n"; 
		$entetemail .=  "Bcc: $cci \n"; 
		$entetemail .=  "Reply-To: $from \n"; 
		$entetemail .=  "X-Mailer: PHP/" . phpversion() . "\n" ;
		$entetemail .=  "Date: $entetedate\n";
		$entetemail .=	 'Content-Type: text/plain; charset="UTF-8"\r\n'; 
		
		mail(
			$to,
			$titre,
			$message,
			$entetemail
		);
	}						
						
						if (isset($_POST['name'])&&isset($_POST['mail'])&&isset($_POST['phone']))
						{
							$name = $_POST['name'];
							$mail = $_POST['mail'];
							$phone = $_POST['phone']; 
							if(preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $mail)) 
							{
							  $name = "form.txt";
							  $file = fopen($name, "a");
							  fwrite($file, $name.";".$mail.";".$phone."\r\n");
							  fclose($file);
							  $message = "Bonjour,
					  
Nous vous confirmons l'inscription de votre adresse email sur notre liste de diffusion.

Nous vous informerons des actualités de Mandapay et nous vous enverrons des invitations pour utiliser nos services.

A très bientôt sur Mandapay !
L’équipe Mandapay
http://www.mandapay.com";
							  send_email($from = "contact@mandapay.com", $mail, "Mandapay : confirmation d'inscription", $message, $cci = "contact@lawcracy.com", $piecejointe = false);					  
							  echo '<span style="color: green; font-size: 18px;">Thanks for your interest, we will keep you posted !</span>';
							} else
							{
								echo '<span style="color: red; font-size: 18px;">Missing field, please check and retry !</span>';
							}
						}
						?>

	</div>	
	</div>
		</div>
		</div>
<?php
include $path."/bas.php";
?>