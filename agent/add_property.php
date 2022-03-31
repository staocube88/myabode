<?php include('header_dashboard.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left"><h5 style="color:#003;">Add Property</h5>
										<marquee><h4 style="color:navy;">Make sure all the Fields are filled before submitting to avoid loss of Info </h4></marquee>
										</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="property.php"><i class="icon-arrow-left"></i> Back</a>
									    <form class="form-horizontal" method="post" enctype="multipart/form-data">
										
                                        
                                         <div class="control-group">
											<label class="control-label" for ="inputEmail">Company:</label>
                                          <div class="controls">
                                            <select name="company_name"  class="control-label" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select companyname from agent where agent_id='$session_id'");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['companyname']; ?>"><?php echo $row['companyname']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                         <div class="control-group">
												<label class="control-label" for ="inputEmail">Agent:</label>
                                          <div class="controls">
                                            <select name="agent_name"  class="control-label" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select fullname from agent where agent_id='$session_id'  ");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['fullname']; ?>"><?php echo $row['fullname']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        
                                       
                                        <div class="control-group">
											<label class="control-label" for ="inputEmail">Property Type:</label>
                                          <div class="controls">
                                            <select name="property_title"  class="control-label" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from proptype order by proptype_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['proptype_name']; ?>"><?php echo $row['proptype_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputEmail">Property Code</label>
											<div class="controls">
											<input type="text" name="property_code" id="inputEmail" placeholder="Property Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for ="inputEmail">Property Title:</label>
                                          <div class="controls">
                                            <select name="proptype"  class="control-label" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from proptype order by proptype_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['proptype_name']; ?>"><?php echo $row['proptype_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Price</label>
											<div class="controls">
											<input type="text" class="span2" name="price" id="inputPassword" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Security</label>
											<div class="controls">
											Yes<input type="radio" class="span2" name="security" id="inputPassword" value="Yes" required>
											NO<input type="radio" class="span2" name="security" id="inputPassword" value="NO" required>
										</div><br>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Address</label>
											<div class="controls">
											<input type="text" class="span3" name="address" id="inputPassword"  required>
											</div>
										</div>
										
										 <div class="control-group">
											<label class="control-label" for="inputEmail">State</label>
											<div class="controls">
											<select name="state" class="control-label" required>
											<option></option> <option> Abia </option> <option> Adamawa </option> <option> Anambra </option> <option> Bauchi </option>
											<option></option> <option> Bayelsa </option> <option> Benue </option> <option> Borno </option> <option> Cross-River </option>
											<option></option> <option> Delta </option> <option> Ebonyi </option> <option> Edo </option> <option> Ekiti </option>
											<option></option> <option> Enugu </option> <option> Gombe </option> <option> Imo </option> <option> Jigawa </option>
											<option></option> <option> Kaduna </option> <option> Kano </option> <option> Katsina </option> <option> Kebbi </option>
											<option></option> <option> Kogi </option> <option> Kwara </option> <option> Lagos </option> <option> Nassaarawa </option>
											<option></option> <option> Niger </option> <option> Ogun </option> <option> Ondo </option> <option> Osun </option>
											<option></option> <option> Oyo </option> <option> Plateau </option> <option> Rivers </option> <option> Sokoto </option>
											<option></option> <option> Taraba </option> <option> Yobe </option> <option> Zamfara </option> <option> Fct </option>
											</select>
											</div>
										</div>
										
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">City</label>
											<div class="controls">
											<input type="text" class="span3" name="city" id="inputPassword"  required>
											</div>
										</div>
										
									
										
										<div class="control-group">
										<label class="control-label" for="inputPassword"> Map Location</label>
										<div class="controls">
										<textarea name="map_location" style="max-height:50px; max-width:250px; min-height:50px; min-width:250px"></textarea>
										</div>
										
										</div>
								
                                									<div class="control-group">
											<label class="control-label" for="inputPassword">Pictures</label>
											<div class="controls">
											<input type="file" class="span3" name="caption1" id="inputPassword" required><br/>
											<input type="file" class="span3" name="caption2" id="inputPassword" required><br/>
											<input type="file" class="span3" name="caption3" id="inputPassword" required><br/>
											<input type="file" class="span3" name="caption4" id="inputPassword" required><br/>
											<input type="file" class="span3" name="caption5" id="inputPassword" required><br/>
											</div>
										</div>
                                
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full"></textarea>
											</div>
										</div>
												
													
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>
										
										<?php
										
										
										
										
										
										
										$status="Deactivated";
										if (isset($_POST['save'])){
										$property_code = $_POST['property_code'];
										$property_title = $_POST['property_title'];
										$address = $_POST['address'];
										$state = $_POST['state'];
										$city = $_POST['city'];
										$location = $_POST['map_location'];
										$description = $_POST['description'];
										$price = $_POST['price'];
										$company_name= $_POST['company_name'];
										$agent_name = $_POST['agent_name'];
										$property_type = $_POST['proptype'];
										$security = $_POST['security'];
										// BHie Jay baba....
										include('image.php');
										
										
										
$query = mysql_query("select * from property where property_code = '$property_code' and property_title='$property_title' ")or die(mysql_error());
$count = mysql_num_rows($query);
										
										//second image2 Bhie Jay Baba Nla....
										

										if ($count > 0){ ?>
										<script>
										alert('Property Already Exist');
										</script>
										<?php
										}else{
mysql_query("insert into property (agent_id,property_code,property_title,address, state, city, map_location,description,price,company_name,agent_name,property_type,security,date,caption1,caption2,caption3,caption4,caption5,status) values('$session_id','$property_code','$property_title','$address','$state','$city','$location','$description','$price','$company_name','$agent_name','$property_type','$security',now(),'$location1','$location2','$location3','$location4','$location5','$status')")or die(mysql_error());
										
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add property $property_code')")or die(mysql_error());
										
										
										?>
										<script>
										window.location = "view_property.php";
										</script>
										<?php
										}
										}
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>