<?php
include "fragment/head.php";
$page="dashboard";
require "../database/database.php";
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
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-box red-bg"> <span>Total Stock</span> <em>
                            <?php 
                            $sql= "SELECT sum(blood_type_instock) as total_instock FROM blood_type";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {$row=mysqli_fetch_assoc($result);echo $row['total_instock'];
                            }else{echo "0";}
                            ?>
                        </em> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-box skyblue-bg -bg"> <span>Total Patient</span> <em><?php 
                            $sql= "SELECT count(*) as total_patient FROM patient where patient_isdeleted=0";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {$row=mysqli_fetch_assoc($result);echo $row['total_patient'];
                            }else{echo "0";}
                            ?></em> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-box blue-bg"> <span>Total Donations</span> <em>
                        <?php 
                            $sql= "SELECT count(*) as total_blood_donation FROM blood_donation";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {$row=mysqli_fetch_assoc($result);echo $row['total_blood_donation'];
                            }else{echo "0";}
                            ?>
                        </em> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-box green-bg"> <span>Total Receipients</span> <em>
                        <?php 
                            $sql= "SELECT count(*) as total_blood_recepient FROM blood_recepient";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {$row=mysqli_fetch_assoc($result);echo $row['total_blood_recepient'];
                            }else{echo "0";}
                            ?>
                        </em> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="widget">
                        <div class="widget-title">
                            <h3>Recent Donors</h3>
                        </div>
                        <ul class="activite">
                        <?php
                                    $sql= "SELECT * FROM blood_donation inner join patient on
                                     patient.patient_id=blood_donation.patient_patient_id inner join 
                                     blood_type on blood_type.blood_type_id=patient.blood_type_blood_type_id order by blood_donation_id desc limit 6";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $name=$row['patient_firstname'].' '.$row['patient_othername'];
                                        $blood_type_name=$row['blood_type_name'];
                                        $no_of_bottles=$row['no_of_bottles'];
                                        $date_created=$row['blood_donation_date_created'];
                                      ?>
                            
                            <li>
                                <figure><img src="images/resource/chat1.jpg" alt=""></figure>
                                <div class="recent-meta">
                                    <p><b><?=$name; ?></b> donated <b style="color:red;">
                                        <?=$no_of_bottles?> bottle(s) </b>of <b style="color:red;"><?=$blood_type_name;?> blood</b>.</p>
                                    <small class="text-muted"><?=$date_created;?></small> </div>
                            </li>
                                    
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="widget">
                        
                        <div class="full-report">
                            <div class="user"><span><img alt="" src="images/resource/admin.jpg"></span>
                                <h3>Blood Inventory</h3>
                                <i></i> </div>
                            <ul>
                            <?php
                                    $sql= "SELECT * FROM blood_type";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $blood_type_name=$row['blood_type_name'];
                                        $blood_type_instock=$row['blood_type_instock'];
                                        $date_created=$row['blood_type_date_created'];
                                      ?>
                                <li><span class="fa fa-bolt bg-primary"></span><?=$blood_type_name;?><i><?=$blood_type_instock;?></i><hr></li>
                                
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Widget Area --> 
                </div>
            </div>
          
         </div>
    </div>
    <!-- Panel Content -->
</div>
<?php
include "fragment/footer.php";
?>
