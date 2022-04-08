<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h1 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70">
                Dashbboard</h1>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="lead text-secondary">Welcome</h4>
                </div>
                <hr>
            </div>

        </div>

        <?php
$this->view("includes/admin/footer", $data);

?>