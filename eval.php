<?php
//evaluation
header( 'Content-type: application/json; charset=utf-8' );
$params = $_POST;
		$j = json_encode($params);
		$onj = json_decode($j, true);
		$userid = $obj['foo']['id'];
		$evals = $obj['foo']['flg'];
		$r = file_put_contents("aaa.txt", $userid);
		
file_put_contents("aaa.txt", "1");
		mysql_connect( 'localhost:/tmp/mysql.sock', '', '' );
mysql_select_db( 'chat2' );
$s = ("SELECT gid FROM userprof where user = $userid LIMIT 1");
 mysql_query("insert into chatitems (message) values ('The operent leaved...') where gid = $gid"); 
while($data = mysql_fetch_array($s)){
  $gid = $data[0];
}
file_put_contents("aaa.txt", "2");
if ($evals = "true"){
file_put_contents("aaa.txt", "3");
mysql_query("delete from chatitems where gid = $gid");
mysql_query("delete from userprof");
}

?>
