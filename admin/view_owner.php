<?php 
    include 'con_db.php';
    include 'session.php'; 
?>
<!DOCTYPE html>
<head>
<title>Commercial Suite</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body style="background-image:url('images/rohan/7.jpg')">
<section id="container">
<!--header start-->
<?php include('header.php'); ?>
<!--header end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="row">
                    <div class="col-lg-10"></div>
                    <?php $sr=mysqli_query($con,"SELECT * FROM shops WHERE shop_status='available' order by shop_no asc"); 
                    $rw=mysqli_fetch_array($sr);
                          $qr=mysqli_query($con,"SELECT * FROM shop_owners");
                          $rws=mysqli_num_rows($qr);
                          if($rws<$rw){?>
                    <div class="col-lg-2">
                               <a href="shop_owner.php" class="btn btn-info" title="Add Shop Owner Information"><i class="fa fa-eye"></i>Add Owner Info</a>
                           </div>

<?php } else {?>                           
                    <div class="col-lg-2">
                    <?php } ?>
                </div>
                <br>
        <div class="row">
        <div class="col-md-6"></div>
            <div class="col-lg-12">
                    <section class="panel">
                                <!-- DATA TABLE -->
                               <header class="panel-heading">
                           Shop Owner Information
                        </header>
                                
                                    <table class="table table-bordered  table-hover" style="background-color:white" border="solid green 1px">
                                        <thead>
                                            <tr>
                                                <th>SHOP NO</th>
                                                <th>NAME</th>
                                                <th>TYPE</th>
                                                <th>CATEGORY</th>
                                                <th>OWNER</th>
                                                <th>CONTACT</th>                                                
                                                <th>E-MAIL</th>                                                
                                                <th>ACTION</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                            $sql=mysqli_query($con,"SELECT * FROM shop_owners,shops WHERE shops.shop_id=shop_owners.shop_id order by shop_no");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                
                                                <td><?php echo $row['shop_no'];  ?></td>
                                                <td><?php echo $row['shop_name'];  ?></td>
                                                
                                                <td ><?php echo $row['shop_type'];  ?></td>
                                                <td><?php echo $row['shop_cat'];  ?></td>
                                                <td><?php echo $row['owner'];  ?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $row['owner_contact'];  ?></span>
                                                </td>
                                                <td><?php echo $row['email'];  ?></td>

                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="up_owner.php?id=<?php echo $row['shop_o_id']; ?>" class="btn btn-info" data-placement="top" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a href="view_shopowner.php?id=<?php echo $row['shop_o_id']; ?>" class="btn btn-success" data-placement="top" title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>

                                                        <a href="delete_owner.php?id=<?php echo $row['shop_o_id']; ?>" onclick="return confirm('Are you sure to delete'); " class="btn btn-danger" data-placement="top" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                  
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //tasks -->
        
</section>

</section>
<!--main content end-->
</section>
    <script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <!-- //calendar --> 

</body>

</html> 
<!-- end document-->