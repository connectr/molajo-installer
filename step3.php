<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Molajo Installer - Step 2 of 4</title>
	<?php include_once('lib/functions.php'); ?>
	<?php include_once('lib/head.php'); ?>
</head>
<body class="<?php echo $lcbrowser . ' ' . $lcbrowser.$ver . ' ' . strtolower($browser->getPlatform()); ?>">
	<div id="wrap">
		<div id="top">
			<h1>
				<a href="http://www.molajo.org" title="Click here to open the Molajo website in a new window" target="_blank">Molajo 
				<span>Click here to view the Molajo website</span></a>
			</h1>
			<strong>Version 1.6.1 <span>Step 4 of 4</span></strong>
		</div>
		<div id="main" class="step3">
			<div class="inner">
				<h2>Congratulations, you have successfully installed Molajo!</h2>
				<p>For security reasons, you now need to remove the installation directory from your Molajo install. Simply click the "Remove installation directory" button below &amp; we'll attempt to do it for you. </p>
				<div class="remove-install">
					<a href="#" id="remove-installation" class="btn-secondary">Remove installation directory</a>
				</div>				
				<div class="summary">
					<h3>Site information</h3>
					<ul class="list-reset">
						<li><strong>Site name:</strong> <span>Molajito</span></li>
						<li><strong>Your name:</strong> <span>Chris Rault</span></li>
						<li><strong>Your email:</strong> <span>chris@prothemer.com</span></li>
						<li><strong>Admin username:</strong> <span>connectr</span></li>
					</ul>
				</div>					
				
				<div id="actions">
					<a href="step2.php" class="btn-secondary">&laquo; <strong>P</strong>revious</a>
					<a href="#" class="btn-primary alt">Go to admin &raquo;</a>
					<a href="#" class="btn-primary">View your site &raquo;</a>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>