<?php
header("Content-type: application/json; charset=utf-8");
$params = $_POST;
                $j = json_encode($params);
                $obj = json_decode($j, true);
                $userid = $obj['foo']['id'];
		$genre = intval($obj['foo']['genre']);
		mysql_connect( 'localhost:/tmp/mysql.sock', '', '' );
		$hash = array();
		$hash['flg'] = "0";
mysql_select_db( 'chat2' );
$s = mysql_query("SELECT gid FROM userprof where genre = $genre LIMIT 1");
while($gid = mysql_fetch_array($s)){
  $gid2 = $gid[0];
}

  echo json_encode($hash);
mysql_query("insert into userprof (user, gid, genre) values ('".mysql_real_escape_string($userid)."', $gid2, $genre)");

$t = mysql_query("SELECT user FROM userprof where genre = $genre and gid = $gid2 LIMIT 1");
while($user = mysql_fetch_array($t)){
	$userid2 = $user[0];
}
/*
if ($genre == 1){
	$hantei = "rerw";	
}
else if ($genre == 2){
	$hantei = "llll";
}
else if ($genre == 3){
	$hantei = "iii";
}
else ($genre == 4){
  	$hantei = "aaa";
}*/
mysql_query("insert into chatitems (user, gid, message) values ('".mysql_real_escape_string($userid)."', $gid2, '入室しました。')");
mysql_query("insert into chatitems (userid, gid, message) values ('".mysql_real_escape_string($userid2)."', $gid2, '入室しました。')");
//$update = mysql_query("update chatitem set gid = $gid where userid = '".mysql_real_escape_string($userid)."' and userid2 = '".mysql_real_escape_string($tes)."'");

?>
