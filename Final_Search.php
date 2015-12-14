<?php
$servername = "localhost";
$username = "justin";
$password = "12345";
$dbname = "C9";


   $connection = new mysqli($servername, $username, $password,$dbname);
    if($connection -> connect_error)
    {
        die("Connection failed: " . $connection -> connect_error);
    }
   
    $sql = "SELECT id, country FROM countries";
    $result = $connection->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            echo "id: " . $row["id"]. " - Name: " . $row["country"]. " <br>";
        }
    }
    else
    {
        echo "0 results";
    }
	$connection->close();	
    

      

?>
