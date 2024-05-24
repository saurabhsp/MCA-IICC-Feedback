<?php
$servername="localhost";
$username="root";
$password="";
$dbname="adityaportfolio";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die ("Not Connected".mysqli_connect_error());
}
else{
    echo "<div class='text-center'><div class='alert alert-success' role='alert'>
    You're Connected & Working With Database 
  </div> </div><br>";
}


?>
