    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Contact Us -->
          <div class="col-sm-4">
            <h4><i class="fa fa-map-marker text-red"></i> Contact Us</h4>
            <p>Do not hesitate to contact us if you have any questions or feature requests:</p>
            <p>
              Email: <a href="#">contact@mandapay.com</a>
            </p>
          </div>
          <!-- Recent Tweets -->
          <div class="col-sm-4">
            <!--h4><i class="fa fa-twitter-square text-red"></i> Recent Tweets</h4>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Ut tincidunt erat quis viverra consectetur. Suspendisse tempus vulputate leo.
                <a href="#">1 day ago</a>
              </p>
            </div>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Mauris eget lacus ut ipsum dignissim malesuada quis nec ante.
                <a href="#">2 days ago</a>
              </p>
            </div-->
          </div>
          <!-- Newsletter -->
          <div class="col-sm-4">
            <!--h4><i class="fa fa-envelope text-red"></i> Newsletter</h4>
            <p>
              Enter your e-mail below to subscribe to our free newsletter.
            </p>
            <form class="form" role="form">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    <label class="sr-only" for="subscribe-email">Email address</label>
                    <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-default">OK</button>
                    </span>
                  </div>
                </div>
              </div>
            </form-->
          </div>
        </div>
      </div>
    </footer>

    <!-- Copyright -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright">
            Copyright 2014 Mandapay
          </div>
        </div>
      </div>  <!-- / .row -->
    </div> <!-- / .container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolltopcontrol.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/index.js"></script>
	<script src="js/lescroll.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-54405621-1', 'auto');
	ga('send', 'pageview');

	</script>
  </body>
</html>

<?php
	
	/* function send_email($from, $to, $titre, $message, $cci = false, $piecejointe = false)
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
	} */


	function check_format_email($email)
	{
		if (!preg_match("/^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/", $email))
		{
			return false;
		} else
		{
			return true;
		}
	}
?>