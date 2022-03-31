
<?php include('header_dashboard.php')?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									 <a href="add_property.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Property</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Property</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="property.php"><i class="icon-arrow-left"></i> Back</a>
									
									
									
									    <form class="form-horizontal" method="post">
                                         <div class="control-group">
												<label class="control-label" for ="inputEmail">Company:</label>
                                          <div class="controls">
                                            <select name="company_id"  class="chzn-select" required>
                                            <?php
											$query_company = mysql_query("select * from property join  company")or die(mysql_error());
											$row_company = mysql_fetch_array($query_company);
											
											?>
											
                                             	
											<?php
                                            $query = mysql_query("select * from company order by company_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['company_id']; ?>"><?php echo $row['company_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                         <div class="control-group">
												<label class="control-label" for ="inputEmail">Agent:</label>
                                          <div class="controls">
                                            <select name="agent_id"  class="chzn-select" required>
                                             <?php
											$query_agent = mysql_query("select * from property join  agent")or die(mysql_error());
											$row_agent = mysql_fetch_array($query_agent);
											
											?>
											
                                             	
											<?php
											$query = mysql_query("select * from agent order by fullname");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['agent_id']; ?>"><?php echo $row['fullname']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                         <div class="control-group">
												<label class="control-label" for ="inputEmail">Property Type:</label>
                                          <div class="controls">
                                            <select name="proptype_id"  class="chzn-select" required>
                                             	<?php
											$query_proptype = mysql_query("select * from property join  proptype  ")or die(mysql_error());
											$row_proptype = mysql_fetch_array($query_proptype);
											
											?>
											
                                             	<option value="<?php echo $row_proptype['proptype_id']; ?>">
												<?php echo $row_proptype['proptype_name']; ?>
												</option>
											<?php
											$query = mysql_query("select * from proptype order by proptype_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['proptype_id']; ?>"><?php echo $row['proptype_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <?php
									$query = mysql_query("select * from property  where property_id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Property Code</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['property_code']; ?>" name="property_code" id="inputEmail" placeholder="Property Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Property Title</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['property_title']; ?>" class="span8" name="property_title" id="inputPassword" placeholder="Property Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['price']; ?>" class="span2" name="price" id="inputPassword"  required> 
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Security</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['security']; ?>" class="span3" name="location" id="inputPassword" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Address</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['address']; ?>" class="span3" name="location" id="inputPassword" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Map Location</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['location']; ?>" class="span3" name="location" id="inputPassword" required>
											</div>
										</div>
                                        
                                          <div class="control-group">
											<label class="control-label" for="inputPassword">Pictures</label>
											<div class="controls">
											<input type="file" value="<?php echo $row['caption1']; ?>" class="span2" name="caption" id="inputPassword" required>
											<input type="file" value="<?php echo $row['caption2']; ?>" class="span2" name="caption" id="inputPassword" required>
											<input type="file" value="<?php echo $row['caption3']; ?>" class="span2" name="caption" id="inputPassword" required>
											<input type="file" value="<?php echo $row['caption4']; ?>" class="span2" name="caption" id="inputPassword" required>
											<input type="file" value="<?php echo $row['caption5']; ?>" class="span2" name="caption" id="inputPassword" required>
											
											</div>
										</div>
                                        
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full">
													<?php echo $row['description']; ?>
													</textarea>
											</div>
										</div>
                                        
                                
                                        			
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$property_code = $_POST['property_code'];
										$property_title = $_POST['property_title'];
										$price = $_POST['price'];
										$location = $_POST['location'];
										$description = $_POST['description'];
										$caption = $_POST['caption'];
										$proptype_id = $_POST['proptype_id'];
										$agent_id = $_POST['agent_id'];
										$company_id = $_POST['company_id'];
										
										
									
										mysql_query("update property  set property_code = '$property_code' ,
																		property_title = '$property_title',
																		price  = '$price',
																		location = '$location',
																		description = '$description',
																		caption = '$caption',
																		company_id = '$company_id',
																		agent_id = '$agent_id',
																		proptype_id = '$proptype_id'
																		where property_id = '$get_id' ")or die(mysql_error());
																		
										mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Property $property_code')")or die(mysql_error());
										
										?>
										<script>
										window.location = "property.php";
										</script>
										<?php
										}
										
										
										?>
									
								
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