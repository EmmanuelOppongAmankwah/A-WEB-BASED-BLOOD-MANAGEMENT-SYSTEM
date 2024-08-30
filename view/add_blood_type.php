<?php
include "fragment/head.php";
$page="blood_type";
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
        <h2 style="text-align:center">ADD BLOOD TYPE </h2>
</div>
            <div class="card-body">
                

        <form method="post" action="../controller/blood_type/insert.php">
            <div><span style="color:red;font-size:18px;"><?php if(!empty($_GET['message'])){echo $_GET['message'];}?></span></div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="blood_type_name">Blood Type Name</label>
                <input required type="text" class="form-control" id="blood_type_name" name="blood_type_name">
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
