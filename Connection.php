<?php
$host ="localhost";
$usr = "shubh";
$pswd ="12345";
$connection = mysqli_connect($host,$usr,$pswd,"BCA");
if ($connection){
    echo "Connection Successful\n";

}else{
    echo "Connection Failed \n";
}

$db= "CREATE DATABASE BCA";
$qry = mysqli_query($connection,$db);
if($qry){
   echo "database created\n";
}else{
    echo "database not created\n";
}
$tbl="CREATE TABLE `BCA`.`stdn` (`S No.` INT(10) NOT NULL , `CLASS` TEXT NOT NULL , `NAME` TEXT NOT NULL , `ADDRESS` TEXT NOT NULL ) ENGINE = InnoDB";
$qery = mysqli_query($connection,$tbl);

if($qery){
    echo "table created\n";
}else{
    echo "table not created\n";
}

$datainsert = "INSERT INTO stdn (`S No.`, `CLASS`, `NAME`, `ADDRESS`) VALUES (1,'bca','shubh','agra')";
$final= mysqli_query($connection,$datainsert);
if($final){
    echo "data inserted\n";
}
else{
    echo"data not inserted\n";
}

?>
