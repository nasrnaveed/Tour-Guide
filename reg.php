<?php
    $serverName="localhost";
    $DBName="tourguide";
    $username="root";
    $password="";

    $conn=new mysqli($serverName,$username,$password,$DBName);
    
    if($conn->connect_error)
    {
        echo "Connection Failed. Try Again Later.";
    }
    else
    {
        $name=$_POST["name"];
        $contact=$_POST["cnum"];
        $email=$_POST["emailR"];
        $city = $_POST["City"];
        $sDate= $_POST["sdate"];
        $eDate=$_POST["edate"];
        $num=$_POST["people"];
        $type=$_POST["type"];
        $myQuery="insert into reservation values('$name','$contact','$email','$city','$sDate','$eDate',$num,'$type')";
        $conn->query($myQuery);
    }
?>
<script>
    alert("Thank You For Reservation. You will be contacted shortly");
    window.location.href='home.html';
  </script>

