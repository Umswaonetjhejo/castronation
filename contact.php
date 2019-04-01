<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
			<div class="service_content">
				<?php
					require("email.php");
				?>
				<h4><b>Contact Us</b></h4>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						
					</div>
					<div class="col-xs-0 col-sm-6 col-md-6 col-lg-6">

					</div>
				</div>
			
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<span class="glyphicon glyphicon-phone" style="color: darkblue"></span>071 174 4873<br>
						<span class="glyphicon glyphicon-envelope" style="color: darkblue"></span>info@castronation.co.za<br><br>
						<span class="glyphicon glyphicon-map-marker" style="color: darkblue"></span>Sunrise Boulevard & Noon Street<br>
						Fourways Crossing
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contact_form">
						<form role="form" method="post" action="<?php echo "?req=contact" ?>">
							<div class="form-group">
								First Name <span class="glyphicon glyphicon-asterisk" style="color: red"></span>
								<input id="input-text" type="name" class="form-control" required="" placeholder="Name" name ="first_name" />
							</div>
							<div class="form-group">
								Telephone Number <span class="glyphicon glyphicon-asterisk" style="color: red"></span>
								<input id="input-text" type="cellphone" class="form-control" required="" placeholder="Telephone/cell numbers" name ="cell" />
							</div>
							<div class="form-group">
								Email Address <span class="glyphicon glyphicon-asterisk" style="color: red"></span>
								<input id="input-text" type="email" class="form-control" required="" placeholder="youremail@email.com" id="input-text" name ="email_address" />
							</div>
							<div class="form-group">
								City <span class="glyphicon glyphicon-asterisk" style="color: red"></span>
								<input id="input-text" type="city" class="form-control" required="" placeholder="City" name ="city"/>
							</div>
							<div class="form-group">
								Message <span class="glyphicon glyphicon-asterisk" style="color: red"></span>
								<textarea id="input-text" class="form-control" required placeholder="Comment" name="comments"></textarea>
							</div>
							<div class="form-group" id="button">
								<button  id="input-submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img class="img-responsive" data-u="image" src="img/portfolio/43.jpg" alt="" id="img_home" />
		</div>
	</div>

</div>