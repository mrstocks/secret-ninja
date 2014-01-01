<div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="<?php echo $alert_class?>"><?php echo $alert_msg?></div>
 			<h4>Get In Touch</h4>
 			<h6>Please locate us using our map below.<br/>
 				You can also talk to us by leaving a message here.</h6>

 			<!-- Google maps -->
                   <div class="gmap">
                      	<!-- Embeded code for Google Maps  -->
                   </div>
 		</div>
 		<div class="col-md-9">
 			<div class="panel panel-info">
 				<div class="panel-heading">Leave your message here</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					 <div class="form-group">
			    <label for="cnt_name" class="col-lg-2 control-label">Full Name</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" name="cnt_name" id="cnt_name" placeholder="Full Name">
			    </div>
			   </div>
			  <div class="form-group">
			    <label for="cnt_email" class="col-lg-2 control-label">Email</label>
			    <div class="col-lg-9">
			      <input type="email" class="form-control" id="cnt_email" placeholder="Email Adress">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg_subject" class="col-lg-2 control-label">Subject</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" id="cnt_msg_subject" name="cnt_msg_subject" placeholder="Message Subject">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg" class="col-lg-2 control-label">Message</label>
			    <div class="col-lg-9">
			    <textarea class="form-control" name="cnt_msg" id="cnt_msg" rows="7"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			     <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit"  name="submit" id="submit" class="btn btn-primary">Submit Message</button>
				    </div>
			  </div>
			  </form>
			</div>
		</div>
		</div>

		<div class="col-md-3">
 				<div class="panel panel-info">
 					<div class="panel-heading">My Address</div>
					<div class="panel-body">
                                  <div class="address">
                                      <address>
                                         <!-- Company name -->
                                         <label>Name:</label> Oliver Stocks<br/>
                                         <!-- Address -->
                                         <label>Address:</label>
                                         Les fées de Celestia<br/>
                                         La Guiltiere, 53110 Thuboeuf<br/>
                                         France<br/>
                                         <!-- Phone number -->
                                         <label>Phone: </label> (0033) 6765913293.
                                         <label>Email:</label><a href="mailto:stocks.oliver@gmail.com">stocks.oliver@gmail.com</a><br/>
                                         <label>CV: </label><a href="#"> Download PDF version</a>
								</address>
					</div>
 					</div>
 			</div>
</div>
