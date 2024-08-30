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
        <h2 style="text-align:center">ADD USER</h2>
</div>
            <div class="card-body">
                

        <form method="post" action="../controller/user/insert.php">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-4">
                <label for="user_othername">First Name</label>
                <input required type="text" class="form-control" id="user_firstname" name="user_firstname">
            </div>
            <div class="form-group col-md-4">
                <label for="user_othername">Other Name</label>
                <input type="text" class="form-control" id="user_othername" name="user_othername">
            </div>
            <div class="form-group col-md-4">
                <label for="user_othername">Last Name</label>
                <input type="text" class="form-control" id="user_lastname" name="user_lastname">
            </div>
            <div class="form-group col-md-3">
                <label for="user_username">Username</label>
                <input type="text" class="form-control" id="user_username" name="user_username">
            </div>
            <div class="form-group col-md-3">
                <label for="user_email">Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email">
            </div>
            <div class="form-group col-md-3">
                <label for="user_password">Password</label>
                <input type="text" class="form-control" id="user_password" name="user_password">
            </div>
            <div class="form-group col-md-3">
                <label for="user_type_user_type_id">Select User Type</label>
                <select class="form-control" name="user_type_user_type_id" required>
                    <option></option>
                    <?php 
                    $sql= "SELECT * FROM user_type where user_type_isdeleted=0";
                    $result = $conn->query($sql);
                   $i=1;
                    while ($row=$result->fetch_assoc()){
                        $user_type_id =$row['user_type_id'];
                        $user_type_name=$row['user_type_name'];
                    
                    ?>
                    <option value="<?=$user_type_id;?>">
                    <?=$user_type_name;?>
                    </option>
                    <?php } ?>
                </select>
            </div>
</div>

<div class="row">
            <div class="form-group" hidden>
                <label for="user_user_id">User ID</label>
                <input type="text" class="form-control" id="user_user_id" name="user_user_id" value="<?=$_SESSION['id'];?>">
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
