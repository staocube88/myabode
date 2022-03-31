   <div class="row-fluid">
       <a href="proptype.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Property Type</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Property Type</div>
                            </div>
							
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                        <?php
							$query = mysql_query("select * from proptype where proptype_id = '$get_id'")or die(mysql_error());
							
							$row = mysql_fetch_array($query);
									?>
										<div class="control-group">
											<label>Property Type Name:</label>
                                          <div class="controls">
                                            <select name="proptypename"  class="chzn-select"required>
											<?php
											$query_proptype = mysql_query("select * from proptype join proptypename")or die(mysql_error());
											$row_proptype = mysql_fetch_array($query_proptype);
											
											?>
											
                                             	<option value="<?php echo $row_proptype['proptypename_id']; ?>">
												<?php echo $row_proptype['proptypename']; ?>
												</option>
											<?php
											$proptypename = mysql_query("select * from proptypename order by proptypename");
											while($proptypename_row = mysql_fetch_array($proptypename)){
											
											?>
											<option value="<?php echo $proptypename_row['proptypename_id']; ?>"><?php echo $proptypename_row['proptypename']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
							
                                          <div class="controls">
                                             <input name="property_title" value="<?php echo $row['property_title']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Property Title" required>
                                         
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
if (isset($_POST['insert'])){
$proptypename = $_POST['proptypename'];
$proptypename_id = $_POST['proptypename_id'];
$property_title = $_POST['property_title'];

mysql_query("insert proptype set proptypename = '$proptypename',proptypename_id = '$proptypename_id', property_title = '$property_title' where proptype_id = '$get_id' ")or die(mysql_error());
?>

<script>
window.location = "proptype.php";
</script>
<?php

}
?>