 <?php
 include('../admin/dbcon.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../admin/uploads/" . $_FILES["image"]["name"]);
                                $photo = "uploads/" . $_FILES["image"]["name"];
								
								mysql_query("update  agent set photo = '$photo' where agent_id  = '$session_id' ")or die(mysql_error());
								
								?>
 
								<script>
								window.location = "dasboard.php";  
								</script>

                       <?php     }  ?>