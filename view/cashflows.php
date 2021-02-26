<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Cashflows</title>
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
        <h2><strong>Enter your project cash flows</strong></h2>

        <p >Tell us about how money comes in and out of your business</p>
        <br>
        <hr>
        <p>
           <span id= 'dprogress'>Details</span> <span id='cprogress'>Cashflows</span> 
        </p>
    </div>	

    <div class="container wboard jumbotron">
        <h4><strong>Project Inputs</strong> </h4>
		<form id = "project_inputs">
			<div class="row">
                <div class="col-lg-4">
                
                    <label for ="sDate" id = "sDate_label">Start Date <span style="color: red;">*</span></label>
                    <br>
                    <select class="form-control" id="sDate" placeholder="27/11/2020" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    
                </div>
                <div class="col-lg-4">
                    <label for ="eDate" id = "eDate_label">End Date <span style="color: red;">*</span></label>
                    <br>
                    <select class="form-control" id="eDate" placeholder="01/10/2021" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                
                </div>
                <div class="col-lg-4">
                    <br>
                    <br>
                    <input type="checkbox" id="checkUnknown" required>
                    <label class="form-check-label" for="checkUnknown">End Date Unknown or Indefinite <span style="color: red;">*</span> </label>
                    <br>
                
                </div>
            </div>
			<br>
			<br>
            <div class="row">
                <div class="col-lg-8">
                    <label for ="income" id = "income_label">Income <span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="income" name="income" placeholder="Describe one means your project will make money" required>
                
                </div>
                <div class="col-lg-2">
                    <label for ="amount" id = "amount_label">Amount ($) <span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="amount" name="amount1" placeholder="State amount" required>
                    <br>
                
                </div>
                <div class="col-lg-2">
                <br>
                <button class="btn btn-secondary" type="button" id="add1">+</button>
                </div>
            </div>
			<br>
            <div class="row">
                <div class="col-lg-8">
                    <label for ="costs" id = "costs_label">Costs<span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="costs" name="costs" placeholder="Describe one means your project will spend money" required>
                
                </div>
                <div class="col-lg-2">
                    <label for ="amount2" id = "amount_label2">Amount ($) <span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="amount2" name="amount2" placeholder="State amount" required>
                    <br>
                
                </div>
                <div class="col-lg-2">
                <br>
                <button class="btn btn-secondary" type="button" id="add2">+</button>
                </div>
            </div>
			<br>
            <div class="row">
                <div class="col-lg-1">
                    <div class="justText"><i class="fa fa-question-circle-o" aria-hidden="true"></i></div>
                </div>
                <div class="col-lg-9">
                    <p class="justText">Use the plus button to add additional income/costs!</p>
                
                </div>
                <div class="col-lg-2">
                
                <button class="btn btn-secondary" type="button" id="usd">USD</button>
                </div>
            </div>
			<br>
			
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <button class="btn btn-light" type="button" id="goback" disabled>Go Back</button>
                
                </div>
                <div class="col-lg-1">
                    <button class="btn btn-dark" type="button" id="continue">Continue</button>
                
                </div>
            </div>
        </form>

        </div>
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>