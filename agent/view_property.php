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
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Property Uploaded List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												<th>Property Name</th>
												<th>Description</th>
												<th>Date Upload</th>
												<th>Upload By</th>
												<th>Address</th>
												<th>State</th>
												<th>City</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select property_title, description, date, agent_name, address, state, city  FROM property  where agent_id='$session_id' ")or die(mysql_error());
										while($row = mysql_fetch_array($query))
										{
									?>
							

					
                              
										<tr>

                                         <td><?php echo $row['property_title']; ?></td>
                                         <td width="300px;"><?php echo $row['description']; ?></td>
                                         <td><?php echo $row['date']; ?></td>
                                         <td><?php echo $row['agent_name']; ?></td>
                                         <td><?php echo $row['address']; ?></td>
                                         <td><?php echo $row['state']; ?></td>
                                         <td><?php echo $row['city']; ?></td>

                               
                                </tr>
										
                         
										<?php } ?>
						   
                              
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>