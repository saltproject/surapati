  <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "".$_SESSION["username"]."" ?></div>
                    <div class="email">surapati55d@mail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    
                    <li>
                        <li>
                                    <a href="index.php?add_post">
                                        <i class="material-icons">person</i>
                                        <span>Account</span>
                                    </a>
                        </li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">call_to_action</i>
                            <span>Articles</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="index.php?post">
                                    <i class="material-icons">call_to_action</i>
                                    <span>All</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?add_post">
                                    <i class="material-icons">call_to_action</i>
                                    <span>Update Artikel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_up</i>
                            <span>Product</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">call_to_action</i>
                                    <span>Update Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?product">
                                    <i class="material-icons">call_to_action</i>
                                    <span>Update Product</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../controller/logout.php">
                            <i class="material-icons">remove_circle</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">SALT PROJECT</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->