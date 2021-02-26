<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/welcome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
	<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="./assets/logo1.jpg" alt=""></a>
			<!-- Hamburger -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <!-- Collapses navbar items into Hamburger -->
		  <div class="collapse navbar-collapse" id="navbarNav">
		    
			<ul class="navbar-nav my-2 my-lg-0 ml-auto">
                <li class="nav-item active" >
		            <a class="nav-link" href="./view/dashboard.php">Dashboard</a>
		        </li>
                <li class="nav-item " >
		            <a class="nav-link" href="./view/pArchives.php">Project Archives</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="#">Assistant</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="#">Project Tracker</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
		        </li>
		      

			  
			</ul>
			</div>

 		</div>
    </nav>
    <br>
    
	
	<!-- Welcome Board -->
    <div class="container dTwin" style="margin-top: 60px;">
        <h2 style="text-align: start;"><strong>Welcome</strong></h2>
        <br><br>
        <div class="dIcon jumbotron" style="border-radius: 20px;">
        
        </div>
        <br>
        <p>
            <h4><strong>
            Hey
            <br>
            Ready to make that idea a reality?
            </strong></h4>
        </p>
        <p class="justText">
            I'm with you all the way!
            <br>
            Let's help you know the value of your project in two easy steps...click the button to start
        </p>
        <br>
        <button class="btn btn-dark" type="button" id="getStarted" style="border-radius: 20px;">Get Started</button>
        <hr>
        
    </div>	

    
        
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>