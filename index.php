<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>東北６県で証明写真が撮影できるところ</title>
		<!--ファビコンを適用-->
		<link rel="icon" href="./img/favicon.ico">
		<style type="text/css">
			#container {
				width: 1000px;
				margin: 0 auto;
			}
			#marker {
				width: 1000px;
				height: 750px;
			}
		</style>

		<script type="text/javascript">
		<?php
		require_once("map_data.php");
		?>
		</script>

	</head>

	<body>

	<div id="container">
		<div id="marker"></div>
	</div>
	<script src="./map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $API_key; ?>&callback=initMap"></script>
	</body>
</html>
