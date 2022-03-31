<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('proptypename_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_proptypename.php'); ?>		   			
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
									<form action="delete_proptypename.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#proptypename_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>		<th></th>
                                          <th>S/N</th>
													<th>Property Type Name</th>
													<th>Edit</th>													
										   </tr>
										</thead>
										<tbody>
										<?php
										$proptype_query = mysql_query("select * from proptypename")or die(mysql_error());
										while($proptype_row = mysql_fetch_array($proptype_query)){
										$id = $proptype_row['proptypename_id'];
										 $proptype = $proptype_row['proptypename_id'];
										?>
												
										<tr>
											<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
                                            <td><?php echo $proptype_row['proptypename_id']; ?></td>
											<td><?php echo $proptype_row['proptypename']; ?></td>
											<td width="40"><a href="edit_proptypename.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
                                     
                               
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