<?php
$dbservername="localhost";
$dbuser="u328820005_aqua18";
$dbpass="groupvdsm18";
$dbname="u328820005_Client_Data";


$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);


if($conn){
    if (isset($_POST['submit'])) 
    {
        $Name = $_POST['name'];
        $LastName = $_POST['lastname'];
        $mailFrom = $_POST['email'];
        $Phone = $_POST['phone'];
        $Service = $_POST['service'];
        $sql="INSERT INTO aqua18_contact(Name,LastName,mailFrom,Phone,Service) VALUES ('$Name','$LastName','$mailFrom','$Phone','$Service')";
$result=mysqli_query($conn,$sql);
if($result){
echo "sucessfully submitted the form";
}
else{
echo "something went wrong";
}
}
}


