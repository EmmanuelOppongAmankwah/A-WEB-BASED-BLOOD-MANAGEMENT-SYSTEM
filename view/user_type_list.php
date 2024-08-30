<?php
include "fragment/head.php";
?>
<!-- Our Website Content Goes Here -->
<?php
include "fragment/header.php";
$page="user_type";
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
                        <table id="user_type_list" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type of User</th>
                                    <th>Date Added</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $sql= "SELECT * FROM user_type where user_type_isdeleted=0";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $id=$row['user_type_id'];
                                        $name=$row['user_type_name'];
                                        $user_type_date_created=$row['user_type_date_created'];
                                        $user_type_isdeleted=$row['user_type_isdeleted'];
                                      ?>
                                   


                                    <td><?=$i;?></td>
                                    <td><?=$name;?></td>
                                    <td><?=$user_type_date_created;?></td>
                                    <td><a href="../controller/user_type/delete.php?user_type_id=<?=$id;?>" onclick="return confirm('Are you sure to delete <?=$name;?> from the user_type list?')" style='margin:4px' title='delete'><i class="fa fa-trash" style='color:red'></i></a>
                                    <a href="edit_user_type.php?user_type_id=<?=$id;?>" title='edit' style='margin:4px'><i class="fa fa-pencil" style='color:green'></i></a></td>
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
