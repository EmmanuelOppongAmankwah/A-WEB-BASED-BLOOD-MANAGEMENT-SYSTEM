<?php
include "fragment/head.php";
$page="patient";
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
        <h2 style="text-align:center">EDIT PATIENT RECORDS</h2>
</div>
            <div class="card-body">
            <?php 
                $patient_id=$_GET['patient_id'];
                $sql= "SELECT * FROM patient where patient_isdeleted=0 AND patient_id=$patient_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                    $row=mysqli_fetch_assoc($result);
                    $patient_id=$row['patient_id'];
                    $patient_firstname=$row['patient_firstname'];
                    $patient_othername=$row['patient_othername'];
                    $patient_phone_number=$row['patient_phone_number'];
                    $patient_ghanacard=$row['patient_ghanacard'];
                    $patient_address=$row['patient_address'];
                    $patient_email =$row['patient_email'];
                    $blood_type_blood_type_id  =$row['blood_type_blood_type_id'];
                
                ?>

        <form method="post" action="../controller/patient/update.php" onsubmit="return confirm('Are you sure to update this record?');">
            <input type="hidden" value="<?=$patient_id;?>" name="patient_id">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="patient_firstname">First Name</label>
                <input required type="text" class="form-control" id="patient_firstname" name="patient_firstname" value="<?=$patient_firstname?>">
            </div>
            <div class="form-group col-md-3">
                <label for="patient_othername">Other Name</label>
                <input type="text" class="form-control" id="patient_othername" name="patient_othername" value="<?=$patient_othername?>">
            </div>
            <div class="form-group col-md-3">
                <label for="patient_email">Email</label>
                <input type="email" class="form-control" id="patient_email" name="patient_email" value="<?=$patient_email?>">
            </div>
            <div class="form-group col-md-3">
                <label for="blood_type_blood_type_id">Blood Type ID</label>
                <select class="form-control" name="blood_type_blood_type_id" required>
                    <?php 
                    $sql= "SELECT * FROM blood_type where blood_type_iscreated=0";
                    $result = $conn->query($sql);
                   $i=1;
                    while ($row=$result->fetch_assoc()){
                        $blood_type_id =$row['blood_type_id'];
                        $blood_type_name=$row['blood_type_name'];
                    
                    ?>
                    <option value="<?=$blood_type_id;?>" <?php if($blood_type_blood_type_id == $blood_type_id){echo "selected";};?>>
                    <?=$blood_type_name;?>
                    </option>
                    <?php } ?>
                </select>
            </div>
</div>
<div class="row">
            <div class="form-group col-md-4">
                <label for="patient_phone_number">Phone Number</label>
                <input type="text" class="form-control" id="patient_phone_number" name="patient_phone_number" value="<?=$patient_phone_number?>">
            </div>
            <div class="form-group col-md-4">
                <label for="patient_ghanacard">Ghana Card</label>
                <input type="text" class="form-control" id="patient_ghanacard" name="patient_ghanacard" value="<?=$patient_ghanacard?>">
            </div>
            <div class="form-group col-md-4">
                <label for="patient_address">Address</label>
                <input type="text" class="form-control" id="patient_address" name="patient_address" value="<?=$patient_address?>">
            </div>
</div>
<div class="row">
            <div class="form-group" hidden>
                <label for="user_user_id">User ID</label>
                <input type="text" class="form-control" id="user_user_id" name="user_user_id" value="<?=$_SESSION['id'];?>">
            </div>
            
            <div class="col-md-4"><button type="submit" class="btn btn-primary">Update</button></div>
</div>
        </form>
        <?php }else{echo "No patient was found!";} ?>
                   </div>
                   </div> 
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
