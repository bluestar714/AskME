<?php
header( 'Content-type: application/json; charset=utf-8' );
$hash['flg'] = "0";
echo json_encode($hash);	
mysql_connect( 'localhost:/tmp/mysql.sock', 'root', '0210' );
mysql_select_db( 'users' );
$params = $_POST;
                $j = json_encode($params);
                $obj = json_decode($j, true);
		$userid = $obj['foo']['id'];
		$ask = intval($obj['foo']['ask']);
		$ans = intval($obj['foo']['answer']);
		$vulnerability = intval($obj['foo']['vumrability']);
		$genre = intval($obj['foo']['genre']);
//file_put_contents("debugsearch.txt", $j);
foreach(str_split($userid) as $value){
$num = $num;
	 if (is_numeric($value)){
    		$num = $num.$value;
	  }
$digits = strlen($num);
	if ($digits >=  6){
		break;
	}
}  

$date = intval(date('U'));
$num = intval($num)*100;
$oid = $num+$date;
$gid = intval($oid);


mysql_query("update userprof set gid = $gid, ask = $ask, answer = $ans, genre = $genre, vulnerability = $vulnerability where userid = ('".mysql_real_escape_string($userid)."')"); 
//$insert = mysql_query("insert into chatitem (gid, userid2, message) values ($gid, '".mysql_real_escape_string($userid)."', 'test') ");


?>
