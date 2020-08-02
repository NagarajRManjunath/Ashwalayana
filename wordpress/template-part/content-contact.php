<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(isset($_POST))
		{
			
			$name = $_POST['fname']." ".$_POST['lname'];
			$email = $_POST['email'];
			$number = $_POST['phone'];
			$m_subject = $_POST['subject'];
			$message = "Hi Admin, Mr/Ms/Mrs : ".$name." <br> Email : ".$email." <br> Number : ".$number." <br> Message : ".$m_subject;
			$to      = $email;
			$subject = 'the subject';
			$message = 'hello';
			$headers = 'From: idudeveloper@pepisandbox.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			$ol = mail($to, $subject, $message, $headers);
			if($ol)
				echo '<script>messageDisplay("success");</script>';
			else
				echo '<script>messageDisplay("not_success");</script>';
		}
		
	}

?>

<section id="ContactSection" class="pt-5 pb-4">
				<div class="container">
					<div hidden id="message_display" class="alert alert-info">						  
					</div>
					<div class="row pt-3">
						<div class="col-md-12 text-center text-uppercase "><h3 class="theme-underline color-primary">Contact Us</h3></div>
					</div>
					<form id="contactUS" action="" method="post">
						<div class="row pt-3">
							<div class="col-md-6">
								<input type="text" id="fname" name="firstname"  class="form-control" placeholder="First name" required>
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" name="lastname"  class="form-control" placeholder="Last name" required>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-6">
								<input type="email" id="email" name="email"  class="form-control" placeholder="Your email address" required>
							</div>
							<div class="col-md-6">
								<input type="tel" id="phone" name="phone"  class="form-control" placeholder="Your phone number" pattern="[0-9]{10}" required>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-12">
								<textarea id="subject" rows="4" name="subject" placeholder="Type your message here" class="form-control" required></textarea>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-12 text-center">
								<input type="submit" value="Submit" class="btn btn-primary bg-secondary border-secondary">
							</div>
						</div>
					</form>
				</div>
			</section>

<!-- <section id="ContactSection" class="pt-5 pb-4">
				<div class="container">
					<div class="row pt-3">
						<div class="col-md-12 text-center text-uppercase "><h3 class="theme-underline color-primary">Contact Us</h3></div>
					</div>
					<form id="contactUS" action="" method="post">
						</div>
						<div class="row pt-3">
							<div class="col-md-6">
								<input type="text" id="fname" name="firstname"  class="form-control" placeholder="First name" required>
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" name="lastname"  class="form-control" placeholder="Last name" required>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-6">
								<input type="email" id="email" name="email"  class="form-control" placeholder="Your email address" required>
							</div>
							<div class="col-md-6">
								<input type="tel" id="phone" name="phone"  class="form-control" placeholder="Your phone number" pattern="[0-9]{10}" required>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-12">
								<textarea id="subject" rows="4" name="subject" placeholder="Type your message here" class="form-control" required></textarea>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col-md-12 text-center">
								<input type="submit" value="Submit" class="btn btn-primary bg-secondary border-secondary">
							</div>
						</div>
					</form>
				</div>
			</section> -->