<?php
  require 'php/viewhelper.php';
  $helper = new ViewHelper();
?>
<?= $helper->doctype() ?>
<html>
	<head>
    <?= $helper->stylesheet_link_tag( 'style' ); ?>
    <?= $helper->js_include_tag( 'jquery' ); ?>
    <?= $helper->js_include_tag( 'application' ); ?>
	</head>
	<body>
		<div id='wrapper'>

		<h1>Test Form</h1>
		<form>

		<label for='name'>Name</label>	
			<input type='text' id='name' name='name' value='<?= isset($_POST['name']) ? $_POST['name'] : '' ?>' />
			<p class='notification' id='name-error'>Please Enter A Valid Name (at least three letters)</p>

		<label for='email'>Email</label>	
			<input type='text' id='email' name='email' value='<?= isset($_POST['email']) ? $_POST['email'] : ''?>' />
			<p class='notification' id='email-error'>Please Enter A Valid Email Address</p>

		<label for='Phone'>Phone</label>	
			<input type='text' id='phone' name='phone' value='<?= isset($_POST['email']) ? $_POST['phone'] : '' ?>' /><br />
			<p class='notification' id='phone-error'>Please Enter A Valid Telephone Number (numbers, hyphens and spaces only)</p>

			<input type='submit' id='submit' name='submit' value='submit' />
			<p class='notification' id='success-message'>Thanks for entering your details</p>

		</form>
		</div><!-- /#wrapper -->
	</body>
</html>


