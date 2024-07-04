<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="clglogo.jpg"/>
    <title>GCWK</title>
</head>

<body>

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['forgotpassword'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password1'];

    if ($password1 != $password2) {
        echo "<script>alert('Password and Confirm Password Field do not match  !!');</script>";
    } else {
        $newpassword = md5($_POST['password']);
        $sql = "SELECT email FROM tblusers WHERE username=:username and email=:email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            $con = "UPDATE tblusers SET password=:newpassword WHERE email=:email AND username=:username";
            $chngpwd1 = $dbh->prepare($con);
            $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
            $chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();

            echo "<script>alert('Your Password successfully changed');</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Email id or username is invalid');</script>";
        }
    }
}
?>

<?php @include("includes/head.php"); ?>

<div class="wrapper">
    <div class="form-container sign-up">
        <form action="index.php" method="get">
            <h2>Don't worry, we've got you back</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" required>
                <input name="studentname" class="form-control" name="studentname" id="studentname" value="<?php  echo $row['studentName'];?>" required>
                <i class="fas fa-user"></i>
                <label for="">Username</label>
            </div>
            <div class="form-group">
                <input type="email"id="email"  name="email" required>
                <i class="fas fa-at"></i>
                <label for="">Email</label>
            </div>
            <div class="form-group">
                <input type="password"  id="password" name="password" required>
                <i class="fas fa-lock"></i>
                <label for="">New Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="newpassword" name="password1" required>
                <i class="fas fa-lock"></i>
                <label for="">Confirm Password</label>
            </div>
            <button type="submit" name="login" class="btn">Reset</button>
        </form>
    </div>
</div>

<script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<?php @include("includes/foot.php"); ?>

</body>

</html>
