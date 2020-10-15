<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
$objDB = mysql_select_db("mydatabase");
$strSQL = "SELECT * FROM gallery";
$objQuery = mysql_query($strSQL);
echo"<table border=\"1\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";
$intRows = 0;
while($objResult = mysql_fetch_array($objQuery))
{
echo "<td>";
$intRows++;
?>
<center>
<img src="thaicreate/<?php echo $objResult["Picture"];?>"><br>
<?php echo $objResult["GalleryName"];?>
<br>
</center>
<?php
echo"</td>";
if(($intRows)%2==0)
{
echo"</tr>";
}
}
echo"</tr></table>";
?>
</body>
</html>
<?php
mysql_close($objConnect);
?>