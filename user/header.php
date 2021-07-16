 <header>
            <nav class="navbar navbar-expand-lg navbar-light shift">
                <div class="logo">
                    <h1>
                        <a class="navbar-brand" href="homepage.php">
                            <i class="fab fa-firstdraft"></i> Commercial Suite</a>
                    </h1>
                </div>
               <?php 
                  $sql=mysqli_query($con,"SELECT shop_o_id FROM shop_owners where shop_o_id='$sid'");
                  $row=mysqli_fetch_array($sql);

                ?> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                        </li>
                        <li class="nav-item dropdown">
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                        </li>
                        <li class="nav-item dropdown">
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                        </li>
                        <li class="nav-item dropdown">
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                        </li>
                        <li class="nav-item dropdown">
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="homepage.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $sname; ?>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="query.php">Send Query</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>

                            </div>
                        </li>
                    </ul>
                    <!-- <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                        <input class="form-control" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn1 my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form> -->
                </div>
            </nav>
        </header>