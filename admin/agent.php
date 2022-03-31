<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('agent_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_agent.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Agent List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_agent.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#agent_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										    <tr>
                                    <th></th>
									<th>Photo</th>
                                    <th>Company's Name</th>
								    <th>Agent Name</th>
                                   	<th>Phone Number</th>
                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $agent_query = mysql_query("select * from agent") or die(mysql_error());
                                    while ($row = mysql_fetch_array($agent_query)) {
                                    $id = $row['agent_id'];
                                    $agent_stat = $row['agent_stat'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                               <td width="10"><img class="img-circle" src="<?php echo $row['photo']; ?>" height="50" width="30"></td> 
                               <td><?php echo $row['companyname']; ?></td>
                                  <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['phoneno']; ?></td>
                               
									<td width="10"><a href="edit_agent.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>
									<?php if ($agent_stat == 'Activated' )
									{ ?>
									<td width="5"><a href="de_activate_agent.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>
									<?php }
									else if ($agent_stat == 'Deactivated')
									{ ?>
									<td width="5"><a href="activate_agent.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivated</a></td>				
									<?php 
									}
									else { ?>
									<td width="5"><a href="edit_agent.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
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