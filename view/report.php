<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Report</title>
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
    
	
	<!-- Welcome Board -->
    <div class="container wboard jumbotron">
        <h2><strong>Your report is ready!</strong></h2>

        <p class="justText">We just finished crunching your numbers are made a brief summary based on your inputs.</p>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>
            
            </div>
            <div class="col-sm-10">
                <hr>
            
            </div>
            <div class="col-sm-1">
                <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-11">
                <span id= 'dprogress'>Details</span> 
            
            </div>
            <div class="col-sm-1">
                <span id='cprogress'>Cashflows</span> 
            </div>
        </div>
        
    </div>	

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="container wboard jumbotron">
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <strong class="justText">Quick Figures Digest</strong>
                                
                        </div>
                        <div class="col-lg-1">
                            <div class="justText"><i class="fa fa-question-circle-o" aria-hidden="true"></i></div>
                        </div>
                        <div class="col-lg-8">
                            <p class="justText">Figures are subject to change with time. Use again to receive updated results.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-10">
                            <strong class="justText">Needed Capital</strong>
                            <p class="justText">
                                Money needed to pay for project purchases
                            </p>
                        </div>
                        <div class="col-lg-2 justText">
                            $0.00
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-10">
                            <strong class="justText">Payback Period</strong>
                            <p class="justText">
                                Time it takes for money generated by project to reach investments
                            </p>
                        </div>
                        <div class="col-lg-2 justText">
                            2 Years
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-10">
                            <strong class="justText">Net Present Value</strong>
                            <p class="justText">
                                Value of all future money generated by your project
                            </p>
                        </div>
                        <div class="col-lg-2 justText">
                            $319,754
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-10">
                            <strong class="justText">Profitability Index</strong>
                            <p class="justText">
                                Whether your project should be accepted (>1) or rejected (< 1)
                            </p>
                        </div>
                        <div class="col-lg-2 justText">
                            1.2
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
                <div class="col-lg-4" style="background-color: #62B16F; color: white; margin-top: 75px;">
                    <br><br>
                    <strong>Status: Profitable</strong>

                    <p>
                        After calculating the inputs given, we recommend that you proceed with your project as it is deemed profitable
                    </p>
                </div>
        </div>
    
    </div>
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>