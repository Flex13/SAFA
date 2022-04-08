<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <div class="container-fluid px-4">
            <h2 class="mt-4"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="70"> Edit
                Team</h2>
            <?php $this->view("includes/admin/crumbs", ['crumbs'=>$crumbs]); ?>

            <hr>

            <?php if ($row):?>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-6">
                    <div class="card shadow-sm mb-5">
                        <div class="card-body">
                            <!-- Error/Success Messages -->
                            <?php if (count($errors) > 0):?>
                            <div id="myAlert" class="alert alert-danger alert-dismissible fade show p-2" role="alert">
                                <strong class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16"
                                        role="img" aria-label="Warning:">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    Errors:</strong>
                                <?php foreach ($errors as $error):?>
                                <br><?=$error?>
                                <?php endforeach;?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            <?php endif;?>
                            <!-- End Error/Success Message -->
                            <form id="BTSFORM" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Team Name:</label>
                                    <input placeholder="Team Name" value="<?=get_var('name', $row[0]->name)?>"
                                        type="text" id="name" name="name" class="form-control" required autofocus />
                                </div> <!-- form-group// -->

                                <div class="mb-3">
                                    <label for="short_name" class="form-label">Short Name:</label>
                                    <input placeholder="Short Name"
                                        value="<?=get_var('short_name', $row[0]->short_name)?>" type="text"
                                        id="short_name" name="short_name" class="form-control" required />
                                </div> <!-- form-group// -->

                                <div class="mb-3">
                                    <label for="division" class="form-label">Division:</label>
                                    <select name="division" id="division" class="form-control">
                                        <option <?=get_select('division', '')?> value="">--Select Division--
                                        </option>
                                        <option <?=get_select('division', 'First Team')?> value="First Team">First Team
                                        </option>
                                        <option <?=get_select('division', 'Under 17')?> value="Under 17">Under 17
                                        </option>
                                        <option <?=get_select('division', 'Under 15')?> value="Under 15">Under 15
                                        </option>
                                        <option <?=get_select('division', 'Under 13')?> value="Under 13">Under 13
                                        </option>
                                    </select>
                                </div> <!-- form-group// -->

                                <div class="mb-3">
                                    <label for="location" class="form-label">Location:</label>
                                    <input value="<?=get_var('location', $row[0]->location)?>" type="text"
                                        name="location" id="location" class="form-control" placeholder="Location">
                                </div> <!-- form-group// -->


                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                    <a href="<?=ROOT?>teams" class="btn btn-danger">Back</a>
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