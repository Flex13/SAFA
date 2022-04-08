<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70">Contact Us
            </h2>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]);?>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Cell</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php if ($rows): ?>
                                    <?php foreach ($rows as $row): ?>


                                    <tr>
                                        <td scope="row"><?=$row->id ?></td>
                                        <td><?=$row->short_name ?></td>
                                        <td><?=$row->name ?></td>
                                        <td><?=$row->division ?></td>
                                        <td><?=$row->location ?></td>
                                        <td><?=$row->user->firstname ?> <?=$row->user->lastname ?></td>
                                        <td><a href="<?=ROOT?>teams/delete/<?=$row->id ?>"
                                                class="btn btn-success btn-sm">View</a>
                                            <a href="<?=ROOT?>teams/edit/<?=$row->id ?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?=ROOT?>teams/delete/<?=$row->id ?>"
                                                class="btn btn-danger btn-sm">Delete</a>

                                        </td>
                                    </tr>



                                    <?php endforeach ?>
                                    <?php else: ?>
                                    <h4>No Teams Found</h4>
                                    <?php endif ?> -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
$this->view("includes/admin/footer", $data);



?>