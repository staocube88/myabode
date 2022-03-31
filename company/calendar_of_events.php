<?php  //include('header.php'); ?>
<?php  //include('session.php'); ?>
    <body>
		<?php // include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php //include('calendar_sidebar.php'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
								        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span8">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">APPOINTMENTS</div>
										</div>
															<div id='calendar'></div>		
										</div>
										
										
												<?php include('add_proptype_event.php'); ?>
											
							<!-- block -->
						
										</div>
                                </div>		
                </div>
            </div>
    
         
        </div>
	<?php //include('script.php'); ?>
	<?php //include('admin_calendar_script.php'); ?>
    </body>

</html>