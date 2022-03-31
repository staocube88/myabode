<div class="span3" id="sidebar">
	<img id="avatar" src="../admin/<?php echo $row['photo']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="agent.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-upload"></i>&nbsp;Add Agent</a></li>
				<li class=""><a href="add_property.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-upload"></i>&nbsp;Add Property</a></li>
				<li class=""><a href="view_property.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;View Property</a></li>
				<li class=""><a href="orderedprop.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Ordered Property</a></li>
				<li class="active"><a href="myevents.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp; My Appointment</a></li>
		</ul>
</div>