<?php
include "fragment/head.php";
?>
<!-- Our Website Content Goes Here -->
<?php
include "fragment/header.php";
$page="blood_type";
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
                        <table id="blood_type_list" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name of Blood Type</th>
                                    <th>Date</th>
                                    <th>Instock</th>
                                    <th hidden>blood_type_status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql= "SELECT * FROM blood_type inner join user on user.user_id=blood_type.user_user_id where blood_type_isdeleted=0";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $id=$row['blood_type_id'];
                                        $name=$row['blood_type_name'];
                                        $blood_type_name=$row['blood_type_date_created'];
                                        $instock=$row['blood_type_instock'];
                                        $blood_type_iscreated=$row['blood_type_iscreated'];
                                      ?>
                                   

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$name;?></td>
                                    <td><?=$blood_type_name;?></td>
                                    <td><?=$instock;?></td>
                                    <td hidden><?php if($instock<=0){echo "<label class='bg-danger' style='padding:5px;border-radius: 10px;color:white;'>Out of stock</label>";}else{echo "<label class='bg-success' style='padding:5px;border-radius: 10px;color:white;'>Available</label>";} ?></td>
                                    <td><a href="../controller/blood_type/delete.php?blood_type_id=<?=$id;?>" style='margin:4px' title='delete'><i class="fa fa-trash" style='color:red'></i></a><a title='edit' style='margin:4px'><i class="fa fa-pencil" style='color:green'></i></a></td>
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