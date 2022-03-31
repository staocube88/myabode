<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('enquiredprop_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Property Enquired List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												<th>Property ID</th>
                                        <th>Property Name</th>
												<th>Enquired By</th>
												<th>Phone No</th>
												<th>Description</th>
												<th>Date Enquired</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM customer_subscribed")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
									?>
							

					
                              
										<tr>

                                         <td><?php  echo $row['property_id']; ?></td>
                                         <td><?php echo $row['Property_name']; ?></td>
                                         <td><?php echo $row['active_fullname']; ?></td>
                                         <td><?php echo $row['m_num']; ?></td>
                                         <td><?php echo $row['message']; ?></td>
 <td><?php echo $row['sub_date']; ?></td>

                               
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