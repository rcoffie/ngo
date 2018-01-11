<?php  include('header.php');   ?>






<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="https://formsubmit.io/send/rcoffie22@yahoo.com"  method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
				<textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7" required></textarea>

					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    
            
        <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>







    
    
    
 <?php include('footer.php');   ?>