<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_us.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
	<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="../assets/logo1.jpg" alt=""></a>
			<!-- Hamburger -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <!-- Collapses navbar items into Hamburger -->
		  <div class="collapse navbar-collapse" id="navbarNav">
		    
			<ul class="navbar-nav my-2 my-lg-0 ml-auto">
                <li class="nav-item active" >
		            <a class="nav-link" href="dashboard.php">Dashboard
				
		        </li>
                <li class="nav-item " >
		            <a class="nav-link" href="pArchives.php">Project Archives
				
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="assistant.php">Assistant
				
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="pTracker.php">Project Tracker
				
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i>
				
		        </li>
		      

			  <li class="nav-item" style="color: white">
		        
				<!-- checks to see if someone has signed in as a seller -->
				<?php
					if(isset($_SESSION['sessionFname1'])&&isset($_SESSION['sessionLname1'])){
						printf('Welcome, %s %s :)', $_SESSION['sessionFname1'], $_SESSION['sessionLname1']);
						echo <<<_SIGNOUTITEM
							<a id="sign-in" class="nav-link" href="logout.php">
								SIGN OUT 
							<i class="fa fa-sign-out" aria-hidden="true"></i></a>
						
						_SIGNOUTITEM;

					}else{
						
						echo <<<_SELLSIGNINITEM
						<a id="sign-in" class="nav-link" href="sell_sign_in.php">
							SELLER SIGN IN
						<i class="fa fa-user-circle" aria-hidden="true"></i></a>

						_SELLSIGNINITEM;
					}
				?>

		      </li>
			</ul>
			</div>

 		</div>
    </nav>
    <br>
    
	
	<!-- contact us form -->
    <div class="container">
        <h2>CONTACT US</h2>

        <p >Kindly email us with any questions, complaints, inquires or donations, you would like to make or call +2338941602.
        We would be happy to entertain all your questions and give you the best of service.
		</p>
		
		<form id = "contact_us">
			<label for ="Name" id = "name_label">Name</label>
			<br>
			<input type="text" id="full_name" name="fll_name">
			<br>
			<br>
			<br>
			
			
			<label for ="Email" id = "mail_label">Email</label>
			<br>
			<input type = "email" id = "email" name = "email">
			
			<br>
			<br>
			<br>
			<label for = "message" id = "msg_label">Message</label>
			<br>
			
			<textarea id = "msg" name = "msg_label" rows="4" cols="50"></textarea>
			<br>
			<br>
			<button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
		</form>
    </div>

	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>