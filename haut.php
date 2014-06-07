<?php
$title = isset($title) ? $title : "Mandapay - Pay online with your bank account...and nothing else";
$noindex = true;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mandapay, le moyen de paiement sûr et simple pour le e-commerce">
    <meta name="author" content="">
	<?php
	if(isset($noindex))
		{
		?>
		<meta name="robots" content="noindex">
		<?php
		}
		?> 

    <link rel="shortcut icon" href="ico/favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Resources -->
    <link href="fonts/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="..."></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
			<li class="hidden-sm active">
              <a href="index.php">Accueil</a>
            </li>
			<li class="hidden-sm">
              <a href="solutions.php">Solutions</a>
            </li>
			<li class="hidden-sm">
              <a href="features.php">Features</a>
            </li>
			<li class="hidden-sm">
              <a href="shopping-cart.php">Demonstration</a>
            </li>
            <li class="hidden-sm">
              <a href="about.php">About us</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div> <!-- / .navigation -->
	