<?php 
    include 'con_db.php';
    include 'session.php'; 
    $a_id=$_GET['id'];
    $qry=mysqli_query($con,"SELECT * FROM apartment WHERE apartment_id='$a_id'") or die(mysqli_error($con));
    $row=mysqli_fetch_array($qry);
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
       
                <br>
        <div class="row">
            <div class="col-lg-12">
                    <section >
                        <h1 style="text-align: center;">
                            Complex Details
                        </h1>
                        <div class="panel-body">
                                         <form action="" method="post" enctype="multipart/form-data">   

                                       <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4">
                                            <div class="form-group" style="margin-top: 58px;">
                                                <label for="cc-payment" class="control-label mb-1">Apartment Name</label>
                                                <input id="cc-pament" name="aname" pattern="[A-Za-z\s]+"  value="<?php echo $row['apartment_name']; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            </div>



                                         <div class="col-lg-4">
                                            <div class="form-group has-success" >                                      
                                                <label for="cc-name" class="control-label mb-1">Image <img src="saved_images/<?php echo $row['image']; ?>" height="120" width="120"></label>
                                                <input id="cc-name" name="photo" type="file" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>    
                                            </div>
                                            </div>


                                       <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4">                                 
                                            <div class="form-group" >
                                                <label for="cc-number" class="control-label mb-1">Address</label>
                                                <textarea name="addr" class="form-control cc-number identified visa" ><?php echo $row['apartment_address']; ?></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            </div>

                                            <div class="col-lg-4"> 
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Description</label>
                                                <textarea name="adesc" class="form-control cc-number identified visa"><?php echo $row['apartment_desc']; ?> </textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Contact</label>
                                                <input id="cc-pament" name="atel" type="tel" class="form-control" value="<?php echo $row['apartment_contact']; ?>" aria-required="true" aria-invalid="false" pattern="^\d{10}$">
                                            </div>
                                            </div>


                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Builder Name</label>
                                                <input id="cc-pament" value="<?php echo $row['builder_name']; ?> " name="bname" type="text" class="form-control" aria-required="true" aria-invalid="false" pattern="[A-Za-z\s]+">
                                             </div>
                                             </div>
                                             </div>
                                            
                                            <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4"> 
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Number of Parking Slots</label>
                                                <input id="cc-pament" name="pnum" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['num_slot_parking']; ?>" pattern="[0-9]+" min="1" max="100" required="" >
                                             </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Number of Floors</label>
                                               <input id="cc-pament" name="fnum" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['num_floor']; ?>" pattern="[0-9]+" min="1" max="20" required="" >
                                             </div>
                                             </div>
                                            </div>

                                       
                                        <div class="row">
                                        <div class="col-lg-3"></div>
                                         <div class="col-lg-6">
                                                <button id="Change-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                </button>
                                            </div>
                                            </div>
                        </form>
                        </div>
                    </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
    if(isset($_POST['save']))
    {
        if(isset($_FILES['photo']['name']))
        {
          //Image storing code
        $file = rand(1000,100000)."-".$_FILES['photo']['name'];
        $file_loc = $_FILES['photo']['tmp_name'];
        $file_size = $_FILES['photo']['size'];
        $file_type = $_FILES['photo']['type'];
        $folder="saved_images/";
                        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
                        
        $image=str_replace(' ','-',$new_file_name);
                        
        if(move_uploaded_file($file_loc,$folder.$image))
        {// Start of if image file upload successful
            $aname=mysqli_real_escape_string($con,$_POST['aname']);
            $addr=mysqli_real_escape_string($con,$_POST['addr']);
            $atel=mysqli_real_escape_string($con,$_POST['atel']);
            $bname=mysqli_real_escape_string($con,$_POST['bname']);
            $adesc=mysqli_real_escape_string($con,$_POST['adesc']);
            $fnum=mysqli_real_escape_string($con,$_POST['fnum']);
            $pnum=mysqli_real_escape_string($con,$_POST['pnum']);

             $sql=mysqli_query($con,"UPDATE `apartment` SET `apartment_name`='$aname',`image`='$image',`apartment_address`='$addr',`apartment_contact`='$atel',`builder_name`='$bname',`apartment_desc`='$adesc', `num_floor`='$fnum',`num_slot_parking`='$pnum' WHERE apartment_id='$a_id'");
                        if($sql)
                        {
                            echo '<script>alert("Updated Successfully"); window.location="view_apartment.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="up_apartment.php"; </script>'; 
                        }
        } 

     }
            $aname=mysqli_real_escape_string($con,$_POST['aname']);
            $addr=mysqli_real_escape_string($con,$_POST['addr']);
            $atel=mysqli_real_escape_string($con,$_POST['atel']);
            $bname=mysqli_real_escape_string($con,$_POST['bname']);
            $adesc=mysqli_real_escape_string($con,$_POST['adesc']);
            $fnum=mysqli_real_escape_string($con,$_POST['fnum']);
            $pnum=mysqli_real_escape_string($con,$_POST['pnum']);

             $sql=mysqli_query($con,"UPDATE `apartment` SET `apartment_name`='$aname',`apartment_address`='$addr',`apartment_contact`='$atel',`builder_name`='$bname',`apartment_desc`='$adesc', `num_floor`='$fnum',`num_slot_parking`='$pnum' WHERE apartment_id='$a_id'");
                        if($sql)
                        {
                            echo '<script>alert("Updated Successfully"); window.location="view_apartment.php"; </script>';
                        }
                        else
                        {
                           echo '<script>alert("Failed"); window.location="up_apartment.php"; </script>'; 
                        }

    }



?>