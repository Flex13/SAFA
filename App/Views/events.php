<?php
$this->view("includes/front/header", $data);

?>

<div class="site-wrap">
    <?php $this->view("includes/front/nav", $data);
 ?>


    <!-- hero -->

    <div class="hero overlay" style="background-image: url('<?=FRONT_ASSETS?>images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 class="text-white">Events</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->


    <!-- About Section -->

    <div class="container site-section">
        <div class="row">
            <div class="col-6 title-section">
                <h2 class="heading">Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="custom-media d-flex aboutCards">
                    <div class="img mr-4">
                        <img src="<?=FRONT_ASSETS?>images/logo/logo.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-4"><a href="#">Event 1</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                            dolorem.</p>
                        <p><a class="aboutTag" href="#">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="custom-media d-flex aboutCards">
                    <div class="img mr-4">
                        <img src="<?=FRONT_ASSETS?>images/logo/logo.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-4"><a href="#">Event 2</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                            dolorem.</p>
                        <p><a class="aboutTag" href="#">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="custom-media d-flex aboutCards">
                    <div class="img mr-4">
                        <img src="<?=FRONT_ASSETS?>images/logo/logo.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-4"><a href="#">Event 3</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                            dolorem.</p>
                        <p><a class="aboutTag" href="#">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="custom-media d-flex aboutCards">
                    <div class="img mr-4">
                        <img src="<?=FRONT_ASSETS?>images/logo/logo.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-4"><a href="#">Event 4</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                            dolorem.</p>
                        <p><a class="aboutTag" href="#">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About Section -->


    <?php $this->view("includes/front/siteFooter", $data); ?>
</div>

<?php

$this->view("includes/front/footer", $data);
?>