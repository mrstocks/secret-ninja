<div class="container">
 	<div class="row">
 		<div>
 			<div class="<?php echo $alert_class?>"><?php echo $alert_msg?></div>
 			<h4>Contactez-nous</h4>
 			<h6>S'il vous plaît nous localiser à l'aide de notre carte ci-dessous.<br/>
 				Vous pouvez aussi parler à nous en laissant un message ici.</h6>

 			<!-- Google maps -->
                   <div class="gmap">
                      	<iframe style="width: 100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=La+Guilti%C3%A8re,+Thub%C5%93uf&amp;aq=1&amp;oq=la+guilti&amp;sll=48.150687,-0.643962&amp;sspn=1.172755,2.469177&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=La+Guilti%C3%A8re,+Thub%C5%93uf,+Mayenne,+Pays+de+la+Loire&amp;z=14&amp;ll=48.491066,-0.449788&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=La+Guilti%C3%A8re,+Thub%C5%93uf&amp;aq=1&amp;oq=la+guilti&amp;sll=48.150687,-0.643962&amp;sspn=1.172755,2.469177&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=La+Guilti%C3%A8re,+Thub%C5%93uf,+Mayenne,+Pays+de+la+Loire&amp;z=14&amp;ll=48.491066,-0.449788" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
                   </div>
 		</div>
 		<div class="col-md-9">
 			<div class="panel panel-info">
 				<div class="panel-heading">Laissez votre message ici</div>
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
			      <input type="email" class="form-control" id="cnt_email" name="cnt_email" placeholder="Email Adress">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg_subject" class="col-lg-2 control-label">Subject</label>
			    <div class="col-lg-9">
			      <input type="text" class="form-control" name="cnt_msg_subject" id="cnt_msg_subject" name="cnt_msg_subject" placeholder="Message Subject">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="cnt_msg" class="col-lg-2 control-label">Message</label>
			    <div class="col-lg-9">
			    <textarea class="form-control" name="cnt_msg" name="cnt_msg" id="cnt_msg" rows="7"></textarea>
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
 				<div class="panel panel-info">Mon Adresse</div>
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