<nav class="navbar navbar-fixed-top" role=navigation>
    <div class=navbar-header>
        <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-collapse>
            <span class=sr-only>Toggle navigation</span>
            <i class=material-icons>apps</i>
        </button>
        <a class=navbar-brand href=/signin_module/stutealogin.html>
            <img class=main-logo src="assets/dist/img/edu.png" alt="">
        </a>
    </div>
    <div class=nav-container>
        <ul class="nav navbar-top-links navbar-left">
            <h2 style="text-align: center;">Educhasers </h2>
        </ul>
    </div>
</nav>
<div class=sidebar role=navigation>
    <div class="sidebar-nav navbar-collapse">
        <ul class=nav id=side-menu>
            <li class="nav-heading "> <span>Teacher Dashboard&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
            <li>
                <a href="t-events.php" class=material-ripple style="color:white;"><i class=material-icons>account_circle</i>UPCOMING EVENTS</a>
            </li>
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
                <a href="#" class=material-ripple style="color:white;"><i class=material-icons>assignment</i> RESULTS<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="add-results.php" style="color:white;">ADD RESULTS</a></li>
                    <li><a href="performance.php" style="color:white;">OVERALL PERFORMANCE</a></li>
                    <li><a href="all-results.php" style="color:white;">RESULT CARDS</a></li>
                </ul>
            </li>
           <li>
                <a href="t-profile.php" class=material-ripple style="color:white;"><i class=material-icons>assignment</i> UPDATE PROFILE</a>
            </li>
           <li>
                <a href="logout.php" class=material-ripple style="color:white;"><i class=material-icons>assignment</i> LOGOUT</a>
            </li>
        </ul>
    </div>
</div>