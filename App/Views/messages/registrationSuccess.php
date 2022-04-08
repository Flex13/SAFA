<?php
$this->view("includes/auth/header", $data);

?>

<section class="h-100">
    <div class="container" style="margin-top: 90px;">
        <div class="row h-100" style="display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;">
            <div class="card-wrapper">
                <div class="card fat">
                    <div class="card-body">

                        <img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo" height="100">

                        <div class="alert" role="alert">
                            <h4 class="alert-heading">Registration Successful</h4>
                            <p>Welcome to SAFA BCM. You will now be able to accesss the Admin account</p>
                            <hr>
                            <p class="mb-0">Please verify your email. An Email link has been sent to your inbox</p>
                        </div>

                        <div class="mt-4 text-center"><a class="btn btn-primary btn-block"
                                href="<?=ROOT?>auth">Login</a>
                        </div>

                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; SAFA Buffalo City All Rights Reserved © 2022 | Site by Bukani Tech Solutions
                </div>
            </div>
        </div>
    </div>
</section>





<?php

$this->view("includes/auth/footer", $data);
?>