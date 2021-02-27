<?php

if(isset($_POST['continue'])){
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
}

?>