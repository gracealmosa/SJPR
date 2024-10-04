<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <img src="assets/img/favicon/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">S.I.L.P</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">John Doe</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Home -->
                <li class="nav-item">
                    <a href="home.php?tab=dashboard" class="nav-link <?php if (isset($current_tab) && $current_tab == 'dashboard'){echo 'active';}?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Personal Details -->
                <li class="nav-item has-treeview <?php if (isset($current_tab) && ($current_tab == 'priestdetail' || $current_tab == 'memberdetail')){echo 'menu-open';}?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Personal Details<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="home.php?tab=priestdetail" class="nav-link <?php if (isset($current_tab) && $current_tab == 'priestdetail'){echo 'active';}?>">
                                <p>Priest Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php?tab=memberdetail" class="nav-link <?php if (isset($current_tab) && $current_tab == 'memberdetail'){echo 'active';}?>">
                                <p>Member Details</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Records -->
                <li class="nav-item has-treeview <?php if (isset($current_tab) && in_array($current_tab, ['baptismal', 'confirmation', 'defuncturiom', 'marriage'])){echo 'menu-open';}?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Records<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="home.php?tab=baptismal" class="nav-link <?php if (isset($current_tab) && $current_tab == 'baptismal'){echo 'active';}?>">
                                <p>Baptismal Record</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php?tab=confirmation" class="nav-link <?php if (isset($current_tab) && $current_tab == 'confirmation'){echo 'active';}?>">
                                <p>Confirmation Record</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php?tab=defuncturiom" class="nav-link <?php if (isset($current_tab) && $current_tab == 'defuncturiom'){echo 'active';}?>">
                                <p>Defuncturiom Record</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php?tab=marriage" class="nav-link <?php if (isset($current_tab) && $current_tab == 'marriage'){echo 'active';}?>">
                                <p>Marriage Record</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Account Settings -->
                <li class="nav-item has-treeview <?php if (isset($current_tab) && $current_tab == 'accountsetting'){echo 'menu-open';}?>">
                    <a href="home.php?tab=accountsetting" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Account Settings<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="home.php?tab=accountsetting" class="nav-link <?php if (isset($current_tab) && $current_tab == 'accountsetting'){echo 'active';}?>">
                                <p>Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-account-settings-notifications.html" class="nav-link">
                                <p>Notifications</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
