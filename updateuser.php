<?php
header( 'Content-type: application/json; charset=utf-8' );
params = $_POST;
                $j = json_encode($params);
                $obj = json_decode($j, true);
                $ask = intval($obj['foo']['ask']);
                $answer = intval($obj['foo']['answer']);
                $userid = intval($obj['foo']['id']);

mysql_connect( 'localhost:/tmp/mysql.sock', '', '' );
mysql_select_db( 'users' );
$gid = mysql_query('SELECT * FROM userprof WHERE id =' mysql_real_escape_string( $_REQUEST['user']));
mysql_query( "update userprof set ask = $ask, answer = $answer where id = $userid" );
?>
