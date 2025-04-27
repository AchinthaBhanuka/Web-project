<?php
 require 'config.php';

    $name = $_POST['name'];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $sql2 = "INSERT INTO contact (Name, Email, Message) 
    VALUES ('$name', '$email', '$message')";

if ($conn->query($sql2)) {
echo "Insert Successfully";
} else {
echo "Error: " . $conn->error;
}

$conn->close();


?>