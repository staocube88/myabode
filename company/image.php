<?php
$image1 = addcslashes(file_get_contents($_FILES['caption1']['tmp_name']));
$image1_name = addcslashes($_FILES['caption1']['name']);
$image1_size = getimagesize($_FILES['caption1']['tmp_name']);


$image2 = addcslashes(file_get_contents($_FILES['caption2']['tmp_name']));
$image2_name = addcslashes($_FILES['caption2']['name']);
$image2_size = getimagesize($_FILES['caption2']['tmp_name']);



$image3 = addcslashes(file_get_contents($_FILES['caption3']['tmp_name']));
$image3_name = addcslashes($_FILES['caption3']['name']);
$image3_size = getimagesize($_FILES['caption3']['tmp_name']);



$image4 = addcslashes(file_get_contents($_FILES['caption4']['tmp_name']));
$image4_name = addcslashes($_FILES['caption4']['name']);
$image4_size = getimagesize($_FILES['caption4']['tmp_name']);




$image5 = addcslashes(file_get_contents($_FILES['caption5']['tmp_name']));
$image5_name = addcslashes($_FILES['caption5']['name']);
$image5_size = getimagesize($_FILES['caption5']['tmp_name']);



move_uploaded_file($_FILES["caption1"]["tmp_name"],"saveimages/" . $_FILES["caption1"]["name"]);
$location1 = "saveimages/" . $_FILES["caption1"]["name"];

move_uploaded_file($_FILES["caption2"]["tmp_name"],"saveimages/" . $_FILES["caption2"]["name"]);
$location2 = "saveimages/" . $_FILES["caption2"]["name"];

move_uploaded_file($_FILES["caption3"]["tmp_name"],"saveimages/" . $_FILES["caption3"]["name"]);
$location3 = "saveimages/" . $_FILES["caption3"]["name"];

move_uploaded_file($_FILES["caption4"]["tmp_name"],"saveimages/" . $_FILES["caption4"]["name"]);
$location4 = "saveimages/" . $_FILES["caption4"]["name"];

move_uploaded_file($_FILES["caption5"]["tmp_name"],"saveimages/" . $_FILES["caption5"]["name"]);
$location5 = "saveimages/" . $_FILES["caption5"]["name"];
?>