<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Molajo Installer - Step 1 of 4</title>
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
			<strong>Version 1.6.1 <span>Step 1 of 4</span></strong>
		</div>
		<div id="main" class="step1">
			<div class="inner">
				<h2>Welcome to the Molajo Installer</h2>
				<p>Before we get started, please ensure you have your database connection information handy, as you'll need it to complete the installation process. 
				Contact your hosting provider if you do not know your database connection information.</p>
				<ul id="system-check">
					<li id="language" class="valid">
						<span>We have detected that your language is set to <strong class="en-uk">UK English</strong> <a href="#" id="select-language"><span>Change Language</span></a>
							<ul style="display:none;">
								<li class="en-us"><a href="#">US English</a></li>
								<li class="en-uk"><a href="#">UK English</a></li>
								<li class="de-de"><a href="#">German</a></li>
								<li class="it-it"><a href="#">Italian</a></li>
								<li class="po-br"><a href="#">Brazilian Portugues</a></li>
							</ul>
						</span>
					</li>
					<!--<li id="version" class="valid">
						<span>You are installing the latest version of Molajo.</span>
					</li>-->
					<li id="version" class="invalid">
						<span>It seems you are installing an outdated version of Molajo. Please update before installing. <a href="#" id="update-installer"><span>Update Installer</span></a></span>
					</li>
					<!--<li id="requirements" class="valid">
						<span>Your server meets all of the system requirements.</span>
					</li>-->
					<li id="requirements" class="invalid">
						<span>There seems to an issue with your server configuration. Please address the issues listed below  <a href="#" id="check-requirements"><span>Check Again</span></a></span>
					</li>
				</ul>
				<div id="actions">
					<a href="#" class="btn-primary"><strong>Ready?</strong> Lets get started! &raquo;</a>
				</div>
			</div>
		</div>
		<?php include_once('lib/footer.php'); ?>
	</div>
</body>
</html>