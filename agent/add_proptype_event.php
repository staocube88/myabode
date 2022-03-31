 
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												<th>Client Name</th>
												<th>Client Phone</th>
												<th>Meeting Date</th>
												<th>Due Date</th>
												
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select *FROM event  where agent_proptype_id ='' ")or die(mysql_error());
										while($row = mysql_fetch_array($query))
										{
									?>
							

					
                              
										<tr>

                                         <td><?php echo $row['event_title']; ?></td>
                                         <td ><?php echo $row['contact']; ?></td>
                                         <td><?php echo $row['date_start']; ?></td>
                                         <td><?php echo $row['date_end']; ?></td>
                                        

                               
                                </tr>
										
                         
										<?php } ?>
						   
                              
										</tbody>
									</table>
                               