<?php
$path = ".";

$title = "Mandapay - Pay online with your bank account...and nothing else";

$noindex = true;

include $path."/haut.php";
?> 

	<!-- Wrapper -->
    <div class="wrapper">
		<div class="hero-img" style="position: absolute; z-index: 10;">				
			<img src="img/image-3.png" style="width: 100%;"></img>	              
        </div> 	
		<div class="container" style="position: relative; z-index: 20;">
			<div class="row">
              <div class="col-sm-8" style="padding-top: 10%;text-align: center;">				
                <h1 style="font-size: 45px;">Accept direct debit online without hassle</h1>
              </div>
              <div class="col-sm-4" style="padding-top: 50px;">
				<img src="img/form.png" style="width: 100%"></img>	
              </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        
	<div class="nooverlapp" style="background-color: #ffffff; position: relative; z-index: 30;margin-top: 130px;">	

		<div class="container" style="background-color: #ffffff;">
			<div class="row">
				<div class="col-sm-12" style="text-align: center;">
					<h2> Want to know more about Mandapay ?</h2>
				</div>
			</div>
			<div class="row" style="margin-top: 15px;margin-bottom: 40px;">
				<div class="col-sm-6">
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="input-group double-input input-group-lg">
							<select name="whoAmI" class="form-control">
								<option value="merchant">I am a merchant...</option>
								<option value="buyer">I am a buyer...</option>

							</select>
						<input type="text" name="mail" class="form-control" placeholder="...here's my email">
							<span class="input-group-btn">
							<button type="submit" class="btn btn-lg btn-danger">Try it now!</button>
							</span>
						</div>
						<?php
						if (isset($_POST['mail'])&&isset($_POST['whoAmI']))
						{
							$email = $_POST['mail'];
							$whoAmI = $_POST['whoAmI']; 
							if(preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $email)) 
							{
							  $name = "emails.txt";
							  $file = fopen($name, "a");
							  fwrite($file, $email.";"."$whoAmI"."\r\n");
							  fclose($file);
							  $message = "Bonjour,
					  
Nous vous confirmons l'inscription de votre adresse email sur notre liste de diffusion.

Nous vous informerons des actualités de Mandapay et nous vous enverrons des invitations pour utiliser nos services.

A très bientôt sur Mandapay !
L’équipe Mandapay
http://www.mandapay.com";
							  /*send_email($from = "contact@mandapay.com", $email, "Mandapay : confirmation d'inscription", $message, $cci = "contact@lawcracy.com", $piecejointe = false);*/					  
							  echo '<span style="color: green; font-size: 18px;">Thanks for your interest, we will keep you posted !</span>';
							} else
							{
								echo '<span style="color: red; font-size: 18px;">Wrong email address, please check and retry !</span>';
							}
						}
						?>

					</form>
				</div>		
				<div class="col-sm-6" style="text-align: center">
					<a class="btn btn-lg btn-default" href="#howItWorks" style="height: 46px; font-size: 18px; color: #396584; border: 2px solid #396584;">Tell me more</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="howitworks" id="howItWorks"  style="border-top: 1px solid #ddd; padding: 25px 0; background-color: #ffffff; position: relative;">	

		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="text-align: center;">
					<h2> How does Mandapay work ?</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_howitworks1.png" alt="..." style="margin:auto; clear: both; width: 300px;">
				<h3>Chose Mandapay</h3>
				</div>
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_howitworks2.png" alt="..." style="margin:auto; clear: both; width: 300px;">
				<h3>Enter your personnal data, BIC and IBAN</h3>
				</div>		
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_howitworks3.png" alt="..." style="margin:auto; clear: both; width: 300px;">
				<h3>Sign your SEPA direct debit mandate...and that's it !</h3>
				</div>	

			</div>
		</div>
	</div>

	<div class="whyMandapay_inner" id="whyMandapay" style="border-top: 1px solid #ddd; padding: 25px 0; background-color: white;">	

		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="text-align: center;">
					<h2> Why Mandapay ?</h2>
				</div>
			<div class="col-sm-12">
			<h3> Who should use Mandapay</h3>
			</div>
			<div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-umbrella"></i>
                  <div class="service-desc">
                    <h4>Insurances</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-mobile-phone"></i>
                  <div class="service-desc">
                    <h4>Utilities</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
			</div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-gamepad"></i>
                  <div class="service-desc">
                    <h4>Entertainment</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
			</div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-shopping-cart"></i>
                  <div class="service-desc">
                    <h4>E-commerce</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>			  
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-plane"></i>
                  <div class="service-desc">
                    <h4>SaaS and subscription-based it services</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-suitcase"></i>
                  <div class="service-desc">
                    <h4>B2B services</h4>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
			</div>
		</div>

	<div class="benefit1" style="border-top: 1px solid #ddd; padding: 25px 0; background-color: #f6f6f6;">	
		<div class="container">
			<div class="row">
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_conversion.png" style="width: 150px;"></img>
				</div>
				<div class="col-sm-8" style="text-align: left; vertical-align: center;">
				<h2>Boost your online conversion rate</h2>
				<ul style="list-style-type: none;">
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">No CB data</h4></li>
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">A mandate for several purchases</h4><</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="benefit2" style="border-top: 1px solid #ddd; padding: 25px 0; background-color: white;">	
		<div class="container">
			<div class="row">
				<div class="col-sm-8" style="text-align: left; vertical-align: center;">
				<h2>Increase customer loyalty</h2>
				<ul style="list-style-type: none;">
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">No expiration date</h4></li>
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">No payment limit</h4></li>
				</ul>
				</div>
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_retention.png" style="width: 150px;"></img>
				</div>
			</div>
		</div>
	</div>
	<div class="benefit1" style="border-top: 1px solid #ddd; padding: 25px 0; background-color: #f6f6f6;">	
		<div class="container">
			<div class="row">
				<div class="col-sm-4" style="text-align: center;">
				<img src="img/icon_mobile.png" style="width: 150px;"></img>
				</div>
				<div class="col-sm-8" style="text-align: left; vertical-align: center;">
				<h2>Fit to new consumption habits</h2>
				<ul style="list-style-type: none;">
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">100% online</h4><</li>
				<li><i class="fa fa-check fa-2x" style="color: #ed3e49;"></i>  <h4 style="display: inline;">Compatible with mobiles and tablets</h4><</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php
include $path."/bas.php";
?>