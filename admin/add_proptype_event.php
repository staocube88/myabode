 <form id="signin_client" class="form-signin" method="post">
	<h4 class="form-signin-heading"><i class="icon-plus-sign"></i> Add Appointment</h4>
	    <input type="text" class="input-block-level datepicker" name="date_start" id="date01" placeholder="Requested Date" required/>
	    <input type="text" class="input-block-level datepicker" name="date_end" id="date01" placeholder="Ultimatum Date" required/>
		<input type="text" class="input-block-level" id="username" name="title" placeholder="Description" required/>
		<input type="text" class="input-block-level" id="phone" name="contact" placeholder="Contact Number" required/>
	
	<button id="signin" name="add" class="btn btn-info" type="submit"><i class="icon-save"></i> Save</button>
</form>
<?php
if (isset($_POST['add'])){
	$date_start = $_POST['date_start'];
	$date_end = $_POST['date_end'];
	$title = $_POST['title'];
	$contact = $_POST['contact'];
	
	
	$query = mysql_query("insert into event (date_end,date_start,event_title,contact) values('$date_end','$date_start','$title','$contact')")or die(mysql_error());
	?>
	<script>
	window.location = "calendar_of_events.php";
	</script>
<?php
}
?>

		<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									
		
										<thead>
										        <tr>
												<th>Appointment</th>
												<th>Contact Number</th>
												<th>Date</th>
												<th></th>
												
												</tr>
												
										</thead>
										<tbody>
											
                             
									<?php $event_query = mysql_query("select * from event where agent_proptype_id = '' ")or die(mysql_error());
										while($event_row = mysql_fetch_array($event_query)){
										$id  = $event_row['event_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
									
										 <td><?php echo $event_row['event_title']; ?> </td>
										 <td><?php echo $event_row['contact']; ?> </td>
                                         <td><?php  echo $event_row['date_start']; ?>
											<br>To
											 <?php  echo $event_row['date_end']; ?>
										 </td>                                    
                                         <td width="40">
							
										 <a  class="btn btn-danger" href="delete_event.php<?php echo '?id='.$id; ?>"><i class="icon-remove icon-large"></i></a>
								
										 </td>                                      
									
                             

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
