<!DOCTYPE html>
<html>
	<head>
		<?php if (!isset($_GET['register'])){ $page_title = "Login";}else { $page_title = "Register";} ?>
		<?php include 'head.php'; ?>
	</head>
	
	<body>

                        
	                      
	
         
      <div class="out-container">
         
		 <div class="login-page">
			<div class="container">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified">
				  <li class="<?php if (!isset($_GET['register'])){ echo 'active';} ?>"><a href="#login" data-toggle="tab"><i class="icon-signin"></i> Login</a></li>
				  <li class="<?php if (isset($_GET['register'])){ echo 'active';} ?>"><a href="#register" data-toggle="tab"><i class="icon-pencil"></i> Register</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane fade <?php if (!isset($_GET['register'])){ echo 'in active';} ?>" id="login">
				  
				  
					<!-- Login form -->
					
					<form role="form" method="POST" action="/dashboard">
					  <div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> Remember Me Next Time
						</label>
					  </div>
					  <button type="submit" class="btn btn-danger btn-sm">Submit</button>
					  <a href="/" class="btn btn-black btn-sm">Back</a>
					</form>
					
				  </div>
				  
				  
				  <div class="tab-pane fade <?php if (isset($_GET['register'])){ echo 'active in';} ?>" id="register">
					<!-- Register form -->
					
					<form role="form" method="POST" action="/dashboard">
					  <div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" id="name" placeholder="Full Name">
					  </div>
					  <div class="form-group">
						<label for="name">Club Name</label>
						<input type="text" class="form-control" id="name" placeholder="Club Name">
					  </div>
					  <div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <div class="form-group">
						<label for="cpassword">Confirm Password</label>
						<input type="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
					  </div>
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> Agree <a href="#">Terms & Conditions</a>
						</label>
					  </div>
					  <button type="submit" class="btn btn-danger btn-sm">Submit</button>
					  <a href="/" class="btn btn-black btn-sm">Back</a>
					</form>
				  
				  </div>
				</div>
				
			</div>
		 </div>	
		 
      </div>
		
      
	  <!-- Javascript files -->
	  <!-- jQuery -->
	  <script src="js/jquery.js"></script>
	  <!-- Bootstrap JS -->
	  <script src="js/bootstrap.min.js"></script>
	  <!-- Respond JS for IE8 -->
	  <script src="js/respond.min.js"></script>
	  <!-- HTML5 Support for IE -->
	  <script src="js/html5shiv.js"></script>
            
	</body>	
</html>