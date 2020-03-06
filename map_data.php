<?php

ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

$mysqli = new mysqli( 'localhost', 'map_user', 'edGy8xhhmF0jwMUd', 'map');

if( $mysqli->connect_errno ) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}

$mysqli->set_charset('utf8');

$sql = 'SELECT name,lat,lng,icon FROM geo_locations';
$res = $mysqli->query($sql);

print '
$A = "img/booth&man.jpg";
$B = "img/camera_booth.png";
$C = "img/camera_man.png";

// マーカーを立てる場所名・緯度・経度
markerData = [ 
	{';

	$i = 0;
	while( $data = $res->fetch_assoc() ) {

		$name = $data['name'];	
		$lat = $data['lat'];
		$lng = $data['lng'];
		$icon = $data['icon'];

		print 'name:"'. $name . '",';
		print 'lat:'. $lat . ',';
		print 'lng:'. $lng . ',';
		print 'icon:'. $icon;

		if (($res->num_rows) == ($i + 1)) {
			// 最後のレコードだったら
			print '}]';
		} else {
			// それ以外
			print '},{';
		}
		$i++;
	}
$mysqli->close();

?>