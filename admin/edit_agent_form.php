   <div class="row-fluid">
       <a href="agent.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Agent</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Agent</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
									<?php
									$query = mysql_query("select * from agent where agent_id = '$get_id' ")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
										
										  <div class="control-group">
											<label>Company:</label>
                                          <div class="controls">
                                            <select name="agent"  class="chzn-select"required>
											<?php
											$query_agent = mysql_query("select * from agent join  company")or die(mysql_error());
											$row_agent = mysql_fetch_array($query_agent);
											
											?>
											
                                             	<option value="<?php echo $row_agent['company_id']; ?>">
												<?php echo $row_agent['company_name']; ?>
												</option>
											<?php
											$company = mysql_query("select * from company order by company_name");
											while($company_row = mysql_fetch_array($company)){
											
											?>
											<option value="<?php echo $company_row['company_id']; ?>"><?php echo $company_row['company_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fullname']; ?>" name="fullname" id="focusedInput" type="text" placeholder = "Fullname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['address']; ?>" name="address" id="focusedInput" type="text" placeholder = "Address">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                        
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="email" placeholder = "Email">
                                          </div>
                                        </div>
										
                              <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['phoneno']; ?>" name="phoneno" id="focusedInput" type="number" placeholder = "Phone Number">
										                                          </div>
                                     </div>
				 <!--  	<td width="40"><img class="img-rounded" src="" height="50" width="50"></td> 
                                   
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										
										-->
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
				   <?php
                            if (isset($_POST['update'])) {
                       
                                $fullname = $_POST['fullname'];
                                $address = $_POST['address'];
								$email =  $_POST['email'];
								$phoneno = $_POST['phoneno'];
                                $company_id = $_POST['company'];
								
								
								$query = mysql_query("select * from agent where fullname = '$fullname' and address = '$address' and email ='$email' and phoneno = '$phoneno' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 1){ ?>
								<script>
								alert('Agents Data Already Exist');
								</script>
								<?php
								}else{
								
								mysql_query("update agent set fullname = '$fullname' , address = '$address', email = '$email', phoneno = '$phoneno' , company_id = '$company_id' where agent_id = '$get_id' ")or die(mysql_error());	
								
								?>
								<script>
							 	window.location = "agent.php"; 
								</script>
								<?php   }} ?>
						 
						 