<?php
header( 'Content-type: text/xml' );
mysql_connect( 'localhost:/tmp/mysql.sock', 'root', '0210' );
mysql_select_db( 'chat2' );

$r = file_put_contents("debug.txt", $_REQUEST['user']);
$xx = mysql_query("select gid from userprof where user = '".mysql_real_escape_string( $_REQUEST['user'] )."'");
while($nn = mysql_fetch_array($xx)){
  file_put_contents("debug.txt", $nn[0]);
  	$oid = $nn[0];
}	
$gid = $oid;
mysql_query( "INSERT INTO chatitems (userid, message, gid) VALUES ( '".mysql_real_escape_string( $_REQUEST['user'] )."', '".
	mysql_real_escape_string( $_REQUEST['message'] ).
	"', $gid)");
?>
<success />
