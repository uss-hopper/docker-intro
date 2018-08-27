<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- FontAwesome -->


		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->


		<!-- Google reCAPTCHA -->


		<!-- form validate js -->


		<title>PWP Form Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header class="py-5">
				<div class="container">
					<h1>PWP Form Demo</h1>
				</div>
			</header>

			<main class="container pb-5">
				<div class="row">
					<div class="col-md-6">

						<!-- BEGIN CONTACT FORM -->
						<form id="demo-form" method="post" action="php/mailer.php">
							<div class="form-group">
								<label for="demoName">Name</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input class="form-control" type="text" name="demoName" id="demoName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="demoEmail">Email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input class="form-control" type="email" name="demoEmail" id="demoEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="demoSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-pencil"></i></span>
									</div>
									<input class="form-control" type="text" name="demoSubject" id="demoSubject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="demoMessage">Message</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-comment"></i></span>
									</div>
									<textarea name="demoMessage" rows="5" id="demoMessage" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
								</div>
							</div>

							<div class="g-recaptcha" data-sitekey="6Lf_ZVwUAAAAABkUXBI61Cs7Lxv2FviDufAeIHnE"></div>

							<button class="btn btn-info" type="submit">Submit</button>
							<button class="btn btn-default" type="reset">Reset</button>
						</form>
						<!-- END CONTACT FORM-->

						<div id="output-area"></div>

					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->
			</main>
		</div>

		<footer class="py-4 text-white">
			<div class="container">
				<a class="text-white" href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">Documentation</a> | <a class="text-white" href="https://github.com/rlewis2892/pwp-form-demo" target="_blank">GitHub</a>
			</div>
		</footer>
	</body>
</html>