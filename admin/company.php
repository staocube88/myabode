
<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('company_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_company.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Company List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_company.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#company_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Company</th>
												<th>Manager In-Charge</th>
												<th>Company's Address</th>
												<th>Edit</th>
                                                <th>Status</th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from company")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['company_id'];
                                  					$company_stat = $row['company_stat'];
													
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['company_name']; ?></td>
														<td><?php echo $row['manager']; ?></td>
                                                        <td><?php echo $row['caddress']; ?></td>
												<td width="30"><a href="edit_company.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>
									<?php if ($company_stat == 'Activated' ){ ?>
									<td width="120"><a href="de_activate.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
									<?php }else if ($company_stat == 'Deactivated'){ ?>
									<td width="120"><a href="activate.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivate</a></td>
									<?php }
									else { ?>
									<td width="120"><a href="edit_company.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
									<?php }
									?>
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