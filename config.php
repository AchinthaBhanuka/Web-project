<?php
$servername = "localhost"; 
$username = "root";   
$password = ""; 
$dbname = "pkjresto"; 

$conn = mysqli_connect($servername, $username, $password, $dbname,3308); 


if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 
/*else { 
echo "Connected successfully <br>" ; 
} */


$booking = "CREATE TABLE IF NOT EXISTS booking (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(50) NOT NULL, 
Email VARCHAR(50) NOT NULL ,
People VARCHAR(5) NOT NULL,
Date_Time VARCHAR(20) NOT NULL ,
Special_Request VARCHAR(100) 

)";


/*if (mysqli_query($conn, $booking)) { 
    echo "Table created successfully <br>"; 
    } else { 
    echo "Error creating table: " .mysqli_error($conn); 
    } */

$contact = "CREATE TABLE IF NOT EXISTS contact (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Name VARCHAR(50) NOT NULL, 
    Email VARCHAR(50) NOT NULL ,
    Message VARCHAR(100) 
    
    )";

/*if (mysqli_query($conn, $contact)) { 
    echo "Table created successfully"; 
    } else { 
    echo "Error creating table: " .mysqli_error($conn); 
    } 

*/
?>