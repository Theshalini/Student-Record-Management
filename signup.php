<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="clglogo.jpg"/>
    <title>GCWK  </title>
    
</head>
<body>
    <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['signup'])) {
    $username = $_POST['signup_username'];
    $email = $_POST['signup_email'];
    $password = md5($_POST['signup_password']);
    $confirmPassword = md5($_POST['confirm_password']);

    // Validate input here (e.g., check if passwords match, username doesn't already exist, etc.)

    if ($password == $confirmPassword) {
        $sql = "INSERT INTO tblusers (username, email, Password) VALUES (:username, :email, :password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);

        if ($query->execute()) {
            echo "<script>alert('Signup successful!'); document.location ='index.php';</script>";
        } else {
            echo "<script>alert('Error during signup. Please try again.'); document.location ='index.php';</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match. Please check and try again.'); document.location ='index.php';</script>";
    }
}
?>

</body>
</html>