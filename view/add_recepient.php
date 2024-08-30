<?php
include "fragment/head.php";
$page="donation";
?>

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
        <h2 style="text-align:center">ADD NEW RECIPIENT </h2>
</div>
            <div class="card-body">
                

        <form method="post" action="../controller/recepient/insert.php">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-4">
                <label for="patient_patient_id">Select Patient </label>
                <select class="form-control" name="patient_patient_id" class="select2" id="select-field" required>
                    <option value="" disabled selected>Select a patient</option>
                    <?php 
                    $sql= "SELECT * FROM patient where patient_isdeleted=0";
                    $result = $conn->query($sql);
                   $i=1;
                    while ($row=$result->fetch_assoc()){
                        $patient_id =$row['patient_id'];
                        $patient_name=$row['patient_firstname'].' '.$row['patient_othername'];
                        $blood_type_blood_type_id=$row['blood_type_blood_type_id'];
                    
                    ?>
                    <option value="<?=$patient_id;?>">
                    <?=$patient_name;?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="no_of_bottles">No of Bottles</label>
                <input required type="text" class="form-control" id="no_of_bottles" name="no_of_bottles">
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
