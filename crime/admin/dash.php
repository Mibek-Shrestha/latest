
<?php
 session_start();
 include "../include/db_config.php";
//  if(!isset($_SESSION["admin"])){
//      header("location:../login.php");
//  }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://kit.fontawesome.com/68d206eb63.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="dash.css">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
    <div class="topbar">
            <div class="logo">
                <a href=""><h2>Crime Reporting</h2></a>
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell"></i>
            <div class="user">
                <img src="../images/us.png" alt="">
            </div>
        </div> 
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="../userdetails.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>Users</div>
                    </a>
                </li>
                <li>
                    <a href="../complaintdetail.php">
                        <i class="fas fa-chart-bar"></i>
                        <div>Complaints</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div>Settings</div>
                    </a>
                </li>
                <li>
                    <a href="../logout.php">
                        <i class="fas fa-sign-in-alt"></i>
                        <div>Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container">
              <div class="main">
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                    
                            <div class="number">
                            <?php

                                                                        
                            $sql = "SELECT id FROM crime ORDER BY id";
                            $result=mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            echo $row;
                            ?>
                    </div>
                    
                            <div class="card-name"><a href="../crimedetail.php">Crime</a></div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                    <div class="number">
                    <?php

                                                                        
                            $sql = "SELECT id FROM crime ORDER BY id";
                            $result=mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            echo $row;
                            ?>
                    </div>
                        <div class="card-name"> <a href="../complaintdetail.php">Complaint</a> </div>
                    </div>
                    <div class="icon-box">
                    <i class="fas fa-users"></i>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">

                        <?php

                                                                        
                            $sql = "SELECT id FROM crime ORDER BY id";
                            $result=mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            echo $row;
                            ?>



                        </div>
                        <div class="card-name"> <a href="../information.php">Gather Info</a> </div>
                    </div>
                    <div class="icon-box">
                    <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <br>
                
                </div>
                
            </div>
            <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Complaints</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date Order</th>
                                    <th>Status</th>			
                                    </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
             </div> 

        </div>
    
    </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
</body>

</html>