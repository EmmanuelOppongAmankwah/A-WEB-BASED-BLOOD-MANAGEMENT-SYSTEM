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
        <h2 style="text-align:center">EDIT USER RECORDS</h2>
</div>
            <div class="card-body">
            <?php 
                $user_id=$_GET['user_id'];
                $sql= "SELECT * FROM user where user_isdeleted=0 AND user_id=$user_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                    $row=mysqli_fetch_assoc($result);
                    $user_id=$row['user_id'];
                    $user_firstname=$row['user_firstname'];
                    $user_othername=$row['user_othername'];
                    $user_lastname=$row['user_lastname'];
                    $user_username=$row['user_username'];
                    $user_password=$row['user_password'];
                    $user_email=$row['user_email'];
                
                ?>

        <form method="post" action="../controller/user/update.php" onsubmit="return confirm('Are you sure to update this record?');">
            <input type="hidden" value="<?=$user_id;?>" name="user_id">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="user_firstname">First Name</label>
                <input required type="text" class="form-control" id="user_firstname" name="user_firstname" value="<?=$user_firstname?>">
            </div>
            <div class="form-group col-md-3">
                <label for="user_othername">Other Name</label>
                <input type="text" class="form-control" id="user_othername" name="user_othername" value="<?=$user_othername?>">
            </div>
            <div class="form-group col-md-3">
                <label for="user_lastname">Last Name</label>
                <input type="text" class="form-control" id="user_lastname" name="user_lastname" value="<?=$user_lastname?>">
            </div>
            <div class="form-group col-md-3">
                <label for="user_username">Username</label>
                <input type="text" class="form-control" id="user_username" name="user_username" value="<?=$user_username?>">
            </div>
            <div class="form-group col-md-3">
                <label for="user_password">Username</label>
                <input type="text" class="form-control" id="user_username" name="user_username" value="<?=$user_username?>">
            </div>
            <div class="form-group col-md-3">
                <label for="user_email">Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="<?=$user_email?>">
            </div>
</div>
<div class="row">
            <div class="form-group" hidden>
                <label for="user_type_user_type_id">User ID</label>
                <input type="text" class="form-control" id="user_type_user_type_id" name="user_type_user_type_id" value="<?=$_SESSION['id'];?>">
            </div>
            
            <div class="col-md-4"><button type="submit" class="btn btn-primary">Update</button></div>
</div>
        </form>
        <?php }else{echo "No user was found!";} ?>
                   </div>
                   </div> 
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
