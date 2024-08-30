<!-- Top Bar -->
<div class="side-menu-sec" id="header-scroll">
        
        <div class="side-menus">
            <nav>
                <ul class="parent-menu">
                    <li class="menu-item-has-children"> <a title=""><i class="ti-home"></i><span>Dashboard</span></a>
                        <ul class="" style="<?php if($page=="dashboard"){echo 'display:block';}?>">
                            <li><a href="dashboard.php" title="">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="patient"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>Patient </span></a>
                        <ul  style="<?php if($page=="patient"){echo 'display:block';}?>">
                            <li><a href="add_patient.php" class="<?php if($page=="patient"){echo 'active';}?>">Add Patient</a></li>
                            <li><a href="patient_list.php" class="">Patient List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="donation"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>Donation </span></a>
                        <ul  style="<?php if($page=="donation"){echo 'display:block';}?>">
                            <li><a href="add_donation.php" class="<?php if($page=="donation"){echo 'active';}?>">Add Donation</a></li>
                            <li><a href="donation_list.php" class="">Donation List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="recepient"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>Recipient </span></a>
                        <ul  style="<?php if($page=="recepient"){echo 'display:block';}?>">
                            <li><a href="add_recepient.php" class="<?php if($page=="recepient"){echo 'active';}?>">Add Recipient</a></li>
                            <li><a href="recepient_list.php" class="">Recipients List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="blood_type"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>Blood Type </span></a>
                        <ul  style="<?php if($page=="blood_type"){echo 'display:block';}?>">
                            <li><a href="add_blood_type.php" class="<?php if($page=="blood_type"){echo 'active';}?>">Add Blood Type</a></li>
                            <li><a href="blood_type_list.php" class="">Blood Type List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="user_type"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>User Type </span></a>
                        <ul  style="<?php if($page=="user_type"){echo 'display:block';}?>">
                            <li><a href="add_user_type.php" class="<?php if($page=="user_type"){echo 'active';}?>">Add User Type</a></li>
                            <li><a href="user_type_list.php" class="">User Type List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children <?php if($page=="user"){echo 'active';}?> "> <a title=""><i class="ti-user"></i><span>User </span></a>
                        <ul  style="<?php if($page=="user"){echo 'display:block';}?>">
                            <li><a href="add_user.php" class="<?php if($page=="user"){echo 'active';}?>">Add User </a></li>
                            <li><a href="user_list.php" class="">User List</a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <span class="footer-line">2024 &copy; BMS All Rights Reseved</span> </div>
    </div>
</header>