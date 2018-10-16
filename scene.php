<!DOCTYPE html>
<html>
<head>
<title>Murder scene</title>
<link rel="stylesheet" type="text/css" href="scene.css">
</head>
<body>
<img src="MurderGameRoom.jpg" alt="Murder Scene" usemap="#murder_map">
<div id="main">
<p>Use the story to find clues in the room.</p>
<form action="final1.html" method="post">
<label class="heading">Select the clues you found and choose the killer:<br /><br /></label>
<input type="checkbox" name="check_list[]" value="Poison bottle"><label>Poison bottle<br /></label>
<input type="checkbox" name="check_list[]" value="Lipstick"><label>Lipstick<br /></label>
<input type="checkbox" name="check_list[]" value="Footsteps"><label>Footsteps<br /></label>
<input type="checkbox" name="check_list[]" value="Cellphone"><label>Cellphone<br /></label>
<input type="checkbox" name="check_list[]" value="Camera"><label>Camera<br /></label>
<input type="checkbox" name="check_list[]" value="Suicide note"><label>Suicide note<br /><br /></label>
</div>
<input type="submit" name="submit" Value="The Gardener"/>
</form>
<form action="final.html" method="post">
<input type="submit" name="submit" Value="The Wife"/>
</form>
<?php

if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
	$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
echo "<p>".$selected ."</p>";
}
}
else{
echo "<b>Please Select Atleast One Clue.</b>";
}
}
?>
</body>
</html>
