<?php
include('../resources/conn.php'); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $tenth_score = mysqli_real_escape_string($conn, $_POST['tenthScore']);
    $twelth_score = mysqli_real_escape_string($conn, $_POST['twelthScore']);
    $hear_about = mysqli_real_escape_string($conn, $_POST['hearAbout']);

    $query = "INSERT INTO enquiry (name, email, mobile, city, school, major, tenth_score, twelth_score, hear_about) 
              VALUES ('$name', '$email', '$mobile', '$city', '$school', '$major', '$tenth_score', '$twelth_score', '$hear_about')";

    if (mysqli_query($conn, $query)) {
        header("Location: ./index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
