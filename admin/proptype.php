<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('proptype_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_proptype.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Property Type List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_proptype.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#proptype_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>		
                                          <th></th>
                                        
													<th>Property Type Name</th>
													<th>Property Title</th>
                                                    <th>Edit</th>
													
										   </tr>
										</thead>
										<tbody>
										<?php
										$proptype_query = mysql_query("select * from proptype")or die(mysql_error());
										while($proptype_row = mysql_fetch_array($proptype_query)){
										$id = $proptype_row['proptype_id'];
										$proptypename = $proptype_row['proptype_name'];
										?>
										<tr>
										<td width="5">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>    		
									     	<td><?php echo $proptypename  //echo $proptype_row['proptypename_id']; ?></td>
										<td><?php echo $proptype_row['property_title']; ?></td>
                                        
											<td width="40"><a href="edit_proptype.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
                                     
                               
										</tr>
										<?php } ?>
                               
                               
										</tbody>
									</table>
									</form>
                                </div>
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