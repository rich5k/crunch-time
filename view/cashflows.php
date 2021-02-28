<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Cashflows</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/welcome.css">
    <script src="../js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
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
        <div class="row">
            <div class="col-sm-1">
                <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>
            
            </div>
            <div class="col-sm-10">
                <hr>
            
            </div>
            <div class="col-sm-1">
                <i class="fa fa-circle-o fa-2x" aria-hidden="true"></i>
            
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

    <div class="container wboard jumbotron">
        <h4><strong>Project Inputs</strong> </h4>
		<form id = "project_inputs" action="../controller/project_add.php" method="POST" onsubmit="addData()">
			<div class="row">
                <div class="col-lg-4">
                    <input type=hidden id="pName1" name="pName1" value="none"/>
                    <input type=hidden id="industry1" name="industry1" value="none"/>
                    <input type=hidden id="pDescription1" name="pDescription1" value="none"/>
                    <!-- input field to pick from date -->
                    <label for ="from_date" id = "from_date_label">Start Date <span style="color: red;">*</span></label>
                    <br>
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Start Date">
                    <span id= "fdateError" class="text-danger font-weight-bold"></span>
                    
                </div>
                <div class="col-lg-4">
                   <!-- input field to pick to date -->
                   <label for ="to_date" id = "to_date_label">End Date <span style="color: red;">*</span></label>
                    <br>
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="End Date">
                    <span id= "fdateError" class="text-danger font-weight-bold"></span>
                    
                
                </div>
                <div class="col-lg-4">
                    <br>
                    <br>
                    <input type="checkbox" id="checkUnknown" >
                    <label class="form-check-label" for="checkUnknown">End Date Unknown or Indefinite  </label>
                    <br>
                
                </div>
            </div>
			<br>
			<br>
            <div class="row">
                <div class="col-lg-8">
                    <label for ="pDuration" id = "pDuration_label">Project Duration (months) <span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="pDuration" name="pDuration" placeholder="State project duration" required>
                
                </div>
            </div>
                <br>
            <div class="row">
                <div class="col-lg-8">
                    <label for ="income" id = "income_label">Total Income ($)<span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="income" name="income" placeholder="State Amount" required>
                
                </div>
                
            </div>
			<br>
            <div class="row">
                <div class="col-lg-8">
                    <label for ="costs" id = "costs_label">Total Cost($)<span style="color: red;">*</span> </label>
                    <br>
                    <input type="text" class="form-control" id="costs" name="costs" placeholder="State Amount" required>
                
                </div>
                
            </div>
			<br>
            
			<br>
			
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <button onclick="location.href = './welcome.php';" class="btn btn-light" type="button" id="goback" >Go Back</button>
                
                </div>
                <div class="col-lg-1">
                    <button onclick="location.href = './report.php';" class="btn btn-dark" type="submit" id="continue" name="continue">Continue</button>
                
                </div>
            </div>
        </form>

        </div>
	<br>
	
    <script>
        function addData() {
                
            var pName = document.getElementById("pName1");
            var industry = document.getElementById("industry1");
            var pDesc = document.getElementById("pDescription1");
                // alert(pName);
            pName.value=localStorage.getItem("pName");
            industry.value=localStorage.getItem("industry");
            pDesc.value=localStorage.getItem("pDesc");
                // alert(localStorage.getItem("pName
                
        }
        $(document).ready(function(){
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd'
            });
            //displays calender for both inputs
            $(function(){
                $("#from_date").datepicker();
                $("#to_date").datepicker();
            });
            
        });
        </script>
	

	
	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>