<script>
        $(function() {
            // Easy pie charts
            var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
     
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
			editable: true,
			// US Holidays
				 events:
		[
		<?php $event_query = mysql_query("select * from event where agent_proptype_id = '' ")or die(mysql_error());
			  while($event_row = mysql_fetch_array($event_query)){
		?>
        {
            Description  : '<?php echo $event_row['event_title']; ?> ',
			Contact Number  : '<?php echo $event_row['contact']; ?> ',
            Requested  : '<?php echo $event_row['date_start']; ?>',
            Ultimatum   : '<?php echo $event_row['date_end']; ?>'
        },
		<?php } ?>
		]
			
			});
        });


        </script>
				