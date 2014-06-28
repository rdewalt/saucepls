<html>
<script>
function DoForm(){
 if (document.theForm.MyButton.value=="Upload File")
	{ document.theForm.MyButton.value="Processing..."; return true;}
	else
	return false;
}
</script>
<h1>Saucepls Free Image Upload Thing...</h1>
<P>Yes, its back, re-wrote it from scratch. Slightly Different. Still Free, yet donations accepted.
<p>File must be of type GIF/JPG/PNG/SWF/MP3 or it -will not- be accepted.  MAXIMUM single file size upload is 10 meg.

<form name="theForm" action="upload.php" method="post" onSubmit="return DoForm();" enctype="multipart/form-data">
<table>
<tr><td align=right valign=top>File:</td>
<td align=left valign=top>
<input type=hidden name="MAX_FILE_SIZE" value="<?=1024*1024*1024*20?>">
<input type=hidden name="funct" value="Submit">
<input type="file" name="Image">
</td></tr>
<tr><td colspan="2">Click this button only once, results <u>may</u> take some time to process.</font></td></tr>
<tr><td></td><td valign=top align=left>
<input type=submit value="Upload File" name="MyButton"></td></tr>
</table>
</form>
</html>
