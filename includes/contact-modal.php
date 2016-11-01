<div class="simple-modal modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">

	<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>

	<div class="modal-dialog">
	   <div class="modal-content">
		   <div class="modal-body">
		   	<form>
		   		<div class="form-group">
						<label for="contactNameInput">Your Name*</label>
						<input type="text" class="form-control" id="contactNameInput" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="contactEmailInput">Your Email Address*</label>
						<input type="email" class="form-control" id="contactEmailInput" placeholder="Your Email Address">
					</div>
					<div class='form-group'>
						<label for="contactBodyInput">Your Message*</label>
						<textarea id="contactBodyInput" class='form-control' rows='6' placeholder="Your message"></textarea>
					</div>
		   	</form>

		   </div>
		   <div class='modal-footer'>
		   	<div id='contactMsg' class='pull-left'></div>
		   	<div id='contactProcessing' class='pull-left' style='display:none;'><img src='images/mail_loader.gif' alt='processing...'></div>
		   	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id='submitContactForm' class="btn btn-primary">Send Message</button>
		   </div>
		</div>
   </div>
</div>