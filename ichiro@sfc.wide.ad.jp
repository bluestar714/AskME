<?php
header( 'Content-type: application/json; charset=utf-8' );
$params = $_POST;
		$j = json_encode($params);
		$obj = json_decode($j, true);
		$age = $obj['foo']['age'];
		$sex = intval($obj['foo']['sex']);
		$userid = $obj['foo']['id'];
				
mysql_connect( 'localhost:/tmp/mysql.sock', 'root', '0210' );
mysql_select_db( 'users' );
mysql_query("INSERT INTO userprof (id, age, sex, area, status, ask, answer, userid) VALUES ( null, '".mysql_real_escape_string($age)."', $sex, 'tokyo', 'student', 0, 0, '".mysql_real_escape_string($userid)."')");

?>
