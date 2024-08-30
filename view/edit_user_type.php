<?php
include "fragment/head.php";
$page="user_type";
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
        <h2 style="text-align:center">EDIT USER_TYPE RECORDS</h2>
</div>
            <div class="card-body">
            <?php 
                $user_type_id=$_GET['user_type_id'];
                $sql= "SELECT * FROM user_type where user_type_isdeleted=0 AND user_type_id=$user_type_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                    $row=mysqli_fetch_assoc($result);
                    $id=$row['user_type_id'];
                    $name=$row['user_type_name'];
                    $user_type_date_created=$row['user_type_date_created'];
                    $user_type_isdeleted=$row['user_type_isdeleted'];
                
                ?>

        <form method="post" action="../controller/user_type/update.php" onsubmit="return confirm('Are you sure to update this record?');">
            <input type="hidden" value="<?=$user_type_id;?>" name="user_type_id">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="user_type_name">Type of User</label>
                <input required type="text" class="form-control" id="user_type_name" name="user_type_name" >
            </div>
            
</div>
<div class="row">
            
            <div class="col-md-4"><button type="submit" class="btn btn-primary">Update</button></div>
</div>
        </form>
        <?php }else{echo "No user_type was found!";} ?>
                   </div>
                   </div> 
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
