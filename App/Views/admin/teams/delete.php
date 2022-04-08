<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70"> Delete
                Team</h2>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]); ?>
            <hr>

            <?php if ($row):?>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-6">
                    <div class="card shadow-sm mb-5">
                        <div class="card-body">
                            <form id="BTSFORM" method="POST">

                                <h3 class="card-title text-center mb-4">Are you sure you want to delete?</h3>

                                <input disabled autofocus class="form-control"
                                    value="<?=get_var('name', $row[0]->name)?>" type="text" name="name" id="name"
                                    placeholder="Team Name"><br><br>
                                <input type="hidden" name="id">

                                <div class="d-grid gap-2">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    <a href="<?=ROOT?>teams" class="btn btn-success">Back</a>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <?php else: ?>

            <div class="card shadow fat bg-warning text-dark">
                <div class="card-body">
                    <div class="alert" role="alert">
                        <h4 class="alert-heading">Could not find team</h4>
                        <hr>
                        <p>Please check is you have selected the correct team</p>
                    </div>
                    <a class="btn btn-success btn-md px-5" href="<?=ROOT?>teams">Back</a>


                </div>
            </div>






            <?php endif; ?>



        </div>

        <?php
$this->view("includes/admin/footer", $data);



?>