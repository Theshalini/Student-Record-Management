<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="clglogo.jpg"/>
    <title>GCWK | Login </title>
    
</head>

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT * FROM tblusers WHERE username=:username and Password=:password ";
  $query=$dbh->prepare($sql);
  $query-> bindParam(':username', $username, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    foreach ($results as $result) {
      $_SESSION['sid']=$result->id;
      $_SESSION['name']=$result->name;
      $_SESSION['lastname']=$result->lastname;
      $_SESSION['permission']=$result->permission;
      $_SESSION['email']=$result->email;

    }

    if(!empty($_POST["remember"])) {
      //COOKIES for username
      setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
      //COOKIES for password
      setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
    } else {
      if(isset($_COOKIE["user_login"])) {
        setcookie ("user_login","");
        if(isset($_COOKIE["userpassword"])) {
          setcookie ("userpassword","");
        }
      }
    }
    $aa= $_SESSION['sid'];
    $sql="SELECT * from tblusers  where id=:aa";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':aa',$aa,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    $cnt=1;
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      {               

        if($row->status=="1"){ 
          $extra="dashboard.php";
          $username=$_POST['username'];
          $email=$_SESSION['email'];
          $name=$_SESSION['name'];
          $lastname=$_SESSION['lastname'];
          $_SESSION['login']=$_POST['username'];
          $_SESSION['id']=$num['id'];
          $_SESSION['username']=$num['name'];
          $uip=$_SERVER['REMOTE_ADDR'];
          $status=1;
          $sql="insert into userlog(userEmail,userip,status,username,name,lastname)values(:email,:uip,:status,:username,:name,:lastname)";
          $query=$dbh->prepare($sql);
          $query->bindParam(':username',$username,PDO::PARAM_STR);
          $query->bindParam(':name',$name,PDO::PARAM_STR);
          $query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
          $query->bindParam(':email',$email,PDO::PARAM_STR);
          $query->bindParam(':uip',$uip,PDO::PARAM_STR);
          $query->bindParam(':status',$status,PDO::PARAM_STR);
          $query->execute();
          $host=$_SERVER['HTTP_HOST'];
          $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
          header("location:http://$host$uri/$extra");
          exit();                 
        } else { 
          echo "<script>alert('Your account was blocked please approach Admin');document.location ='index.php';</script>";                                        
        }  

      } } 
    } else{ 
      $extra="index.php";
      $username=$_POST['username'];
      $uip=$_SERVER['REMOTE_ADDR'];
      $status=0;
      $email='Not registered in system';
      $name='Potential Hacker';
      $sql="insert into userlog(userEmail,userip,status,username,name)values(:email,:uip,:status,:username,:name)";
      $query=$dbh->prepare($sql);
      $query->bindParam(':username',$username,PDO::PARAM_STR);
      $query->bindParam(':name',$name,PDO::PARAM_STR);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->bindParam(':uip',$uip,PDO::PARAM_STR);
      $query->bindParam(':status',$status,PDO::PARAM_STR);
      $query->execute();
      $host  = $_SERVER['HTTP_HOST'];
      $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
      echo "<script>alert('Username or Password is incorrect');document.location ='http://$host$uri/$extra';</script>";
    }
  }
  ?>


  <?php @include("includes/head.php"); ?>

  <nav class="banner">
       <img class="background" alt="User Image" src="60th logo.png"/>
    <nav>

    <div class="wrapper">
        <div class="form-container sign-up">
           
<!--<form action="signup.php" method="post">
                <h2>sign up</h2>
                <div class="form-group">
    <input type="text" name="signup_username" required>
    <i class="fas fa-user"></i>
    <label for="">username</label>
</div>
<div class="form-group">
    <input type="email" name="signup_email" required>
    <i class="fas fa-at"></i>
    <label for="">email</label>
</div>
<div class="form-group">
    <input type="password" name="signup_password" required>
    <i class="fas fa-lock"></i>
    <label for="">password</label>
</div>
<div class="form-group">
    <input type="password" name="confirm_password" required>
    <i class="fas fa-lock"></i>
    <label for="">confirm password</label>
</div>

                <button type="submit" class="btn">sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="#" class="signin-link"> sign in</a></p>
                </div>
            </form> -->
        </div>
        <div class="form-container sign-in">
            <form action="" method="post">
                <h2>login</h2>
                <div class="form-group">
                <input type="text" name="username" class="form-control"  required value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                <input type="password" name="password" class="form-control"  required value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
              <!--  <div class="forgot-pass">
                    <a href="forgotpassword.php">forgot password?</a>
    </div>
                
                <div class="link">
                    <p>Don't have an account?<a href="#" class="signup-link"> sign up</a></p>
                </div>--> 
                <button type="submit" name="login" class="btn">login</button>
           </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="assets/js/core/js.cookie.min.js"></script>
</body>

</html>