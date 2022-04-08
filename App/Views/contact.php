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
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->


    <!-- About Section -->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" class="form-control" id="" cols="30" rows="10"
                                placeholder="Write something..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <strong class="text-white d-block">Address</strong> 273 South Riverview Rd. <br> New York,
                            NY 10011
                        </li>
                        <li class="mb-2">
                            <strong class="text-white d-block">Email</strong>
                            <a href="#" style="color: #003A1C
; font-weight:bold">info@safabcm.org.za</a>
                        </li>
                        <li class="mb-2">
                            <strong class="text-white d-block">
                                Phone
                            </strong>
                            <a href="#" style="color: #003A1C
; font-weight:bold">+27 63 930 5623</a>
                        </li>
                    </ul>
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