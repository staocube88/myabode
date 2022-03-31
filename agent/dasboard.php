<?php include('header_dashboard.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span12">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left"><h4 style="color:#300;">Welcome To MyAbode Agent Page</h4></div>
										</div>

										<div id='calendar'></div>		
							<!-- block -->
									</div>
										
							
							
						
										</div>
                                </div>
                            </div>
                        </div>
						<?php include('calendar_of_events.php'); ?>
					
                        <!-- /block -->
                    </div>
                </div>
            
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		<?php include('class_calendar_script.php'); ?>
    </body>
</html>