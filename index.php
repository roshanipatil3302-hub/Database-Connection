<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "SLMT";

    $conn = mysqli_connect( $servername,$username, $password, $database);

    if (!$conn) {

        die("Sorry failed connect " . mysqli_connect_error());
    }

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mob_no = $_POST['mob_no'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $msg = $_POST['msg'] ?? '';

    if ($name === "" || $email === "" || $mob_no === "" ||$subject === "" || $msg === "") {
    exit("Please fill in all required fields.");
    }

    $sql = "INSERT INTO Form (name, email, mob_no, subject, msg) VALUES ('$name', '$email', '$mob_no', '$subject', '$msg')";

    if($conn->query($sql)==true){
        echo "Suceessfully Inserted";
    }
    else {

        echo "Not inserted " . mysqli_error($conn);
    }
}

?>
