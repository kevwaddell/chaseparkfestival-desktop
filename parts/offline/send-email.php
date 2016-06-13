<?php
$name = $_GET['name'];
$email = $_GET['email'];
$logo_src = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/wp-content/themes/chaseparkfestival-desktop/_/css/img/logo-lrg.png';	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Chase Park Festival</title>
</head>
<body style="background-color: #908e8e; padding: 20px; font-family: Arial, sans-serif;">
	
	<div class="wrapper" style="width: 700px; background-color: white; margin: auto; box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);">
		
		<div class="header" style="border-bottom: 1px solid #908e8e; margin: 0px 40px; text-align: center;">
			<img src="<?php echo $logo_src; ?>" style="max-width: 300px;" alt="TLW Solicitors" />		
		</div>
		
		<div class="content" style="padding: 20px 40px; font-size: 16px; line-height: 20px; min-height: 100px;">
			<h2>Enquiry from online form for Chase Park Festival 2016</h2>
			<p>Full name: <?php echo $name; ?><br />Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
			</p>
		</div>
			
	</div>
	
</body>
</html>