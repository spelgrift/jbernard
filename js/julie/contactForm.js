var $ = require('jquery');
var _ = require('../libs/helperFunctions.js');


$(function() { 
/**
 * 
 * CACHE DOM
 * 
 */
 	var $contactModal = $('#contactModal'),
 	$nameInput			= $contactModal.find('#contactNameInput'),
 	$emailInput			= $contactModal.find('#contactEmailInput'),
 	$bodyInput			= $contactModal.find('#contactBodyInput'),
 	$submit				= $contactModal.find('#submitContactForm'),
 	$processing			= $contactModal.find('#contactProcessing'),
 	$contactMsg			= $contactModal.find('#contactMsg');

 /**
 * 
 * BIND EVENTS
 * 
 */
 	$submit.click(submitMessage);

 /**
 * 
 * CORE FUNCTIONS
 * 
 */
 	function submitMessage(ev) {
 		ev.preventDefault();
 		// Get user input
 		var data = {
 			'name' : $nameInput.val(),
 			'email' : $emailInput.val(),
 			'body' : $bodyInput.val()
 		};
 		// Error check
 		if(data.name.length < 1) {
 			return _.error("<p class='text-danger'>You must enter your name</p>", $contactMsg, $nameInput);
 		}
 		if(data.email.length < 1) {
 			return _.error("<p class='text-danger'>You must enter your email</p>", $contactMsg, $emailInput);
 		}
 		if(!isEmail(data.email)) {
 			return _.error("<p class='text-danger'>You must enter a valid email</p>", $contactMsg, $emailInput);
 		}
 		if(data.body.length < 1) {
 			return _.error("<p class='text-danger'>You must enter a message</p>", $contactMsg, $bodyInput);
 		}
 		$submit.attr('disabled', 'disabled');
 		$processing.show();
 		var url = window.location.href + "ajax/submitContactForm.php";
 		_.post(url, data, submitSuccess, submitError);
 	}

 	function submitSuccess(data) {
 		$processing.hide();
 		$contactMsg.html("<p class='text-success'>Message sent!</p>");
 		_.clearMsg($contactMsg);
 		$submit.removeAttr('disabled');
 		$nameInput.val('');
 		$emailInput.val('');
 		$bodyInput.val('');
 		setTimeout(function(){
 			$contactModal.modal('hide');
 		}, 4000);
 	}

 	function submitError(data) {
 		$processing.hide();
 		_.error("<p class='text-danger'>"+data.error_msg+"</p>", $contactMsg, $nameInput);
 		$submit.removeAttr('disabled');
 	}

 	function isEmail(email){
      return /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/.test( email );
	}
});