   <div class="row-fluid">
       <a href="proptypename.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Property Type Name</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Property Type Name</div>
                            </div>
							<?php
							$query = mysql_query("select * from proptypename where proptypename_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="proptypename" value="<?php echo $row['proptypename']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Property Type Name" required>
                                        
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
                    </div><?php
if (isset($_POST['update'])){
$proptypename = $_POST['proptypename'];

mysql_query("update proptypename set proptypename = '$proptypename' where proptypename_id = '$get_id' ")or die(mysql_error());
?>

<script>
window.location = "proptypename.php";
</script>
<?php

}
?>