<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/welcome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
	<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
		<div class="container">
			<a class="navbar-brand" href="../index.php"><img src="../assets/logo1.jpg" alt=""></a>
			<!-- Hamburger -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <!-- Collapses navbar items into Hamburger -->
		  <div class="collapse navbar-collapse" id="navbarNav">
		    
			<ul class="navbar-nav my-2 my-lg-0 ml-auto">
                <li class="nav-item active" >
		            <a class="nav-link" href="dashboard.php">Dashboard</a>
		        </li>
                <li class="nav-item " >
		            <a class="nav-link" href="pArchives.php">Project Archives</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="assistant.php">Assistant</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="pTracker.php">Project Tracker</a>
		        </li>
                <li class="nav-item" >
		            <a class="nav-link" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
		        </li>
		      

			  
			</ul>
			</div>

 		</div>
    </nav>
    <br>
    
	
	<!-- Dashboard -->
    <div class="container dashbaord">
        <div class="row">
            <div class="col-lg-9">
                <h1><strong>Your Dashboard</strong> </h1>
                <div class="row">
                    <div class="col-lg-11">
                        <h4>Project Summary </h4>

                    </div>
                    <div class="col-lg-1">
                        <h4><i class="fa fa-long-arrow-right" aria-hidden="true"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="container cbalance wboard jumbotron">
                            <h4><strong>Current Net Balance</strong></h4>
                            <br>
                            <h2 class="cash"><strong>$26,300.00</strong></h2>
                            <br>
                            <br>
                            <button onclick="location.href = './welcome.php';" class="btn btn-dark" type="button" id="addProject">Add Project</button>
                        </div>	

                    </div>
                    <div class="col-lg-8">
                        <div class="container wboard jumbotron">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4><strong>Recent Projects</strong></h4>

                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-dark" type="button" id="viewMore">View More</button>
                                    
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3 date">
                                    3/01/20
                                </div>
                                <div class="col-lg-3">
                                    <h6><strong>Contract System</strong></h6>
                                </div>
                                <div class="col-lg-3 cash">
                                    Profit
                                </div>
                                <div class="col-lg-3 cash">
                                    $300.00
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 date">
                                    2/02/20
                                </div>
                                <div class="col-lg-3">
                                    <h6><strong>Online Payment</strong></h6>
                                </div>
                                <div class="col-lg-3 cash">
                                    Profit
                                </div>
                                <div class="col-lg-3 cash">
                                    $1,000.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 dIcon jumbotron">
                        
                    </div>
                    <div class="col-lg-6 dTwin">
                        <br><br><br>
                        <br><br><br>
                        <h4><strong>Hello Again</strong></h4>
                        <h4><strong>Looking good</strong></h4>
                        <p>
                            At the top is a quick look at you previous projects.
                            <br>
                            The right are some news to improve your project value
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
            <div class="row">
                    <div class="col-lg-8">
                        <h4>Project News</h4>

                    </div>
                    <div class="col-lg-4">
                        <h4><i class="fa fa-long-arrow-right" aria-hidden="true"></i></h4>
                    </div>

                    <div class="container wboard jumbotron">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4><strong>3 Step Project Tips</strong> </h4>

                            </div>
                            <div class="col-lg-4">
                                Date posted
                            </div>
                        </div>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae sit quis maiores asperiores iure accusantium 
                            ...more
                        </p>
                    </div>
                    <div class="container wboard jumbotron">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4><strong>How To Improve Value</strong> </h4>

                            </div>
                            <div class="col-lg-4">
                                Date posted
                            </div>
                        </div>
                        <div class="dIcon">
                            
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae sit quis maiores asperiores iure accusantium 
                            ...more
                        </p>
                    </div>
                    <div class="container wboard jumbotron">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4><strong>Capital Funders</strong> </h4>

                            </div>
                            <div class="col-lg-4">
                                Date posted
                            </div>
                        </div>
                    
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae sit quis maiores asperiores iure accusantium 
                            ...more
                        </p>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>