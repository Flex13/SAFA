<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70"> Teams
            </h2>
            <hr>


            <div class="card shadow fat bg-success text-light">
                <div class="card-body">



                    <div class="alert" role="alert">
                        <h4 class="alert-heading">Team Successfully Created</h4>
                        <hr>
                        <p>Team has now been created. You can now update the Team Management and Team Players</p>

                    </div>


                    <a class="btn btn-light btn-md px-5 " href="<?=ROOT?>teams">View Teams</a>


                </div>
            </div>



        </div>

        <?php
$this->view("includes/admin/footer", $data);



?>