<html>
<head>
    <title>Webpage in PHP</title>
</head>
<body>
 <div style="line-height:40px;">
 <div>
  <form action="adduser.php">
	Author<br><input type="text" name="author" maxlength="20" size="25" padding: 5px;></form>
	Book<br><input type="text" name="book" maxlength="20" size="25"><br>
	Edition<br><input type="text" name="edition" maxlength="20" size="25"></form><br>
	Number of pages<br><input type="text" name="number of pages" maxlength="20" size="25"></form><br>
	File size<br><input type="text" name="file_size" maxlength="20" size="25"></form><br>
	URL<br><input type="text" name="url" maxlength="20" size="25"><br>
		<input type="submit" value="Submit">
	</form><br>
	<form enctype="multipart/form-date" action=savefile.php"method="post">
	<input type="hidden name=MAX_FILE_SIZE" value="1000"><br>
	Send this file: <input name="userfile" type="file"><br>
	<input type="submit" Value=Send File">
	</form>
	</div>
<?php
echo'<b>File was save on server name</b>'.
	$_FILES['userfile']['tmp_name'].'<br>';
echo'<b>On your mashin he names:</b>'.
	$_FILES['userfile']['name'].'<br>';
echo'<b>File size is:</b>'.
	$_FILES['userfile']['size'].'<br>';
echo'<b>Mime type of file:</b>'.
	$_FILES['userfile']['type'].'<br>';
move_uploaded_file($_FILES['userfile']['tmp_name'],"images/".$_FILES['userfile']['name']);
?>
</body>
<html>