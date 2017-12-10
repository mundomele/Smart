<!doctype html>
<html>
<head>
	<title>Smartmirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim('git rev-parse HEAD') ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon"/>
</head>
<body>
    
	<div class="top left">
            <div id="reloj" class="">
                <div class="date small dimmed"></div>
                <div class="time"></div>
                
            </div>
            <div class="calendar xxsmall"></div>
                
        </div>
	<div class="top right">
            <div class="windsun small dimmed"></div>
            <div class="temp"></div>
            <div class="forecast small dimmed"></div>
        </div>
	<div class="center-ver center-hor">
            <div class="openhab light"></div>
	</div>
	<div class="lower-third center-hor">
            <div class="compliment light"></div>
        </div>
	<div class="bottom center-hor">
            <div class="news medium newsd"></div>
            <div class="newshead newsh medium"></div>
            
        </div>
    <div class="money"></div>
    <div class="moneytable">
        <table>
            <tr id="mostuncent">
                <td>
                   0,01 €
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostdoscent">
                <td>
                   0,02 €
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostcincocent">
                <td>
                   0,05 €
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostdiezcent">
                <td>
                   0,1 € 
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostveintecent">
                <td>
                   0,2 €
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostcunccent">
                <td>
                   0,5 € 
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostuneuro">
                <td>
                   1 €
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr id="mostdoseuro">
                <td>
                   2 € 
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            
        </table>
    </div>
<script src="js/addons/jquery.js"></script>
<script src="js/addons/jquery.feedToJSON.js"></script>
<script src="js/addons/ical_parser.js"></script>
<script src="js/addons/moment-with-locales.js"></script>
<script src="js/addons/rrule.js"></script>
<script src="js/config/config.js?nocache=<?php echo md5(microtime()) ?>"></script>
<script src="js/version/version.js" type="text/javascript"></script>
<script src="js/calendar/calendar.js" type="text/javascript"></script>
<script src="js/compliments/compliments.js" type="text/javascript"></script>
<script src="js/weather/weather.js" type="text/javascript"></script>
<!-- <script src="js/openhab/openhab.js" type="text/javascript"></script> -->
<script src="js/time/time.js" type="text/javascript"></script>
<script src="js/news/news.js" type="text/javascript"></script>
<script src="js/money/money.js" type="text/javascript"></script>
<script src="js/wunderlist/wunderlist.js" type="text/javascript"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/addons/socket.io.min.js"></script> -->

</body>
</html>
