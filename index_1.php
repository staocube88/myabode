<?php
//Start session
//session_start();

include './view_all.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Developed by Olakunle Thompson (Gasper)
 * 2347060402221
 * facebbok.com/gasper20
 * December 31st 2015
 */
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


        <!-- Custom styles for this template -->
        <!--<link href="css/jumbotron-narrow.css" rel="stylesheet">-->

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="css/4-col-portfolio.css" rel="stylesheet">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body class="loadgif">

        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">myAbode</a>

            </div><!-- /.container -->
        </div><!-- /.navbar -->

        <!-- HEADER 
        =================================-->

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
        <!-- /header container-->

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
                                <p> <a href="#" class="btn btn-lg btn-warning center-block">Student Homes</a></p>
                                <p>  <a href="#" class="btn btn-lg btn-warning center-block">Lands</a></p>
                                <p>  <a href="#" class="btn btn-lg btn-warning center-block">Offices</a></p>
                            </div>
                        </div>


                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Search Filter</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <!--<fieldset>-->
                                    <legend>Choose feature(s) to search for apartment</legend>

                                    <div class="col-lg-12">
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                        <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
                                    </div>

                                    <!--</fieldset>-->
                                    <legend></legend>
                                    <fieldset>
                                        <legend>Choose Location to search for apartment</legend>

                                        <div class="col-lg-12">
                                            <input type="text" name="loca"  class="well well-sm text-justify text-info" placeholder="Enter Location" />
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="walkincloset">Walk in</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="storage">storage</div>
                                            <div class="col-sm-6 portfolio-item  thumbnail"><input type="checkbox" name="feature[]" value="availability">availability</div>
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
                                        <legend>Select Price(s) to search for apartment</legend>
                                        <div class="col-lg-12"><input type="text" name="loca"  class="well well-sm text-justify text-info" placeholder="Enter Location" /></div>
                                    </fieldset>
                                    <legend></legend>
                                    <button type="submit" name="submit_Search" class="btn btn-lg btn-primary btn-block" data-toggle="tooltip" title="click to search">Search</button>

                                </form>
                            </div>
                        </div>
                        <p>  <a href="#" class="btn btn-lg btn-warning">Recent</a>
                            <a href="#" class="btn btn-lg btn-warning">Most Viewed</a></p>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">About Complanet Technology</h3>
                            </div>
                            <div class="panel-body">

                                <div class="well">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                                </div>
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
                    ?>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                    <div class="col-sm-3 portfolio-item  thumbnail">
                        <a href="#">
                            <img   class="img-responsive " src="img/1.JPG" alt="">
                        </a> <div class="caption btn-success btn-sm">
                            <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                        </div>
                    </div>
                </div>
                <!--End Showing Recent Houses-->


                <!-- Modal Recent-->
                <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header btn-success">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">MyAbode Details</h4>
                            </div>
                            <div class="modal-body alert-success">
                                <div class="row">
                                    <div class="col-sm-6 well">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <!--                                                <ol class="carousel-indicators">
                                                                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                                                                            </ol>-->

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="img/1.JPG" alt="Chania">
                                                    <div class="carousel-caption">
                                                        <h3>Baba Villa</h3>
                                                        <p>Category:A room suite.<br/>Qty:1-4 students</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="img/1.JPG" alt="Chania">
                                                    <div class="carousel-caption">
                                                        <h3>Baba Villa</h3>
                                                        <p>Price: #40,000</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="img/1.JPG" alt="Flower">
                                                    <div class="carousel-caption">
                                                        <h3>Baba Villa</h3>
                                                        <p>Tap and Well Water Available</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="img/1.JPG" alt="Flower">
                                                    <div class="carousel-caption">
                                                        <h3>Baba Villa</h3>
                                                        <p>24hrs Light</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Left and right controls carousel-linked-nav pagination-->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>     
                                        <div >
                                            Availability Status: <span class="glyphicon glyphicon-ok-circle"></span><br/>
                                            Address:    Kuto, Abeokuta.<br/>
                                            Price/month:  #2,000<br/>
                                            Price (full package):  #40,000<br/>
                                            Tap Water:  <span class="glyphicon glyphicon-check" aria-hidden="true"></span><br/>
                                            Light Fee:  #500/mnth
                                            Night Watcher (Olode):  <span class="glyphicon glyphicon-check" aria-hidden="true"></span><br/>
                                            Availability Status: <span class="glyphicon glyphicon-ok-circle"></span><br/>
                                            Address:    Kuto, Abeokuta.<br/>
                                            Price/month:  #2,000<br/>
                                            Price (full package):  #40,000<br/>
                                            Tap Water:  <span class="glyphicon glyphicon-check" aria-hidden="true"></span><br/>
                                            Light Fee:  #500/mnth
                                            Night Watcher (Olode):  <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                                            <!--<small class="btn btn-danger">Note: Online payment is not enabled on this site yet, beware of fraud <br/>site.Use the form above to make a pre-order.<br/>Regards from Complanet Team.</small>-->
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-bottom">
                                            <h2 class="modal-title">Contact Us Now</h2>
                                            <form role="form" action="view_all.php" method="post" class="form-horizontal">
                                                <!--<form role="form" action="assets/contact.php" method="post">-->
                                                <div class="form-group">
                                                    <input type="text" name="active_fullname" placeholder="Enter your Fullname" class="form-control" id="active_fullname" value="" required>
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
                                        <div class="map">
                                            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br>
    <!--                                            <small>
                                                <a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="	color: #8B5D3E;;text-align:left;font-size:12px">View Larger Map</a>
                                            </small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer btn-success">
                                For more info, Call Agent: Thompson Olakunle +2347060402221
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Recent-->

                <!--            <hr>
                            <div class="row">
                                <div class="col-sm-12"><div class="well"><p>Most Viewed</p></div></div>
                            </div>-->
                <!--Showing Most Viewed Houses-->
                <!--            <div class="row">
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 portfolio-item  thumbnail">
                                    <a href="#">
                                        <img   class="img-responsive " src="img/1.JPG" alt="">
                                    </a> <div class="caption btn-success btn-sm">
                                        <p>Address: Kuto,Abeokuta<br/>Contact:  07060402221<br/>Price (full package):  #40,000</p>                  
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">More Details</button>
                                    </div>
                                </div>
                            </div>-->
                <!--End Showing Most Viewed Houses-->
                <!--</div>-->
            </div>
            <hr>
            <!-- /CONTENT ============-->
            <!-- FOOTER -->
            <footer>

            </footer>
        </div>
        <!-- END FOOTER -->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            //            for tooltips customize
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>