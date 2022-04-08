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

                        <h4 class="card-title"><img src="<?=AUTH_ASSETS?>img/logo.png" alt="SAFA Buffalo City Logo"
                                height="100">Login</h4>
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
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif;?>
                        <!-- End Error/Success Message -->

                        <form method="POST" id="BTSForm" autocomplete="on">

                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input value="<?=get_var('email')?>" autocomplete="email" id="email" type="email"
                                    class="form-control" name="email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Password
                                    <a href="<?=ROOT?>auth/forget" class="float-right">
                                        Forgot Password?
                                    </a>
                                </label>
                                <input autocomplete="current-password" value="<?=get_var('email')?>" id="password"
                                    type="password" class="form-control" name="password" required data-eye>
                            </div>

                            <div class="form-group">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                    <label for="remember" class="custom-control-label">Remember Me</label>
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                            <div class="mt-4 text-center">
                                Don't have an account? <a href="<?=ROOT?>auth/register">Create One</a>
                            </div>
                        </form>
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