<?php
$servername = "localhost";
$username = "justin";
$password = "12345";
$dbname = "C9";

//this uses an precreated table that was brought into the server, this table works for countries
//the code could be alted slighty to work with any input the user had ever entered
//running this file will print out ALL indexs in the table
   $connection = new mysqli($servername, $username, $password,$dbname);
    if($connection -> connect_error)
    {
        die("Connection failed: " . $connection -> connect_error);
    }
   
    $sql = "SELECT country FROM countries";
    $result = $connection->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            echo $row["country"];
        }
    }

	$connection->close();	
    


?>
