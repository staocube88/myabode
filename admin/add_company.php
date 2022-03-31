   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Company</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="d" type="text" placeholder = "Company Name">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="pi" type="text" placeholder = "Manager In-Charge">
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="ad" type="text" placeholder = "Company Address">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="cu" type="text" placeholder = "Company Username">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="cp" type="text" placeholder = "Company Password">
											</div>
                                        </div>
										
										<label>Logo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
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
if (isset($_POST['save'])){
$pi = $_POST['pi'];
$d = $_POST['d'];
$ad = $_POST['ad'];
$company_stat=$_POST['company_stat'];
$comp_username =$_POST['comp_username'];
$com_pass=$_POST['com_pass'];
$logo =$_POST['logo'];



$query = mysql_query("select * from company where company_name = '$d' and manager = '$pi' and caddress ='$ad' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Company Already Exist');
</script>
<?php
}else{
mysql_query("insert into company (company_name,manager,caddress,comp_username,com_pass,logo,company_stat) values('$d','$pi','$ad','$comp_username','$com_pass','$logo','Deactivated')")or die(mysql_error());
?>
<script>
window.location = "company.php";
</script>
<?php
}
}
?>