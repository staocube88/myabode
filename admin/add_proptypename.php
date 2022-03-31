   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Property Type Name</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="proptypename" class="input focused" id="focusedInput" type="text" placeholder = "Property Type Name" required>
											                             
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
if (isset($_POST['save'])){
$proptypename = $_POST['proptypename'];
$proptypename_id = $_POST['proptypename_id'];


$query = mysql_query("select * from proptypename where proptypename  =  '$proptypename' and proptypename_id = '$proptypename_id ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Property Type Name Already Exist');
</script>
<?php
}else{
mysql_query("insert into proptypename (proptypename, proptypename_id) values('$proptypename', '$proptypename_id')")or die(mysql_error());
mysql_query("insert into proptype(proptypename_id) values($proptypename_enter')")or die(mysql_error());
?>
<script>
window.location = "proptypename.php";
</script>
<?php
}
}
?>