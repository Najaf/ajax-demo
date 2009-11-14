<?php
	$fv = new FormValidator();

	$params = $fv->getParams($_POST);

      	//if evertyhing checks out, do what we will with the data		
	if ($params['success'] == true) {
		doStuffWithData();
	}
  
	//send a response back to the form	
	echo json_encode($params);

	

	function doStuffWithData() {
		//e.g. send to a database, mail a thank you etc
    //in a prodution scenario would probably be running
    //from a controller class
	}

	class FormValidator {

		function getParams($post) {
			$params  = array();
			$params['success'] = false;
			//validate name
			$params['name-error'] = $this->processName($post['name']);
			//validate email
			$params['email-error']  = $this->processEmail($post['email']);
			//validate phone number
			$params['phone-error'] = $this->processPhone($post['phone']);
			if ($params['name-error'] == '' && $params['email-error'] == '' && $params['phone-error'] == '') {
				$params['success'] = true;
			}

			return $params;
		}
		function processName($name) {
			return (strlen($name) > 2) ? '' : 'error';
		}

		function processEmail($email) {
			$email_pattern = '/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])' .
			'(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i';
			return (preg_match($email_pattern, $email) == 1) ? '' : 'error';
		}

		function processPhone($phone) {
			$phone_pattern = '/[0-9 \-]+/';
			return (preg_match($phone_pattern, $phone)) ? '' : 'error'; 
		}
	}
