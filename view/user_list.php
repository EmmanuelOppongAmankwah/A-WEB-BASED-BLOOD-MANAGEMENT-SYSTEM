<?php
include "fragment/head.php";
?>
<!-- Our Website Content Goes Here -->
<?php
include "fragment/header.php";
$page="user";
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
                        <table id="user_list" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $sql= "SELECT * FROM user inner join user_type on user_type.user_type_id=user.user_type_user_type_id where user_isdeleted=0";
                                    $result = $conn->query($sql);
                                   $i=1;
                                    while ($row=$result->fetch_assoc()){
                                        $id=$row['user_id'];
                                        $name=$row['user_firstname'].' '.$row['user_othername'].' '.$row['user_lastname'];
                                        $user_username=$row['user_username'];
                                        $user_email=$row['user_email'];
                                        $user_isdeleted=$row['user_isdeleted'];
                                      ?>
                                   


                                    <td><?=$i;?></td>
                                    <td><?=$name;?></td>
                                    <td><?=$user_username;?></td>
                                    <td><?=$user_email;?></td>
                                    <td><a href="../controller/user/delete.php?user_id=<?=$id;?>" onclick="return confirm('Are you sure to delete <?=$name;?> from the user list?')" style='margin:4px' title='delete'><i class="fa fa-trash" style='color:red'></i></a>
                                    <a href="edit_user.php?user_id=<?=$id;?>" title='edit' style='margin:4px'><i class="fa fa-pencil" style='color:green'></i></a></td>
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
