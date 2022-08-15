<?php
    // session_start();
    // if(!isset($_SESSION["admin"])){
    //     header("location:login.php");
    // }
    include "../include/db_config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://kit.fontawesome.com/12ac647ec1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dash.css">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <a href="../index.php"><h2>Crime Reporting</h2></a>
                
            </div>
            
            <!-- <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div> -->
            <?php
                $sql_get = mysqli_query($conn,"select * from complaint where status = 0");
                $count = mysqli_num_rows($sql_get);
            ?>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-regular fa-bell"></i> <span id="count" class="badge badge-danger"><?php echo"$count"; ?></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">   
                            <?php
                                $sql_get1 = mysqli_query($conn,"select * from complaint where status = 0");
                                if(mysqli_num_rows($sql_get)>0){
                                    while($result = mysqli_fetch_assoc($sql_get1)){
                                        echo '<a class="dropdown-item text-danger" href="#">'.$result['description'].'</a>';
                                        echo' <div class="dropdown-divider"></div>';
                                    }
                                }
                                else{
                                    echo '<a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-caret-down"></i> no messagess </a>';
                                }
                            ?>
                        </div>
                    </li>
                </ul>
                 
            </div> -->
            <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-regular fa-bell"></i> <span id="count" class="badge badge-danger">4</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        
                    </div>
                    </li>
                </ul>
            </div>
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
                    <a href="../login.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <div>Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                            <div class="number">15</div>
                            <div class="card-name">Users</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">2</div>
                        <div class="card-name">Admin</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">20</div>
                        <div class="card-name">Complaints</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
        <p>gggasda</p>
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
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>