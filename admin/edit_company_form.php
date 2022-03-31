   <div class="row-fluid">
    <a href="company.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Company</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Company</div>
                            </div>
							<?php 
							$query = mysql_query("select * from company where company_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['company_name']; ?>" id="focusedInput" name="d" type="text" placeholder = "Company">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['manager']; ?>" id="focusedInput" name="dn" type="text" placeholder = "Manager In-Charge">
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['caddress']; ?>" id="focusedInput" name="ad" type="text" placeholder = "Company's Address">
                                          </div>
                                        </div>
								
										
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
 if (isset($_POST['update'])){
 

 $dn = $_POST['dn'];
 $d = $_POST['d'];
 $ad = $_POST['ad'];
 
 mysql_query("update company set company_name = '$dn' , manager  = '$d', caddress = '$ad' where company_id = '$get_id' ")or die(mysql_error());
 ?>
 <script>
 window.location='company.php'; 
 </script>
 <?php 
 }
 ?>
 