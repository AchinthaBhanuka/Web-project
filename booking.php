<?php
require 'config.php';

    $name = $_POST['name'];
    $email = $_POST["email"];
    $datetime = $_POST["datetime"];
    $people = $_POST["people"];
    $request = $_POST["request"];

    $sql = "INSERT INTO booking (Name, Email, People, Date_Time, Special_Request) 
            VALUES ('$name', '$email', '$people', '$datetime', '$request')";

    if ($conn->query($sql)) {
        echo "Insert Successfully";
    } else {
        echo "Error: " . $conn->error;
    }-

    $conn->close();

?>