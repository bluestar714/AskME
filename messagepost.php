<?php
header( 'Content-type: text/xml' );
mysql_connect( 'localhost:/tmp/mysql.sock', '', '' );
mysql_select_db( 'chat2' );
$userid = $_REQUEST['user'];
file_put_contents("uu.txt", $_REQUEST['user']);
$oid = mysql_query("SELECT gid FROM userprof WHERE user = '".mysql_real_escape_string($userid)."' limit 1");
while($pid = mysql_fetch_array($oid)){
  $qid = $pid[0];
}
$gid = $qid;
file_put_contents("debug.txt", $_REQUEST['past']);
if ( $_REQUEST['past'] ) {
  	file_put_contents("debug.txt", "YES");
	$result = mysql_query("SELECT * FROM chatitems WHERE id  > '".
		mysql_real_escape_string( $_REQUEST['past'] ).
		"'AND gid = '".$gid."'ORDER BY added LIMIT 50");
} else {
	$result = mysql_query("SELECT * FROM chatitems WHERE gid ='".$gid."' ORDER BY added LIMIT 50");
file_put_contents("debug.txt", "NO");
}
?>
<chat>
<?php
while ($row = mysql_fetch_assoc($result)) {
?>
<message added="<?php echo( $row['added'] ) ?>" id="<?php echo( $row['id'] ) ?>">
	<text><?php echo( htmlentities( $row['message'] ) ) ?></text>
</message>
<?php
}
mysql_free_result($result);
?>
</chat>
