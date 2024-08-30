<?php
include "fragment/head.php";
?>
<!-- Our Website Content Goes Here -->
<?php
include "fragment/header.php";
$page="patient";
?>
<?php
include "fragment/sidebar.php";
?>
<!-- Slide Panel -->
<div class="main-content">
    <div class="panel-content">
        
        <div class="main-content-area">
            <div class="row">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
                <div class="col-md-12">
                        <span id="found" class="label label-info"></span>
                        <table id="patient_list" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Ghana Card No.</th>
                                    <th>Blood Type</th>
                                    <th>Actions</th>
                                    <th>Added By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql= "SELECT * FROM patient inner join user on user.user_id=patient.user_user_id inner join blood_type on 
                                    blood_type.blood_type_id=patient.blood_type_blood_type_id where patient_isdeleted=0";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $id=$row['patient_id'];
                                        $name=$row['patient_firstname'].' '.$row['patient_othername'];
                                        $number=$row['patient_phone_number'];
                                        $ghana_card=$row['patient_ghanacard'];
                                        $blood_type_name=$row['blood_type_name'];
                                        $username=$row['user_username'];
                                        $patient_isdeleted=$row['patient_isdeleted'];
                                      ?>
                                   

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$name;?></td>
                                    <td><?=$number;?></td>
                                    <td><?=$ghana_card;?></td>
                                    <td><?=$blood_type_name;?></td>
                                    <td><a href="../controller/patient/delete.php?patient_id=<?=$id;?>" onclick="return confirm('Are you sure to delete <?=$name;?> from the patient list?')" style='margin:4px' title='delete'><i class="fa fa-trash" style='color:red'></i></a>
                                    <a href="edit_patient.php?patient_id=<?=$id;?>" title='edit' style='margin:4px'><i class="fa fa-pencil" style='color:green'></i></a></td>
                                    <td><?=$username;?></td>
                                    </tr>
                                <?php $i++;} ?>
                               
                            </tbody>
                        </table>
                       
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
