<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('db.php');
?>


<?php
if(isset($_POST['content1']))
{

$content1=mysql_real_escape_string($_POST['content1']);
$content2=mysql_real_escape_string($_POST['content2']);
$content3=mysql_real_escape_string($_POST['content3']);
$content4=mysql_real_escape_string($_POST['content4']);
$content5=mysql_real_escape_string($_POST['content5']);
$content6=mysql_real_escape_string($_POST['content6']);
$content7=mysql_real_escape_string($_POST['content7']);


mysql_query("insert into teams(Cname,mobno,email,Address,Teamname,Tournament,Teammembers) values ('$content1','$content3','$content2','$content6','$content5','$content4','$content7')");
echo "<font style='color:#0000FF;'>Team Registration successfully</font><br><br><br>";

}
?>