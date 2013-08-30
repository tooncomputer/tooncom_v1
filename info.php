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