<?php $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link href='<?php echo $url; ?>/public/css/fullcalendar.css' rel='stylesheet' />
	<link href='<?php echo $url; ?>/public/css/fullcalendar.print.css' rel='stylesheet' media='print' />
</head>
<body>
<div id='wrap'>

	<div id='external-events'>
		<h4>Draggable Events</h4>
		<div class='fc-event'>New Event</div>
		<p>
			<img src="<?php echo $url; ?>/public/img/trashcan.png" id="trash" alt="">
		</p>
	</div>

	<div id='calendar'></div>

	<div style='clear:both'></div>

	<xspan class="tt">x</xspan>

</div>

	<script src='<?php echo $url; ?>/public/js/moment.min.js'></script>
	<script src='<?php echo $url; ?>/public/js/jquery.min.js'></script>
	<script src='<?php echo $url; ?>/public/js/jquery-ui.min.js'></script>
	<script src='<?php echo $url; ?>/public/js/fullcalendar.min.js'></script>
	<script src='<?php echo $url; ?>/public/js/common.js'></script>
</body>
</html>