   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Agent</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span7">
								<form method="post">				
										
										  <div class="control-group">
											<label>Company</label>
                                          <div class="controls">
                                            <select name="company"  class=""  required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from company order by companyname");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['companyname']; ?>"><?php echo $row['companyname']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="fullname" id="focusedInput" type="text" placeholder = "Fullname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="address" id="focusedInput" type="text" placeholder = "Address">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                        
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email">
                                          </div>
                                        </div>
										
                              <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="phoneno" id="focusedInput" type="number" placeholder = "Phone Number">
                                          </div>
                                        </div>          
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="photo" id="fileInput" type="file" required>
                                          </div>
                                        </div>
									
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					    <?php
                            if (isset($_POST['save'])) {
								$companyname = $_POST['companyname'];
								$username = $_POST['email'];
								$password = $_POST['phoneno'];
                                $fullname = $_POST['fullname'];
                                $address = $_POST['address'];
								$email = $_POST['email'];
								$phoneno = $_POST['phoneno'];
								$photo = $_POST['photo'];
                                $company_id = $_POST['company_id'];
								$agent_stat=$_POST['agent_stat'];
								$about = $_POST['about'];
								
								$query = mysql_query("select * from agent where companyname = '$companyname' and fullname = '$fullname' and email = '$email' and phoneno ='$phoneno'  and photo = '$photo' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Agent Already Exist');
								</script>
								<?php
								}else
								{

                                mysql_query("insert into agent(companyname, username, password, fullname, address, email, phoneno,company_id,photo,agent_stat) values ('$companyname','$username', '$password', '$fullname', '$address', '$email','$phoneno','$company_id', '$photo', '$agent_stat' 'Deactivated')") or die(mysql_error()); ?>
								<script>
							 	window.location = "agent.php"; 
								</script>
								<?php   }
								}
								 ?>
						 
						 