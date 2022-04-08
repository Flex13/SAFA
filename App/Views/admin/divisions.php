<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h1 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70"> Divisions
            </h1>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]);?>
            <div class="row">
                <hr>
            </div>

            <a href="#" class="btn btn-success mb-4 px-5"><i class="mx-2 fas fa-plus-circle"></i>
                Create</a>



            <div class="row ">
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Male/Female</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php if ($rows): ?>
                                            <?php foreach ($rows as $row): ?>



                                            <?php endforeach ?>
                                            <?php else: ?>
                                            <h4>No Divisions Found</h4>
                                            <?php endif ?> -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <?php
$this->view("includes/admin/footer", $data);

?>