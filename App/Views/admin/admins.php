<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70"> BCM
                Committee
            </h2>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]);?>
            <hr>

            <div class="container">
                <div class="row">

                    <?php if ($rows): ?>
                    <?php foreach ($rows as $row): ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img style="height: 250px;" src="<?=BACK_ASSETS?>images/profilePic/admins/<?=$row->image?>"
                                class="card-img-top img-fluid" alt="<?=$row->firstname?> <?=$row->lastname?> Image">
                            <div class="card-body">
                                <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
                                <h6 class="card-subtitle mb-2 text-muted "> <?=$row->rank?></h6>
                                <a href="" class="btn btn-success mt-3">View Details</a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>
                    <?php else: ?>s
                    <h4>No Staff Found</h4>
                    <?php endif ?>
                </div>
            </div>



        </div>

        <?php
$this->view("includes/admin/footer", $data);

?>