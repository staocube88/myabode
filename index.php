<?php
//Start session
//session_start();

include './view_all.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>MyAbode</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="icon" href="favicon.png">

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/4-col-portfolio.css" rel="stylesheet">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body class="loadgif">

                <!--<nav class="navbar navbar-inverse navbar-fixed-top">-->
                <nav class="navbar navbar-inverse navbar-static-top" >
                    <!--style="background: #337AB7;box-shadow: 10px 10px 5px #5CB85C;">-->
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Icon</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">myAbode</a></li>
                                <li><a href="about.php">About</a></li>
                                <!--<li><a href="#" data-toggle="modal" data-target="#myModal1">Contact</a></li>-->
                                <!--                                <li class="dropdown">
                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a></li>
                                                                        <li><a href="#">Another action</a></li>
                                                                        <li><a href="#">Something else here</a></li>
                                                                        <li role="separator" class="divider"></li>
                                                                        <li class="dropdown-header">Nav header</li>
                                                                        <li><a href="#">Separated link</a></li>
                                                                        <li><a href="#">One more separated link</a></li>
                                                                    </ul>
                                                                </li>-->
                            </ul>
                        </div>
                    </div>
                </nav>

        <!--        <div class="navbar navbar-fixed-top navbar-inverse">
                    <div class="container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">myAbode</a>
        
                    </div> /.container 
                </div> /.navbar 
        
                 HEADER 
                =================================
        
                <div class="jumbotron text-center bagd">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-12 col-sm-12 text-left">
                                <h1>MyAbode</h1>
                                <p>...rent a house now</p>
        
                            </div>
                        </div>
                    </div> 
                </div>
                 /header container


      
        -->

        <!-- Carousel
        ================================================== -->
        <!--        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     Indicators 
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="img/bckg/bckg.jpg" alt="First slide">
                            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Example headline.</h1>
                                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">View more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>One more for good measure.</h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                </div>-->
        <!--</div> /.carousel -->

        <!-- CONTENT
        =================================-->
        <div class="container">
            <!--            <div class="row">
                            <div class="col-sm-12"><div class="well">Recent House</div></div>
                        </div>-->
            <!--Showing Recent Houses-->
            <div class="row">
                <!--<div class="col-lg-12">-->
                <div class="col-lg-3">
                    <div class="col-sm-3 col-md-12 sidebar well-sm">
                        <!--                        <ul class="nav nav-sidebar">
                                                    <h2 class="page-header"><span class="label label-primary">Properties</span></h2>
                        
                                                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#">Reports</a></li>
                                                    <li><a href="#">Analytics</a></li>
                                                    <li><a href="#">Export</a></li>
                                                    <input name="" type="text"/>
                                                </ul>-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Properties</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                $result = mysqli_query($con, "select DISTINCT(property_type) from property ORDER BY RAND()")or die(mysqli_error());

                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <p> <a href="?<?php echo base64_encode(rand(0, 100)) . "&type_now={$row['property_type']}&" . base64_encode(rand(0, 100)) ?>" class="btn btn-lg btn-default center-block"><?php echo $row['property_type']; ?></a></p>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Search Filter</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="#" method="post" class="form-horizontal">
                                    <!--<fieldset>-->
                                    <legend class="text-center text-muted">Select feature(s) to search for apartment</legend>

                                    <div class="col-lg-12">
                                        <?php
                                        $result = mysqli_query($con, "select DISTINCT(property_title) from property ORDER BY RAND()")or die(mysql_error());

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <div class="col-sm-12 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="<?php echo $row['property_title']; ?>"><?php echo $row['property_title']; ?></div>
                                        <?php } ?>
                                    </div>

                                    <!--</fieldset>-->
                                    <legend></legend>
                                    <fieldset>
                                        <legend class="text-center text-muted">Select Location to search for apartment</legend>

                                        <div class="col-lg-12">
                                            <input type="text" name="loca"  class="well well-sm text-justify text-info" placeholder="Enter Location" />
                                            <?php
                                            $result = mysqli_query($con, "select DISTINCT(state) from property ORDER BY RAND()")or die(mysql_error());

                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <div class="panel panel-title panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title"><?php echo $row['state']; ?></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <?php
                                                        $result1 = mysqli_query($con, "select DISTINCT(city) from property WHERE state='{$row['state']}'")or die(mysql_error());

                                                        while ($row1 = mysqli_fetch_array($result1)) {
                                                            ?>
                                                            <div class="col-sm-12 portfolio-item  thumbnail"><input type="checkbox" name="city[]" value="<?php echo $row1['city']; ?>"><?php echo $row1['city']; ?></div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                                                                                                                                                                                                                    <!--<div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="location[]" value="<?php echo $row['property_title']; ?>"><?php echo $row['property_title']; ?></div>-->
                                            <?php } ?>
                                        </div>
<!--                                        <table border="0">
                                           <tr>
                                               <td><input type="checkbox" name="feature[]" value="walkincloset">Walk in closet</td>
                                               <td><input type="checkbox" name="feature[]" value="storage">storage</td>
                                               <td><input type="checkbox" name="feature[]" value="availability">availability</td>
                                           </tr>
                                           <tr>
                                           <input type="text" name="loca"  class="well well-lg text-justify text-info" placeholder="Enter Location" />
                                           </tr>
                                       </table>-->
                                    </fieldset>
                                    <legend></legend>

                                    <fieldset>
                                        <legend class="text-center text-muted">Price(#) range Search</legend>
                                        <div class="col-sm-12">
                                            <div class="input-group spinner">
                                                <input type="text" class="form-control " value="50000" name="from_price">
                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button>
                                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-sm-12 text-center text-warning ">TO</div>
                                        <div class="col-sm-12">
                                            <div class="input-group spinner1">
                                                <input type="text" class="form-control block" value="70000" name="to_price">
                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button>
                                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <legend></legend>
                                    <button type="submit" name="submit_Search" class="btn btn-lg btn-primary btn-block" data-toggle="tooltip" title="click to search">Search</button>

                                </form>
                            </div>
                        </div>
<!--                        <p>  <a href="#" class="btn btn-lg btn-warning">Recent</a>
                            <a href="#" class="btn btn-lg btn-warning">Most Viewed</a></p>-->

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">About Complanet Technology</h3>
                            </div>
                            <div class="panel-body">
                                <div class="well">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                                </div>
                                <a href="about.php" class="btn btn-lg btn-primary btn-block" data-toggle="tooltip" title="read more">Read More</a>
                            </div>
                        </div>

                        <!--                        <ul class="nav nav-sidebar">
                                                    <li><a href="">Nav item</a></li>
                                                    <li><a href="">Nav item again</a></li>
                                                    <li><a href="">One more nav</a></li>
                                                    <li><a href="">Another nav item</a></li>
                                                    <li><a href="">More navigation</a></li>
                                                </ul>-->
                        <!--                        <ul class="nav nav-sidebar">
                                                    <li><a href="">Nav item again</a></li>
                                                    <li><a href="">One more nav</a></li>
                                                    <li><a href="">Another nav item</a></li>
                                                </ul>-->
                    </div>
                </div>

                <div class="col-lg-9">
                    <h1 class="page-header">TRENDING NOW<sup role="presentation" data-toggle="tooltip" title="Total Visit"><a href="#"><span class="badge"><?php echo $_SESSION['usernum_rowsmsg']; ?></span></a></sup></h1>
                    <?php
                    if (!empty($_SESSION['usermsg'])) {
                        echo $_SESSION['usermsg'];
                        $_SESSION['usermsg'] = '';
                    }

                    if ($_POST) {
                        $values = '';

                        if (!empty($_POST['feature'])) {
                            $til = $_POST['feature'];

                            foreach ($til as $value) {
                                $values .= "property_title ='$value' or ";
                            }
                        }

                        if (!empty($_POST['city'])) {
                            $typ = $_POST['city'];

                            foreach ($typ as $value) {
                                $values .= "city ='$value' or ";
                            }
                        }



                        //`id` IN(".implode(',' $ids).")"  or property_title ='{$til}' or city ='{$typ}'
                        $result = mysqli_query($con, "select * from property WHERE {$values} city='{$_POST['loca']}' or price BETWEEN '{$_POST['from_price']}' AND '{$_POST['to_price']}' ORDER BY RAND()")or die(mysql_error());
                    } else if (!empty($_GET['type_now'])) {
                        $result = mysqli_query($con, "select * from property WHERE property_type = '{$_GET['type_now']}' ORDER BY RAND()")or die(mysql_error());
                    } else {
                        $result = mysqli_query($con, "select * from property ORDER BY RAND()")or die(mysql_error());
                    }
                    $_GET['type_now'] = '';
                    //    $_SESSION['usernum_rowsmsg'] = mysqli_num_rows($result);

                    while ($row = mysqli_fetch_array($result)) {
                        //        $_SESSION['property_code'] = $row['property_code'];
                        //        $_SESSION['address'] = $row['address'];
                        //        $_SESSION['price'] = $row['price'];
                        //        $_SESSION['map_location'] = $row['map_location'];
                        //        $_SESSION['property_title'] = $row['property_title'];
                        //        $_SESSION['company_name'] = $row['company_name'];
                        //        $_SESSION['agent_name'] = $row['agent_name'];
                        //        $_SESSION['property_type'] = $row['property_type'];
                        //        $_SESSION['security'] = $row['security'];
                        //        $_SESSION['caption1'] = $row['caption1'];
                        //        $_SESSION['caption2'] = $row['caption2'];
                        //        $_SESSION['caption3'] = $row['caption3'];
                        //        $_SESSION['caption4'] = $row['caption4'];
                        //        $_SESSION['caption5'] = $row['caption5'];
                        //        $_SESSION['description'] = $row['description'];
                        //        $_SESSION['status'] = $row['status'];
                        //        
                        //                        $_SESSION['property_all'] = "<div class = \"col-sm-3 portfolio-item  thumbnail\">
                        //                        <a href=\"#\">
                        //                            <img   class=\"img-responsive \" src=\"../{$row['caption1']}\" alt=\"{$row['caption1']}\">
                        //                        </a> <div class=\"caption btn-success btn-sm\">
                        //                            <p>Name: {$row['property_title']}<br/>Address: {$row['address']}<br/>Contact:  07060402221<br/>Price (full package):  #{$row['price']}</p>                  
                        //                            <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">More Details</button>
                        //                        </div>
                        //                    </div>";
                        //                        echo $_SESSION['property_all'];
                        ?>
                        <div class="col-sm-4 portfolio-item  thumbnail">
                            <a href="#">
                                <img   class="img-responsive " src="client/<?php echo $row['caption1']; ?>" alt="<?php echo $row['caption1']; ?>">
                            </a> <div class="caption btn-primary btn-sm">
                                <p>Name: <?php echo " " . $row['property_title']; ?><br/>Address: <?php echo " " . $row['address']; ?><br/>Contact:   07060402221<br/>Price (full package): <?php echo " #" . $row['price']; ?></p>                  
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['property_id']; ?>">More Details</button>
                            </div>
                        </div>
                        <!--</div>-->
                        <!--End Showing Recent Houses-->


                        <!-- Modal Recent-->
                        <div class="modal fade" id="myModal<?php echo $row['property_id']; ?>" role="dialog" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header btn-primary">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $row['property_title']; ?> Details</h4>
                                    </div>
                                    <div class="modal-body alert-primary">
                                        <div class="row">
                                            <div class="col-sm-6 well">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">


                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <?php if (!empty($row['caption1'])) { ?>
                                                            <div class="item active">
                                                                <img src="client/<?php echo $row['caption1']; ?>" class="modalLog" alt="<?php echo $row['caption1']; ?>">
                                                                <div class="carousel-caption">
                                                                    <h3><?php echo $row['property_title']; ?></h3>
                                                                    <p>Property description is shown below.</p>
                                                                </div>
                                                            </div>
                                                        <?php } if (!empty($row['caption2'])) {
                                                            ?>
                                                            <div class="item ">
                                                                <img src="client/<?php echo $row['caption2']; ?>" class="modalLog" alt="<?php echo $row['caption2']; ?>">
                                                                <div class="carousel-caption">
                                                                    <h3><?php echo $row['property_type']; ?></h3>
                                                                    <!--<p>Category:A room suite.<br/>Qty:1-4 students</p>-->
                                                                </div>
                                                            </div>
                                                        <?php } if (!empty($row['caption3'])) {
                                                            ?>
                                                            <div class="item active">
                                                                <img src="client/<?php echo $row['caption3']; ?>" class="modalLog" alt="<?php echo $row['caption3']; ?>">
                                                                <div class="carousel-caption">
                                                                    <h3><?php echo $row['company_name']; ?></h3>
                                                                    <p>Agent <br/><?php echo $row['agent_name']; ?></p>
                                                                </div>
                                                            </div>
                                                        <?php } if (!empty($row['caption4'])) {
                                                            ?>
                                                            <div class="item active">
                                                                <img src="client/<?php echo $row['caption4']; ?>" class="modalLog" alt="<?php echo $row['caption4']; ?>">
                                                                <div class="carousel-caption">
                                                                    <h3><?php echo $row['property_title']; ?></h3>
                                                                    <!--<p>Category:A room suite.<br/>Qty:1-4 students</p>-->
                                                                </div>
                                                            </div>
                                                        <?php } if (!empty($row['caption5'])) {
                                                            ?>

                                                            <div class="item active">
                                                                <img src="client/<?php echo $row['caption5']; ?>" class="modalLog" alt="<?php echo $row['caption5']; ?>">
                                                                <div class="carousel-caption">
                                                                    <h3><?php echo $row['state']; ?></h3>
                                                                    <p>City Location <br/><?php echo $row['city']; ?></p>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>     
                                                <div >
                                                    <code>Availability Status:</code> <span class="glyphicon glyphicon-ok-circle"></span><br/>
                                                    <code>Price (full package):</code>  <?php echo " #" . $row['price']; ?><br/>
                                                    <?php if ($row['security'] == "YES") { ?>
                                                        <code>Night Watchmen (Olode):</code>  <span class="glyphicon glyphicon-check" aria-hidden="true"></span><br/>
                                                    <?php } ?>
                                                    <code>Address:</code>    <?php echo " " . $row['address']; ?><br/>
                                                    <code>Description:</code>  <?php echo " " . $row['description']; ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-bottom">
                                                    <h2 class="modal-title">Contact Us Now</h2>
                                                    <form role="form" action="view_all.php" method="post" class="form-horizontal">
                                                        <!--<form role="form" action="assets/contact.php" method="post">-->
                                                        <div class="form-group">
                                                            <input type="text" name="active_fullname" placeholder="Enter your Fullname" class="form-control" id="active_fullname" value="" required>
                                                            <input type="hidden" name="property_code" class="form-control" id="property_code" value="<?php echo $row['property_code']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="m_num" placeholder="Enter your Mobile Number" class="form-control" id="m_num" value="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="e_mail" placeholder="Enter your Email" class="form-control" id="e_mail" value="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="message" placeholder="send us your own property description(optional)" class="contact_message form-control" id="contact_message"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-9">
                                                                <button type="submit" name="submit_now" class="btn" data-toggle="tooltip" title="Contact us now for a quick order">Order Now</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <?php if (empty($row['map_location'])) { ?>
                                                    <div class="map">
                                                        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $row['map_location']; ?>"></iframe><br>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer btn-primary">
                                        For more info, Contact Us: Thompson Olakunle +2347060402221
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <hr>
                <!-- /CONTENT ============-->
                <!-- FOOTER -->
                <footer>
                    <?php mysqli_close($con); ?>
                </footer>
            </div>
            <!-- END FOOTER -->
            <!-- script references -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/spin.js"></script>

            <script>
                //            for tooltips customize
                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
    </body>
</html>