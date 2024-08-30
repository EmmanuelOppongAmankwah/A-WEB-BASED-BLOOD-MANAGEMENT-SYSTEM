<?php 
session_start();
if(isset($_SESSION['username'])){
    header("Location: view/dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<title>Blood Management Application</title>
<meta charset="utf-8">
<meta name="description" content="Stay on top of your bloodwork. Easily track results, manage medications & improve your health.">
<meta name="keywords" content="Blood Management System, BMS">
<meta name="Emmanuel Oppong" content="BMS">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Our Website CSS Styles -->
<link rel="stylesheet" href="assets/css/icons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<div class="se-pre-con"></div>
<div class="account-user-sec">
    <div class="account-sec">
        
        <div class="acount-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="contact-sec">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-title">
                                        <h3>Blood Management System Admin Login</h3>
                                        <span>Fill your detail to get in</span> </div>
                                    <!-- Widget title -->
                                    <div class="account-form">
                                        <form action="controller/authentication.php" method="POST">
                                            <div class="row">
                                            <div class="feild col-md-12">
                                                    <p style="color:red;"><?php if(isset($_GET['error_message'])){echo $_GET['error_message'];} ?></p>
                                                    <input type="text" placeholder="Username"  name="username" required/>
                                                </div>
                                                <div class="feild col-md-12">
                                                    <input type="password" placeholder="Password" name="password" required/>
                                                </div>
                                                <div class="feild col-md-12">
                                                    <input type="submit" value="Login Now" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="more-option"> <span>OR</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="creat-an-account"> <span>Forgot your password?</span> <a href="forgotten_password.php" title="">Reset Password</a>
                                       
                                    </div>
                                    <!-- Create an account --> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container"> <span class="footer-line"><?=date("Y");?> &copy; BMS All Rights Reseved</span> </div>
        </footer>
    </div>
</div>
</body>

</html>