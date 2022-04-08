<?php
$this->view("includes/admin/header", $data);
$this->view("includes/admin/nav", $data);
?>
<div id="layoutSidenav">
    <?php $this->view("includes/admin/sidenav", $data);?>
    <div id="layoutSidenav_content">
        <!-- Main Contact -->

        <main>

            <div class="container-fluid px-4 mb-5">
                <?php $this->view("includes/admin/crumbs", $data);?>

                <!-- Profile Tabs -->
                <?php $this->view("admin/profile/profileTab", $data); ?>
                <!-- End Profile Tab -->

                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row"
                                    style="display: flex;align-content: center; justify-content: center;align-items: center;">
                                    <div class="col-md-4">
                                        <img src="<?=BACK_ASSETS?>images/profilePic/profile-icon.png" class="img-fluid"
                                            style="height: 250px;" alt="">
                                    </div>
                                    <div class=" col-md-8">
                                        <div class="card-body">
                                            <!-- User Activation Details -->
                                            <?php $this->view("admin/profile/userDetails", $data);?>
                                            <!-- End User Activation Details -->

                                            <?php
                                switch ($data['tab']) {
                                    case "Profile":
                                        $this->view("admin/profile/myProfile", $data);
                                        break;
                                    case "Location":
                                        $this->view("admin/profile/location", $data);
                                        break;
                                    case "Picture":
                                        $this->view("admin/profile/picture", $data);
                                        break;
                                    case "Position":
                                        $this->view("admin/profile/classes", $data);
                                        break;
                                }
                                ?>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </main>



        <?php
$this->view("includes/admin/footer", $data);

?>