<?php
$username="chuzii";
$host="localhost";
$password="12345";
$con = mysqli_connect($host,$username,$password);
if($con){
    echo "connected ";
}else{
    echo "not connected";
}
$sql = "CREATE DATABASE DEMO7";
$t = mysqli_query($con,$sql);
if($t){
    echo " database created\n";
}
else{
    echo "database not created".mysqli_connect_error();
}
$tbl = "CREATE TABLE `DEMO7`.`STUDENT` (`NAME` TEXT NOT NULL , `ID` INT NOT NULL , `ROLLNO` INT NOT NULL , `DOB` INT NOT NULL ) ENGINE = InnoDB";

$CHK = mysqli_query($con,$tbl);
if($CHK){
    echo " table created";
}else
{
    echo "table not created".mysqli_connect_error();
}

$ist = "INSERT INTO `DEMO7`.`STUDENT`(`NAME`, `ID`, `ROLLNO`, `DOB`) VALUES ('Shubh','100','69','02-6-2003')";
$istchk = mysqli_query($con,$ist);
if ($istchk){
    echo " data inserted";
}
else{
    echo " data not inserted".mysqli_connect_error();
}
?>
