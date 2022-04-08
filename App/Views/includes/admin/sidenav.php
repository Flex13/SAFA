<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="<?=ROOT?>dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <!-- Staff Nav -->
                <a class="nav-link" href="<?=ROOT?>admins">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Committee
                </a>
                <!-- End Staff Nav -->


                <!-- User Nav -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#futbol"
                    aria-expanded="false" aria-controls="users">
                    <div class="sb-nav-link-icon"><i class="fas fa-futbol"></i></div>
                    Teams
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="futbol" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?=ROOT?>teams">All Teams</a>
                        <a class="nav-link" href="<?=ROOT?>management">Management</a>
                        <a class="nav-link" href="<?=ROOT?>player">Players</a>
                        <a class="nav-link" href="<?=ROOT?>league/all">Leagues</a>
                        <a class="nav-link" href="<?=ROOT?>divisions">Divisions</a>
                    </nav>
                </div>
                <!-- End User Nav -->

                <!-- User Nav -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#about"
                    aria-expanded="false" aria-controls="users">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                    About SAFA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="about" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">Introduction</a>
                        <a class="nav-link" href="">Governance</a>
                        <a class="nav-link" href="">Presidents Corner</a>
                        <a class="nav-link" href="">Market LFA's</a>
                        <a class="nav-link" href="">Mission Statement</a>
                        <a class="nav-link" href="">Committee</a>
                    </nav>
                </div>
                <!-- End User Nav -->


                <!-- News Nav -->
                <a class="nav-link" href="<?=ROOT?>news/all">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    News
                </a>
                <!-- End News Nav -->

                <!-- Events Nav -->
                <a class="nav-link" href="<?=ROOT?>events/all">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                    Events
                </a>
                <!-- End Events Nav -->


                <!-- Events Nav -->
                <a class="nav-link" href="<?=ROOT?>involved/all">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Get Involved
                </a>
                <!-- End Events Nav -->

                <!-- Events Nav -->
                <a class="nav-link" href="<?=ROOT?>contact/all">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Contact Us
                </a>
                <!-- End Events Nav -->



                <!-- Market Nav -->
                <!-- <a class="nav-link" href="videos.php?m=videos&s=all">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    Jobs
                </a> -->
                <!-- End Market Nav -->

                <!-- Market Nav -->
                <!-- <a class="nav-link" href="videos.php?m=videos&s=all">
                    <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                    Messages
                </a> -->
                <!-- End Market Nav -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: <?= AuthUser::getfirstName(); ?></div>

        </div>
    </nav>
</div>