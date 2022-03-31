<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('company_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_company_form.php'); ?>		   			
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
                                                <th>Company's Address </th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from company")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['company_id'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['company_name']; ?></td>
														<td><?php echo $row['manager']; ?></td>
														<td><?php echo $row['caddress']; ?></td>
                                                
														<td width="30"><a href="edit_company.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                               
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