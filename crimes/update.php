<?php
include 'include/db_config.php';

    include_once "include/head.php";
    session_start();
        if(!isset($_SESSION["username"])){
            header("location:login.php");
        }


// $id = $_GET['updateid'];

// $sql="Select * from `complaint` where cId=$id";
 $id = $_GET['updateid'];

$sql="Select * from `user` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$username = $row['username'];



if(isset($_POST['submit'])){
    $username = $_POST['username'];

    $sql="update `user` set id=$id,username='$username' where id=$id";
    // $sql="update `complaint` set id=$id,fullName='$username' where id=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
      
        header("location:details.php");
    } else{
        echo "error";
    }
}

?>

<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
    
    
    
    </head>
        <body>
            <form action="#" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

            <div class="login-box">
                    <h1>Update your Phone number</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>

                        <input type="text" maxlength="10" placeholder="Mobile Number" name="username" id="phone" value= <?php  echo  $username; ?>>
                    </div>

                  
                    
                    <input class="btn" type="submit" name="submit" value="Submit">
                      </div>
            </form>
        </body>
</html>