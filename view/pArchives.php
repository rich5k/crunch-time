<?php
require_once '../controller/database.php';
require_once '../models/Project.php';
require_once '../models/Database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Archives</title>
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
                <li class="nav-item" >
		            <a class="nav-link" href="dashboard.php">Dashboard</a>
		        </li>
                <li class="nav-item active" >
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
    
	
	<!-- Project Archives-->
    <div class="container dashbaord">
        <h1 style="color: #0E76A8;"><strong>Project Archives</strong> </h1>
        <div class="row">
            <div class="col-lg-4">
               <h4><strong>My Balance</strong></h4>
                <div class="row">
                    <div class="container cbalance wboard jumbotron">
                        <h4><strong>Current Net Balance</strong></h4>
                        <br>
                        <?php
                                 // Instantiate project
                                $project= new Project();
                                $totalNBalance=0.00;
                                $projects= $project->getProjects();
                                foreach($projects as $p){
                                    $netBalance= $p->totalInflow - $p->totalOutflow;
                                    $totalNBalance= $totalNBalance+ $netBalance; 
                                }
                                echo '<h2 class="cash"><strong>$'.sprintf("%.2f",$totalNBalance).'</strong></h2>'

                            ?>
                        <!-- <h2 class="cash"><strong>$26,300.00</strong></h2> -->
                        <br>
                        <div class="row">
                            <div class="col-lg-6 date">
                                Total Cash Inflow
                            </div>
                            <div class="col-lg-6 cash">
                                
                                <?php
                                 // Instantiate project
                                $project= new Project();
                                $totalInflow=0.00;
                                $projects= $project->getProjects();
                                foreach($projects as $p){
                                    
                                    $totalInflow= $totalInflow+ $p->totalInflow; 
                                }
                                echo '$'.sprintf("%.2f",$totalInflow)

                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 date">
                                Total Cash Outflow
                            </div>
                            <div class="col-lg-6 outflow">
                                
                                <?php
                                 // Instantiate project
                                $project= new Project();
                                $totalOutflow=0.00;
                                $projects= $project->getProjects();
                                foreach($projects as $p){
                                    
                                    $totalOutflow= $totalOutflow+ $p->totalOutflow; 
                                }
                                echo '(-)$'.sprintf("%.2f",$totalOutflow)

                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 justText">
                                <strong>Total</strong>
                            </div>
                            <div class="col-lg-6 cash">
                            <?php
                                 // Instantiate project
                                $project= new Project();
                                $totalNBalance=0.00;
                                $projects= $project->getProjects();
                                foreach($projects as $p){
                                    $netBalance= $p->totalInflow - $p->totalOutflow;
                                    $totalNBalance= $totalNBalance+ $netBalance; 
                                }
                                echo '$'.sprintf("%.2f",$totalNBalance)

                            ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 justText">
                                
                            </div>
                            <div class="col-lg-6 cash">
                                <button onclick="location.href = './welcome.php';" class="btn btn-dark" type="button" id="addProject">Add Project</button>
                                
                            </div>
                        </div>
                    </div>	
                   
                    
                </div>
                
            </div>
            
            <div class="col-lg-8">
                <h4><strong>Project History</strong></h4>
                <div class="container wboard jumbotron">
                    <div class="row">
                        <div class="col-lg-3">
                           <strong>DATE</strong>
    
                        </div>
                        <div class="col-lg-3">
                            <strong>PROJECT NAME</strong>
    
                        </div>
                        <div class="col-lg-3">
                           <strong>STATUS</strong>
    
                        </div>
                        <div class="col-lg-3">
                            <strong>NET BALANCE</strong>
    
                        </div>
                    </div>
                    
                </div>
                <div class="container phistory jumbotron">
                    <br>
                    <?php
                         // Instantiate project
                        $project= new Project();
                        // $totalNBalance=0.00;
                        $projects= $project->getProjects();
                        foreach($projects as $p){
                            echo '<div class="row">';
                            echo '  <div class="col-lg-3 date">';
                            $pDuration= $project->getProjectDuration($p->projectID);
                            foreach($pDuration as $pd){
                                echo $pd->startTime;

                            }
                            echo '  </div>';
                            echo '  <div class="col-lg-3 justText">';
                            echo '      <h6><strong>'.$p->projectName.'</strong></h6>';
                            echo '  </div>';
                            if($p->totalInflow > $p->totalOutflow){
                                echo '  <div class="col-lg-3 cash">';
                                echo '      Profit';
                                echo '  </div>';
                                echo '  <div class="col-lg-3 cash">';
                                $netBalance= $p->totalInflow - $p->totalOutflow;
                                echo '$'.$netBalance;
                                echo '  </div>';
                                echo '</div>';
                                echo '<br>';

                            }
                            else{
                                echo '  <div class="col-lg-3 outflow">';
                                echo '      Loss';
                                echo '  </div>';
                                echo '  <div class="col-lg-3 outflow">';
                                $netBalance= $p->totalInflow - $p->totalOutflow;
                                echo '(-)$'.$netBalance;
                                echo '  </div>';
                                echo '</div>';
                                echo '<br>';
                            }
                        }
                                // echo '<h2 class="cash"><strong>$'.sprintf("%.2f",$totalNBalance).'</strong></h2>'

                    ?>
                    
                        
                   
                </div>
            </div>
        </div>

    </div>
    
	<br>
	
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>