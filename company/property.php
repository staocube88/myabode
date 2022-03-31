<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('property_sidebar.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_property.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Property</a>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Property List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span5">
									<form action="delete_property.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#property_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
											    <th></th>
                                                 
												<th>Code</th>
												<th>Title</th>
                                                <th>Address</th>
												<th>Description</th>
												<th>Price</th>
												<th>Company Name</th>
												<th>Agent Name</th>
												<th>Type</th>
												<th>Upload Date</th>
												<th>Image</th>
												                                               
												<th></th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$property_query = mysql_query("select * from property")or die(mysql_error());
											while($row = mysql_fetch_array($property_query)){
											$id = $row['property_id'];
											 $status = $row['status'];
											?>
										
											<tr>
													<td width="15">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
                                                    
                                                    <td><?php echo $row['property_code']; ?></td>
													<td><?php echo $row['property_title']; ?></td>
													<td><?php echo $row['address']; ?></td>
													<td><?php echo $row['description']; ?></td>
													<td><?php echo $row['price']; ?></td>
													<td><?php echo $row['company_name']; ?></td>
                                                    <td><?php echo $row['agent_name']; ?></td>
													<td><?php echo $row['property_type']; ?></td>
													<td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['caption1']; ?></td>
																										
													<td width="15"><a href="edit_property.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
													<?php if ($status == 'Activated' ){ ?>
									<td width="5"><a href="de_activatep.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivate</a></td>
									<?php }else if ($status == 'Deactivated'){ ?>
									<td width="5"><a href="activatep.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
									<?php }
									else { ?>
									<td width="5"><a href="edit_property.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
									<?php }
									?>
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
									</form>
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