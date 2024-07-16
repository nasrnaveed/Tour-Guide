
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
        $email=$_POST["email"];
        $myQuery="insert into newsletters values('".$email."')";
        $conn->query($myQuery);
    }
?>

  <script>
    alert("Thank You For Subscription.");
    window.location.href='home.html';
  </script>
