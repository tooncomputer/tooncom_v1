<?
session_start();
include("config.php");
if($_POST[check]!=""){
$sql=mysql_query("select * from  login  where user='$_POST[user]' and pass='$_POST[pass]' ");
$fetch=mysql_fetch_array($sql);
if ($fetch[user]!= ""){
 $_SESSION['user'] = "$fetch[user]";
echo"<META HTTP-EQUIV=Refresh Content=0;URL='menu_sale.php' >";exit();

 }
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ทูนคอมพิวเตอร์</title>
<style type="text/css">
<!--
body {
	background-color: #B1B1B1;
}
.style8 {font-family: "MS Sans Serif"; font-size: 16px; color: #006699; }
.style20 {
	color: #7F7F7F;
	font-weight: bold;
}
.style19 {font-family: "MS Sans Serif"; font-size: 16px; color: #666666; }
.style3 {font-family: "MS Sans Serif"; font-size: 16px; color: #333333; }
.style21 {color: #FFFFFF; font-weight: bold; }
.style22 {color: #000000}
.style23 {color: #FF0000}
-->
</style>
</head>