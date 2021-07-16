<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
     <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
    <img src="images/logo.jpg" alt="Commercial Suite" style="height: 80px; width: 240px;" />
    <a href="" class="logo" >  
    </a>
   
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        

        <li id="header_notification_bar" class="sub-menu">
            <a href="adduser.php">

                <i class="fa fa-user"></i>
                <span class="badge bg-warning">Add User</span>
            </a>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img src="images/icon/image.jpg" alt="Admin">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                
                <li>
                    <a href="view_apartment.php"><i class="fa fa-home"></i>Complex Info</a>
                </li>
                <li>
                    <a href="change_pwd.php"><i class="fa fa-gear"></i>Setting</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                </li>
            </ul>
        </li>
       
    </ul>
    <!--search & user info end-->

</div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="homepage.php">
                        <i class="fa fa-dashboard"></i>
                        <span><b><u>Dashboard</u></b></span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="maintenance.php">
                        <i class="fa fa-folder"></i>
                        <span>Maintenance</span>
                    </a>                    
                </li>
                

                <li class="sub-menu">
                    <a href="parking.php">
                        <i class="fa fa-automobile"></i>
                        <span>Parking</span>
                    </a>                    
                </li>

                <li class="sub-menu">
                    <a href="view_floor.php">
                        <i class="fa fa-align-justify"></i><span>Floor</span>
                    </a>                    
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-building-o"></i><span>Shops</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="view_shop.php">Manage Shops</a>
                        </li>
                        <li>
                            <a href="view_owner.php">Shop Owners</a>
                        </li>
                        <li>
                            <a href="view_rent.php">Shop Rent Details</a>
                        </li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="query.php">
                        <i class="fa fa-align-justify"></i><span>Queries</span>
                    </a>                    
                </li>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>