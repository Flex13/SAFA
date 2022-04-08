<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70">News
            </h2>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]);?>
            <hr>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img style="height: 250px;" src="<?=BACK_ASSETS?>images/blog/img1.jpg"
                                class="card-img-top img-fluid" alt=" Image">
                            <div class="card-body">
                                <h5 class="card-title">News 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">About News</h6>
                                <a href="#" class="btn btn-success mt-3">View Details</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img style="height: 250px;" src="<?=BACK_ASSETS?>images/blog/img1.jpg"
                                class="card-img-top img-fluid" alt=" Image">
                            <div class="card-body">
                                <h5 class="card-title">News 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">About News</h6>
                                <a href="#" class="btn btn-success mt-3">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img style="height: 250px;" src="<?=BACK_ASSETS?>images/blog/img1.jpg"
                                class="card-img-top img-fluid" alt=" Image">
                            <div class="card-body">
                                <h5 class="card-title">News 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">About News</h6>
                                <a href="#" class="btn btn-success mt-3">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img style="height: 250px;" src="<?=BACK_ASSETS?>images/blog/img1.jpg"
                                class="card-img-top img-fluid" alt=" Image">
                            <div class="card-body">
                                <h5 class="card-title">News 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">About News</h6>
                                <a href="#" class="btn btn-success mt-3">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
$this->view("includes/admin/footer", $data);

?>