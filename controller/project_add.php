<?php

if(isset($_POST['continue'])){
    require_once '../controller/database.php';
    require_once '../models/Project.php';
    require_once '../models/Database.php';
    $pName=$_POST['pName1'];
    $industry=$_POST['industry1'];
    $pDesc=$_POST['pDescription1'];
    $sDate=$_POST['from_date'];
    $eDate=$_POST['to_date'];
    $income=$_POST['income'];
    $cost=$_POST['costs'];

    echo $pName."<br>";
    echo $industry;
    echo $pDesc;
    echo $sDate;
    echo $eDate;
    echo $income;
    echo $cost;

     // Instantiate project
     $project= new Project();

    // Project Data
    $projectData= [
        "projectName"=> $pName,
        "industry"=> $industry,
        "pDescription"=> $pDesc,
        "totalInflow"=> $income,
        "totalOutflow"=> $cost
        
    ];
    // Project_Duration Data
    $projectDurationData= [
        "startTime"=> $sDate,
        "endTime"=> $eDate
    ];

    if($project->addProject($projectData)){
        if($project->addProjectDuration($projectDurationData)){
            echo "<script> alert('This project has been added') </script>";
            echo "<script>window.location= '../view/report.php'</script>";

        }
    }
    else{
        echo 'sql error4';
        exit();
    }
}

?>