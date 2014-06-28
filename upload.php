<?
error_reporting( error_reporting() & ~E_NOTICE );
$UID=$_COOKIE['UID'];
//if (!$_POST['funct']=="Submit")
//{ header ("Location: /"); }
//print_r($_FILES);
$Image_name=$_FILES['Image']['name'];
$Image=$_FILES['Image']['tmp_name'];

$GDir="/var/www/artwork/".substr($row[0],0,2)."/".$row[0];


$Extension=explode(".",$Image_name);
$Ext=strtolower($Extension[count($Extension)-1]);

if (!($Ext=="txt" or $Ext=="gif" or $Ext=="jpg" or $Ext=="jpeg" or $Ext=="pdf" or $Ext=="swf" or $Ext=="png")) {
?>
<h1>ERROR</h1>
<B>
<p>It appears that you attempted to upload a file with an Unaccepted Extension.</p>
<p>File must be of type GIF/JPG/PNG or it -will not- be accepted.
</b>
<p>
<a href="/">Click Here</a> to return to the upload page.
<?
exit();
}
//print "<pre>";
//print_r($_POST);
//print "<hr>";
//print_r($_FILES);
//print "</pre>";

$GDir="/home/ryan/Dropbox/websites/saucepls/A/".substr(md5($Image_name),2,2);
@mkdir ($GDir,0755,true);  // True parameter will make mkdir do all directories required to get to where it needs to go.

	$Image_name=str_replace('..','.',$Image_name);
	$Image_name=str_replace(';','',$Image_name);
	$Image_name=str_replace('&','',$Image_name);
	$Image_name=str_replace(' ','',$Image_name);
	$Image_Name=htmlspecialchars($Image_name); 
	$extension=explode(".",$Image);

	if ($Image != "none" and file_exists($Image) ) { 
		 copy ("$Image","$GDir/$Image_name");
		 copy ("$Image","/home/ryan/Dropbox/websites/saucepls/ALL/$Image_name");
	}
	?>
<html>
<h1>Saucepls Image Uploader</h1>
<h2>Upload successful;</h2>
<p><a href="/">Click Here</a> to return to the upload page.</p>
Location: <a href="http://saucepls.info/A/<?=substr(md5($Image_name),2,2)?>/<?=$Image_name?>">http://saucepls.info/A/<?=substr(md5($Image_name),2,2)?>/<?=$Image_name?></a>
<br>
<br>
<img src="http://saucepls.info/A/<?=substr(md5($Image_name),2,2)?>/<?=$Image_name?>">
</html>
