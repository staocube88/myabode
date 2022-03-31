<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Property Column</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_agent = mysql_query("select * from agent where agent_stat = 'Activated' ")or die(mysql_error());
								$count_reg_agent = mysql_num_rows($query_reg_agent);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_agent; ?>"><?php echo $count_reg_agent; ?></div>
                                    <div class="chart-bottom-heading"><strong>Accredited Agents</strong>

                                    </div>
                                </div>
											<?php 
								$query_reg_company = mysql_query("select * from company where company_stat = 'Activated'")or die(mysql_error());
								$count_reg_company = mysql_num_rows($query_reg_company);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_company; ?>"><?php echo $count_reg_company; ?></div>
                                    <div class="chart-bottom-heading"><strong>Accredited Companies</strong>

                                    </div>
                                </div>
                                
                                	<?php 
								$query_reg_company = mysql_query("select * from company ")or die(mysql_error());
								$count_reg_company = mysql_num_rows($query_reg_company);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_company; ?>"><?php echo $count_reg_company; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Companies</strong>

                                    </div>
                                </div>
                                
								<?php 
								$query_agent = mysql_query("select * from agent")or die(mysql_error());
								$count_agent = mysql_num_rows($query_agent);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_agent; ?>"><?php echo $count_agent ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Agents</strong>

                                    </div>
                                </div>
				
									<?php 
								$query_proptype = mysql_query("select * from property where property_title = '1 Room Apartment' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>1 Room Apartment</strong>

                                    </div>
                                </div>
								
                                <?php 
								$query_proptype = mysql_query("select * from property where property_title = '2 Rooms Apartment' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>2 Rooms Apartment</strong>

                                    </div>
                                </div>
								
                                <?php 
								$query_proptype = mysql_query("select * from property where property_title = 'Room & Parlour Self-Con Apartment' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>Room & Parlour Self-Con</strong>

                                    </div>
                                </div>
								
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '1 Room Self-Con Apartments' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>1 Room Self-Con </strong>

                                    </div>
                                </div>
								
                                
                                <?php 
								$query_proptype = mysql_query("select * from property where property_title = '2 Bedroom Flats' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>2 Bedroom Flat </strong>

                                    </div>
                                </div>
                                
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '3 Bedroom Flats' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>3 Bedroom Flats</strong>

                                    </div>
                                </div>
                                
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '4 Bedroom Flats' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>4 Bedroom Flats</strong>

                                    </div>
                                </div>
                                
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '3 Bedroom Duplex' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								<div class="right">
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>3 Bedroom Duplex</strong>

                                    </div>
                                </div>
                                </div>
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '4 Bedroom Duplex' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>4 Bedroom Duplex</strong>

                                    </div>
                                </div>
                                
                                 <?php 
								$query_proptype = mysql_query("select * from property where property_title = '5 Bedroom Duplex' ")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>5 Bedroom Duplex</strong>

                                    </div>
                                </div>
                                
                                <?php 
								$query_proptype = mysql_query("select * from property where property_type = 'Office'")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>Offices</strong>

                                    </div>
                                </div>
								
                                <?php 
								$query_proptype = mysql_query("select * from property where property_type = 'Lands'")or die(mysql_error());
								$count_proptype = mysql_num_rows($query_proptype);
								?>
								<div class="right">
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_proptype; ?>"><?php echo $count_proptype; ?></div>
                                    <div class="chart-bottom-heading"><strong>Lands</strong>

                                    </div>
                                </div>
									</div>				
								
										<?php 
								$query_file = mysql_query("select distinct property_id from customer_subscribed")or die(mysql_error());
								$count_file = mysql_num_rows($query_file);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_file; ?>"><?php echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Enquired Properties</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_property = mysql_query("select * from property")or die(mysql_error());
								$count_property = mysql_num_rows($query_property);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_property; ?>"><?php echo $count_property; ?></div>
                                    <div class="chart-bottom-heading"><strong>Properties</strong>

                                    </div>
                                </div>
						
						
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>