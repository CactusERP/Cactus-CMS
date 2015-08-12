
<?php
	$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('theme_light');
		echo $this->Html->css('plugins/bootstrap-fileupload/bootstrap-fileupload.min');

		echo $this->Html->css('plugins/font-awesome/css/font-awesome.min');
		echo $this->Html->css('plugins/iCheck/skins/all');
		echo $this->Html->css('plugins/bootstrap/css/bootstrap.min');
		echo $this->Html->css('plugins/perfect-scrollbar/src/perfect-scrollbar');
		
		echo $this->Html->css('fonts/style');
		echo $this->Html->css('main');
		echo $this->Html->css('main-responsive');
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
	?>

	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo">
			<?php echo $this->Html->image('icon.png', array('alt' => 'Cactus')); ?>
			Cactus 
			</div>
			<div class="box-login" style="display: block;">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your name and password to log in.
				</p>
			<!-- start: LOGIN BOX -->
				<?php echo $this->fetch('content'); ?>
				<?php echo $this->Session->flash(); ?>
			<!-- end: LOGIN BOX -->
			
			</div>

			<!-- start: COPYRIGHT -->
			<div class="copyright">
				2015 &copy; Blog by Cactus.
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>