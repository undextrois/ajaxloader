<?php
if ($_REQUEST['id'] == 1) 
{
	$al_cnn = mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('test',$al_cnn) or die(mysql_error());
	$al_rs = mysql_query('SELECT * FROM `australia`;');
	while($al_row = mysql_fetch_object($_rs))
	{
		echo '<tr><td>'.$al_row->ServiceName.' </td></tr>';
	}
} else {
	echo 'none';
}
?>