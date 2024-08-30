<?php
$page="donation";
include "fragment/head.php";
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
            <div class="row">
            
                <div class="col-md-12">
                    <div class="streaming-table">
                        <span id="found" class="label label-info"></span>
                        <table id="donation_list" class="table table-responsive table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name of donor</th>
                                    <th>Blood Type</th>
                                    <th>No of bottles</th>
                                    <th>Date of donation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql= "SELECT * FROM blood_donation inner join patient on
                                    patient.patient_id=blood_donation.patient_patient_id inner join blood_type on blood_type.blood_type_id=patient.blood_type_blood_type_id";
                                   $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $name=$row['patient_firstname'].' '.$row['patient_othername'];
                                        $blood_type_name=$row['blood_type_name'];
                                        $no_of_bottles=$row['no_of_bottles'];
                                        $date_created=$row['blood_donation_date_created'];
                                      ?>
                                   

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$name?></td>
                                    <td><?=$blood_type_name?></td>
                                    <td><?=$no_of_bottles?></td>
                                    <td><?=$date_created?></td>
                                </tr>
                                <?php $i++;} ?>
                               
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Content --> 
</div>
<?php
include "fragment/footer.php";
?>
