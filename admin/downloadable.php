<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('downloadable_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Downloadable File Uploaded List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>Description</th>
												<th>Upload By</th>
												<th>Class</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM files LEFT JOIN agent ON agent.agent_id = files.agent_id 
																				  LEFT JOIN agent_proptype ON agent_proptype.agent_proptype_id = files.proptype_id 
																				  INNER JOIN proptype ON proptype.proptype_id = agent_proptype.proptype_id  ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
									?>
										<tr>
										 <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                      
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                         <td><?php echo $row['proptype_name']; ?></td>

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
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