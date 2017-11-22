<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Workshop CodeInginter</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<form class="form-signin" action=""><!--Falta agregar el action-->
						<h2 class="form-signin-heading">Sing Up</h2>
						<label for="name" class="sr-only">Name</label>
						<input type="text" id="name" class="form-control" placeholder="Your name" required="" autofocus="">
						<label for="lastName" class="sr-only">LastName</label>
						<input type="text" id="lastName" class="form-control" placeholder="your last name" required="">
						
						<label for="password" class="sr-only">Password</label>
						<input type="password" id="password" class="form-control" placeholder="Password" required="">
						
						<label for="confPassword" class="sr-only">Confirm the Password</label>
						<input type="confPassword" id="confPassword" class="form-control" placeholder="Password" required="">
						

						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
					</form>
					
				</div>
				
			</div>
			
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>