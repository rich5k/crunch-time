<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Project</title>
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
        <h2><strong>Welcome Aboard!</strong></h2>

        <p >Tell us a few things about your projects</p>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <i class="fa fa-circle-o fa-2x" aria-hidden="true"></i>
            
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
        <h4><strong>Project Details</strong> </h4>
		<form id = "project_details" action="./cashflows.php" method="POST" onsubmit="saveData()">
			<label for ="pName" id = "name_label">Project Name <span style="color: red;">*</span> </label>
			<br>
			<input type="text" class="form-control" id="pName" name="pName" placeholder="Give us the name of your project" required>
			<br>
			<br>
			<br>
			
			
			<label for ="industry" id = "indusry_label">Industry <span style="color: red;">*</span></label>
			<br>
			<select class="form-control" id="industry" placeholder="Select the industry your project serves" required>
                <option>Banking</option>
                <option>Tourism</option>
                <option>Pharmaceutial</option>
                <option>Automobile</option>
                <option>Textile</option>
				<option>Oil and Gas</option>
				<option>Fishing</option>
				<option>Mining</option>
				<option>Telecommunication</option>
				<option>Music</option>
            </select>
			
			<br>
			<br>
			<br>
			<label for = "pDescription" id = "description_label">Project Description <span style="color: red;">*</span></label>
			<br>
			
			<textarea id = "pDescription" class="form-control" name = "pDescription" rows="1" cols="50" placeholder="Give us the problem your project solves and the solution" required></textarea>
			<br>
            <input type="checkbox" id="checkOngoing" required>
            <label class="form-check-label" for="checkOngoing">This project is currently ongoing <span style="color: red;">*</span> </label>
        <script>
            function saveData() {
                
                var pName = document.getElementById("pName").value;
                var industry = document.getElementById("industry").value;
                var pDesc = document.getElementById("pDescription").value;
                // alert(pName);
                localStorage.setItem("pName", pName);
                localStorage.setItem("industry", industry);
                localStorage.setItem("pDesc", pDesc);
                // alert(localStorage.getItem("pName"));
                
            }
        </script>
			<br>
        </div>
        <div class="container">
		<div class="row">
                <div class="col-lg-11">
                    <button class="btn btn-light" type="button" id="goback" disabled>Go Back</button>
                
                </div>
                <div class="col-lg-1">
                    <button  class="btn btn-dark" type="submit" id="continue">Continue</button>
                
                </div>
            </div>
        </form>

        </div>
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>