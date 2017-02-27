<div class="modal fade" id="contact_modal" tabindex="100" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" name="contactForm" action="_scripts/contact.php" method="POST">
	      <div class="modal-header modal-header-bg">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Contact: </h4>
	      </div>
	      <div class="modal-body">
			    <div class="form-group">
					  <label class="col-sm-3 control-label">First Name*:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="F_Name" name="F_Name" placeholder="First Name" required="required">
					  </div>
					 </div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Last Name*:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="L_Name" name="L_Name" placeholder="Last Name" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Email*:</label>
					  <div class="col-sm-7">
					    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Phone:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="phone" name="phone" placeholder="xxxxxxxxxx">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Message*:</label>
					  <div class="col-sm-7">
					    <textarea class="form-control" rows="6" id="message_text" name="message_text" ></textarea>
					    <br />
					  <p class="text-right"><i>max 1000 characters</i></p>
					  </div>
					</div>
				</div>
	      <div class="modal-footer modal-footer-height">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-lgBule" value="send" onclick="validateContact()">Send <i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i></button>
	      </div>
      </form>
    </div>
  </div>
</div>