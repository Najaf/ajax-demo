<?php
  require 'php/viewhelper.php';
  $helper = new ViewHelper();
  $fields = array(
    'name' => 'Please Enter A Valid Name (at least three letters)',
    'email' => 'Please Enter A Valid Email Address',
    'phone' => 'Please Enter A Valid Telephone Number (numbers, hyphens and spaces only)'
  );
?>
<?= $helper->doctype() ?>
<html>
	<head>
    <?= $helper->stylesheet_link_tag( 'style' ) ?>
    <?= $helper->js_include_tag( 'jquery' ) ?>
    <?= $helper->js_include_tag( 'application' ) ?>
	</head>
	<body>
		<div id='wrapper'>

		<h1>Test Form</h1>

		<form>

      <?php foreach( $fields as $field => $error ): ?>
        <?= $helper->label( $field, ucwords($field) ) ?>
        <?= $helper->text_input( $field, $_POST[$field] ) ?>
        <?= $helper->error_notification( $field, $error ) ?>
      <?php endforeach ?>

			<input type='submit' id='submit' name='submit' value='submit' />
			<p class='notification' id='success-message'>Thanks for entering your details</p>

		</form>

		</div><!-- /#wrapper -->
	</body>
</html>


