<div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 no-padding-left-right">
                    <div class="logo">
                        <a href="user_index.php">HELPMEDR</a>
                    </div>
                </div>
                <div class="col-md-4 search-area">
                    <!--  <div class="header-search"> -->
                    <span class="full-sc-icon btn-fullscreen"></span>
                    <!--<ul class="nav d-inl-bl">
                        <!-- Messages: style can be found in dropdown.less--
                        <li class="dropdown header-left-flag">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="flag7"></li>--
                                <li>
                                    <!-- inner menu: contains the actual data --
                                    <ul class="menu">
                                         <!-- <li>
                                           Single Flag -
                                            <a href="#">
                                                <div class="single-flag">
                                                    <img src="assets/img/flag1.png" alt="">
                                                    <span>New-zealand</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!--  End Single Flag --
                                        <li>
                                            <!-- Single Flag -
                                            <a href="#">
                                                <div class="single-flag">
                                                    <img src="assets/img/flag2.png" alt="">
                                                    <span>New-zealand</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!--  End Single Flag --
                                        <li>
                                            <!-- Single Flag --
                                            <a href="#">
                                                <div class="single-flag">
                                                    <img src="assets/img/flag3.png" alt="">
                                                    <span>New-zealand</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!--  End Single Flag --
                                        <li>
                                            <!-- Single Flag -
                                            <a href="#">
                                                <div class="single-flag">
                                                    <img src="assets/img/flag4.png" alt="">
                                                    <span>New-zealand</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!--  End Single Flag --
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>-->
                   <!-- <span class="search-bar">
                        <span class="search-icon"></span>
                    <input type="search" placeholder="Search">
                    </span>-->
                </div>
                <div class="col-md-6 text-right">
                    <div class="header-right">
                        <ul class="nav d-inl-bl">
                            <!-- Messages: style can be found in dropdown.less--
                            <li class="dropdown header-left-flag cta">
                                <a href="#" class="dropdown-toggle cta1" data-toggle="dropdown"><span>4</span></a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="flag1"></li>
                                    <li>
                                        <!-- inner menu: contains the actual data ->
                                        <ul class="menu">
                                            <li>
                                                <!-- Single icon ->
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <img src="assets/img/bell-icon1.png" alt="">
                                                        <div class="header-right-icon-text cta1">
                                                            <p>New user registerd</p>
                                                            <span>2 Minits ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--  End Single icon ->
                                            <li>
                                                <!-- Single icon ->
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <img src="assets/img/bell-icon2.png" alt="">
                                                        <div class="header-right-icon-text cta1">
                                                            <p>Settings updated</p>
                                                            <span>5 Hours ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--  End Single icon --
                                            <li>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <img src="assets/img/bell-icon3.png" alt="">
                                                        <div class="header-right-icon-text cta1">
                                                            <p>Event started</p>
                                                            <span>3 Days ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--  End Single icon -
                                            <li>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <img src="assets/img/bell-icon4.png" alt="">
                                                        <div class="header-right-icon-text cta1">
                                                            <p>New twitter followers</p>
                                                            <span>6 Days ago</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--  End Single icon --
                                            <li>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag cta">
                                                        <p>See all Notafaction</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--  End Single icon --
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>-->
                        <ul class="nav d-inl-bl">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown header-left-flag cta2">
                                <a href="#" class="dropdown-toggle cta2" data-toggle="dropdown"><span class="animate_pulse"></span></a>
                                <ul class="dropdown-menu wid_338 animated flipInX">
                                    <li class="flag1"></li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                       
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        
                        <?php
                        
                      //  session_start();
                        
                        include("db.php");
                        ?>
                            
				
                        
                        
                        <ul class="nav d-inl-bl">
                            
                          
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown header-left-flag cta3">
                                <a href="#" data-toggle="dropdown">
                                    <img src="assets/img/user-img.png" alt="">
 <?php if (isset($_SESSION['usr_id'])) { ?>
                                    <span class="user-id"><?php echo $_SESSION['usr_name']; ?></span>
                                    <span class="arrow-down"></span>
                                </a>
                                <ul class="dropdown-menu cta4 animated flipInX">
                                    <li class="flag1"></li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                           
                                            <li>
                                                <!-- Single icon -->
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <span class="user-hv cta1" style="background: url(assets/img/user.png);"></span>
                                                        <div class="header-right-icon-text">
                                                            <a href="../index.php"><p>Home</p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <!-- Single icon -->
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <span class="user-hv cta1" style="background: url(assets/img/user.png);"></span>
                                                        <div class="header-right-icon-text">
                                                            <a href="../logout.php"><p>Logout</p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!--<li>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <span class="user-hv cta1" style="background: url(assets/img/user.png);"></span>
                                                        <div class="header-right-icon-text">
                                                            <a href="update.php"><p>Setting</p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>-->
                                            <li><?php } else { ?>
				
				
				<?php } ?>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag">
                                                        <span class="user-hv cta1" style="background: url(assets/img/user.png);"></span>
                                                        <div class="header-right-icon-text">
                                                            <p>Account</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                           
                                            <li>
                                                <!-- Single icon --
                                                <a href="#">
                                                    <div class="single-flag cta5">
                                                        <span class="user-hv" style="background: url(assets/img/power.png);"></span>
                                                        <div class="header-right-icon-text">
                                                            <a href="../logout.php"><p>Logout</p></a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                           
                                            
                                            <!--  End Single icon -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>