<?php
include "fragment/head.php";
$page="user";
?>
<!-- Our Website Content Goes Here -->
<?php
include "fragment/header.php";
?>
<?php
include "fragment/sidebar.php";
?>
<!-- Slide Panel -->
<div class="main-content">
    <div class="panel-content">
        
        <div class="main-content-area">
        
        <div class="card">
        <div class="card-header">
        <h2 style="text-align:center">CHANGE PASSWORD</h2>
</div>
            <div class="card-body">
                

            <form method="post" action="../controller/change_password/update.php" onsubmit="return confirm('Are you sure you want to update this record?');">
    <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="user_password">Old Password</label>
            <input required type="password" class="form-control" id="user_password" name="old_password">
        </div>
        <div class="form-group col-md-4">
            <label for="user_new_password">New Password</label>
            <input required type="password" class="form-control" id="user_new_password" name="new_password">
        </div>
        <div class="form-group col-md-4">
            <label for="user_confirm_password">Confirm Password</label>
            <input required type="password" class="form-control" id="user_confirm_password" name="confirm_password">
        </div>
    </div>

    <div class="row">
        <div class="form-group" hidden>
            <label for="user_user_id">User ID</label>
            <input type="text" class="form-control" id="user_user_id" name="user_id" value="<?=$_SESSION['id'];?>">
        </div>
        <div class="col-md-4"><button type="submit" class="btn btn-primary">Submit</button></div>
    </div>
</form>

                   </div>
                   </div> 
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
