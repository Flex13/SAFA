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
                    <h1 class="text-white">News</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->


    <!-- About Section -->

    <div class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-12 title-section">
                    <h2 class="heading">Latest News</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_3.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- End About Section -->


    <!-- New Section -->

    <div class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-12 title-section">
                    <h2 class="heading">Archives</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_3.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="<?=FRONT_ASSETS?>images/img_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="<?=FRONT_ASSETS?>images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- End Section -->


    <?php $this->view("includes/front/siteFooter", $data); ?>
</div>

<?php

$this->view("includes/front/footer", $data);
?>