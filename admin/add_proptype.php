   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Property Type</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                          <div class="control-group">
											<label>Property Type Name</label>
                                          <div class="controls">
                                            <select name="proptypename"  class="" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from proptypename order by proptypename");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['proptypename']; ?>"><?php echo $row['proptypename']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                          
                                          
                                          
                                        </div>
											<input name="property_title" class="input focused" id="focusedInput" type="text" placeholder = "Property Title" required>
                                                                                  
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
                    </div><?php
					
					
										$proptype_query = mysql_query("select * from proptype")or die(mysql_error());
										while($proptype_row = mysql_fetch_array($proptype_query)){
										$id = $proptype_row['proptype_name'];
										



if (isset($_POST['save'])){
$proptypename = $_POST['proptypename'];
$property_title= $_POST['property_title'];
$proptypename_id = $_POST['proptypename_id'];

$query = mysql_query("select * from proptype where proptypename  =  '$proptypename' and  property_title ='$property_title' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Property Type Already Exist');
</script>
<?php
}else{
mysql_query("insert into proptype (proptypename_id,proptypename, property_title) values('$proptypename_id','$proptypename','$property_title')")or die(mysql_error());

?>
<script>
window.location = "proptype.php";
</script>
<?php
}
}
										}
?>

					

