<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OCRS</title>
        <link rel="stylesheet" href="./style/footer.css">
        <script src="js/index.js"></script>
        <link rel="stylesheet" href="style/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php
            include "include/header.php";
        ?>
        
      
        <form action="" method="post" name="complaint" enctype="multipart/form-data">
            <div class="login-box">
                <h1>Complaint</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Fullname" name="userName" id="uname">
                </div>
                <!-- <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" placeholder="Mobile Number" name="phone" id="phone">
                </div> -->
                <div class="textbox">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" placeholder="Crime Address" name="address" id="address">
                </div>
                <div class="textbox">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" placeholder="Description" name="desc" id="desc">
                </div>
                <div class="textbox">
                <input type="file" name="file" id="file" accept="image/png, image/jpeg">
                </div>
                <div class="textbox">
                <input type="text" maxlength="10" placeholder="Mobile Number" name="phone" id="phone">
                </div>
                <button  name="Submit" id="click" onclick="formValidate()">Submit</button>
        </form>

        <br>
            <footer> 
                <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li> 
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p>&copy; <script> document.write(new Date().getFullYear());</script>
                -OnlineCrimeSystem.All rights reserved
                <br>
                <i class="fas fa-phone">+977-1-4411210</i>
                <br>
                <a href="#"><i class="fas fa-envelope-square"> info@crimereport.com</i></a>
                </p>
            </footer> 
        
    </body>
</html>