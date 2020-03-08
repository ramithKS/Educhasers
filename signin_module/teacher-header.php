<nav class="navbar navbar-fixed-top" role=navigation>
                <div class=navbar-header>
                    <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-collapse>
                        <span class=sr-only>Toggle navigation</span>
                        <i class=material-icons>apps</i>
                    </button>
                    <a class=navbar-brand href=index.html>
                        <img class=main-logo src="assets/dist/img/light-logo.png" alt="">
                    </a>
                </div>
                <div class=nav-container>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class=dropdown>
                            <a class=dropdown-toggle data-toggle=dropdown href="#">
                                <i class=material-icons>ADMIN</i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href=login.html><i class=ti-layout-sidebar-left></i>&nbsp; Logout</a></li>
                            </ul>
                        </li>
                        <li class=log_out>
                            <a href=login.html>
                                <i class=material-icons>power_settings_new</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class=sidebar role=navigation>
                <div class="sidebar-nav navbar-collapse">
                    <ul class=nav id=side-menu>
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class=material-ripple style="color:white;"><i class=material-icons>assignment</i>ATTENDANCE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="add-attendance.php" style="color:white;">ADD ATTENDANCE</a></li>
                                <li><a href="today-attendance.php" style="color:white;">TODAY ATTENDANCE LIST</a></li>
                                <li><a href="all-attendance.php" style="color:white;">ATTENDANCE LOGS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class=material-ripple style="color:white;"><i class=material-icons>assignment</i> ASSIGNMENTS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="add-assignments.php" style="color:white;">ADD ASSIGNMENTS</a></li>
                                <li><a href="pending-assignments.php" style="color:white;">PENDING ASSIGNMENTS</a></li>
                                <li><a href="completed-assignments.php" style="color:white;">COMPLETED ASSIGNMENTS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="all-subjects.php" class="material-ripple" style="color:white;"><i class="material-icons">map</i> SUBJECTS</a>
                        </li>
                    </ul>
                </div>
            </div>
            