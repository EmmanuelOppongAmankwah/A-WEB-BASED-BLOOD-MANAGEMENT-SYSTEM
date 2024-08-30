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
        <h2 style="text-align:center">NEW MEMBERSHIP REGISTRATION FORM</h2>
</div>
            <div class="card-body">
                

        <form method="post" action="../controller/patient/insert.php">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="patient_othername">First Name</label>
                <input required type="text" class="form-control" id="patient_firstname" name="patient_firstname">
            </div>
            <div class="form-group col-md-3">
                <label for="patient_othername">Other Name</label>
                <input type="text" class="form-control" id="patient_othername" name="patient_othername">
            </div>
            <div class="form-group col-md-3">
                <label for="patient_email">Email</label>
                <input type="email" class="form-control" id="patient_email" name="patient_email">
            </div>
            <div class="form-group col-md-3">
                <label for="blood_type_blood_type_id">Blood Type ID</label>
                <select class="form-control" name="blood_type_blood_type_id" required>
                    <option></option>
                    <?php 
                    $sql= "SELECT * FROM blood_type where blood_type_iscreated=0";
                    $result = $conn->query($sql);
                   $i=1;
                    while ($row=$result->fetch_assoc()){
                        $blood_type_id =$row['blood_type_id'];
                        $blood_type_name=$row['blood_type_name'];
                    
                    ?>
                    <option value="<?=$blood_type_id;?>">
                    <?=$blood_type_name;?>
                    </option>
                    <?php } ?>
                </select>
            </div>
</div>
<div class="row">
            <div class="form-group col-md-4">
                <label for="patient_phone_number">Phone Number</label>
                <input type="text" class="form-control" id="patient_phone_number" name="patient_phone_number">
            </div>
            <div class="form-group col-md-4">
                <label for="patient_ghanacard">Ghana Card</label>
                <input type="text" class="form-control" id="patient_ghanacard" name="patient_ghanacard">
            </div>
            <div class="form-group col-md-4">
                <label for="patient_address">Address</label>
                <input type="text" class="form-control" id="patient_address" name="patient_address">
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
