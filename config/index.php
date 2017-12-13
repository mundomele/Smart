<!doctype html>
<html>
<head>
	<title>Smartmirror Config</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="../css/config/side-menu.css">
	<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon"/>
	<style>
		/* custom height for the add, remove buttons*/
		fieldset div > button.remove, fieldset div >button.add { margin-top: .15em !important; height: 2em !important; }
	</style>
</head>
<body>
<div id="layout">
    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Config</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#feature-group" class="pure-menu-link">		Feature Overview</a></li>
                <li class="pure-menu-item"><a href="#language-group" class="pure-menu-link">	Language</a></li>
                <li class="pure-menu-item"><a href="#time-group" class="pure-menu-link">		Time</a></li>
                <li class="pure-menu-item"><a href="#weather-group" class="pure-menu-link">		Weather</a></li>
                <li class="pure-menu-item"><a href="#compliments-group" class="pure-menu-link">	Compliments</a></li>
                <li class="pure-menu-item"><a href="#news-group" class="pure-menu-link">		News</a></li>
                <li class="pure-menu-item"><a href="#calendar-group" class="pure-menu-link">	Calendar</a></li>
                <li class="pure-menu-item"><a href="#openhab-group" class="pure-menu-link">		Openhab</a></li>
                <li class="pure-menu-item"><a href="#money-group" class="pure-menu-link">		Money</a></li>
                <li class="pure-menu-item"><a href="#twitter-group" class="pure-menu-link">		Twitter</a></li>
        </div>
    </div>

	<div id="main">
		<div class="header">
			<h1>Smartmirror Configuration</h1>
			<h2>Configure your Smartmirror with these options.</h2>
		</div>

		<div class="content">
			<form action="../php/send.php" class="pure-form">
				<fieldset id="feature-group">
						<h2 class="content-subhead">Feature Overview</h2>
						<h3 class="content-subhead">Enable or Disable Features</h3>
					<div class="pure-g">
						<div class="pure-u-7-24">Calendar </div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f1" value="" id="f1"></select>
						</div>
						<div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">Compliments </div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f2" value="" id="f2"></select>
						</div>
						<div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">News</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f3" value="" id="f3"></select>
						</div>
						<div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">Openhab</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f4" value="" id="f4"></select>
						</div>
						<div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">Time </div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f5" value="" id="f5"></select>
						</div>
						<div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">Weather</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f6" value="" id="f6"></select>
						</div>
                                                <div class="pure-u-11-24"></div>
						<div class="pure-u-7-24">Wunderlist</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f7" value="" id="f7"></select>
						</div>
                                                <div class="pure-u-11-24"></div>
                                                <div class="pure-u-7-24">Money</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f8" value="" id="f8"></select>
						</div>
                                                <div class="pure-u-11-24"></div>
                                                <div class="pure-u-7-24">Twitter</div>
						<div class="pure-u-4-24">
							<select class="pure-input-1" name="f9" value="" id="f9"></select>
						</div>
                                                <div class="pure-u-11-24"></div>
					</div>
				</fieldset>
				
				<fieldset id="language-group">
					<h2 class="content-subhead">Language Configuration</h2>
					<div class="pure-g">
						<div class="pure-u-11-24">
							<select class="pure-input-1" name="lang" value="">
							</select>
						</div>
					</div>
				</fieldset>
				
				<fieldset id="time-group">
					<h2 class="content-subhead">Time Configuration (12 or 24 hours)</h2>
					<div class="pure-g">
						<div class="pure-u-11-24">
							<select class="pure-input-1" id="formato" name="tf" value="24">
								<option value="12">12</option>
								<option value="24">24</option>
							</select>
						</div>
					</div>
                                        <h2 class="content-subhead">Time Position</h2>
					<div class="pure-g">
						<div class="pure-u-11-24">
							<select class="pure-input-1" id="timePosition" name="timePosition" value="tl">
								<option value="tm">Top Medium</option>
								<option value="tl">Top Left</option>
							</select>
						</div>
					</div>
				</fieldset>

				<fieldset id="weather-group" class="pure-form-stacked">
					<h2 class="content-subhead">Weather Configuration</h2>
					<h3 class="content-subhead">Update and Fade-interval (ms)</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="interval" type="number" name="ivweat" placeholder="Update Interval" value="" required title="Please enter the Update-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fadeinterval" type="number" name="faweat" placeholder="Fade Interval" value="" required title="Please enter the Fade-interval (ms)">
						</div>
					</div>
					<h3 class="content-subhead">APIKEY, Location and Unit</h3>
					<div class="pure-g">
						<div class="pure-u-12-24">
							<input class="pure-u-1" id="APPID" type="text" name="APPID" placeholder="YOUR_WEATHER_API_KEY" value="" required title="Please enter your APIKEY">
						</div>
						<div class="pure-u-12-24"></div>
						<div class="pure-u-12-24">
							<input class="pure-u-1" id="q" type="text" name="q" placeholder="Weather Location" value="" required title="Please enter your Location">
						</div>
						<div class="pure-u-12-24"></div>
						<div class="pure-u-12-24">
							<select class="pure-input-1" name="units" value="" required="">
							</select>
						</div>
					</div>	
				</fieldset>				
				
				<fieldset id="compliments-group">
					<h2 class="content-subhead">Compliments Configuration</h2>
					<h3 class="content-subhead">Update and Fade-interval (ms)</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="interval" type="number" name="ivcomp" placeholder="Update Interval" value="" required title="Please enter the Update-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fadeinterval" type="number" name="facomp" placeholder="Fade Interval" value="" required title="Please enter the Fade-interval (ms)">
						</div>
					</div>

					<h3 class="content-subhead">Morning Compliments</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="morning-compliments-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="morning-compliments" class="pure-u-20-24"></div>
					</div>			

					<h3 class="content-subhead">Afternoon Compliments</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="afternoon-compliments-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="afternoon-compliments" class="pure-u-20-24"></div>
					</div>

					<h3 class="content-subhead">Evening Compliments</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="evening-compliments-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="evening-compliments" class="pure-u-20-24"></div>
					</div>
				</fieldset>
				
				<fieldset id="news-group">
					<h2 class="content-subhead">News Feeds</h2>
					<h3 class="content-subhead">Update,Fade and Fetch-interval (ms)</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="interval" type="number" name="ivnews" placeholder="Update Interval" value="" required title="Please enter the Update-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fadeinterval" type="number" name="fanews" placeholder="Fade Interval" value="" required title="Please enter the Fade-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fetchinterval" type="number" name="fenews" placeholder="Fetch Interval" value="" required title="Please enter the Fetch-interval (ms)">
						</div>
					</div>
					<h3 class="content-subhead">News Feed configuration</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="news-feeds-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="news-feeds" class="pure-u-20-24">
						</div>
					</div>
				</fieldset>
				
				<fieldset id="calendar-group">
					<h2 class="content-subhead">Calendar Configuration</h2>
					<h3 class="content-subhead">Maximum calendar items</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="maxitems" type="number" name="mical" placeholder="Max items displayed" value="" required title="Please specify the displayed items">
						</div>
					</div>
				<h3 class="content-subhead">Update,Fade and Fetch-interval (ms)</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="interval" type="number" name="ivcal" placeholder="Update Interval" value="" required title="Please enter the Update-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fadeinterval" type="number" name="facal" placeholder="Fade Interval" value="" required title="Please enter the Fade-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fetchinterval" type="number" name="fecal" placeholder="Fetch Interval" value="" required title="Please enter the Fetch-interval (ms)">
						</div>
					</div>
				<h3 class="content-subhead">Calendar Feed configuration</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="calendar-feeds-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="calendar-feeds" class="pure-u-20-24">
						</div>
					</div>
				</fieldset>
				
                                <fieldset id="money-group">
                                    <h2 class="content-subhead" >Hucha: <span id="mostrarfondos"></span>€ </h2>
					
                                        <div class="pure-g">
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actual" type="number" step="any" name="actual" value="" novalidate  hidden>
						</div>
						<div class="pure-u-24-24">
							<input class="pure-u-1" id="actualuncen" type="number" step="any" name="actualuncen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualdoscen" type="number" step="any" name="actualdoscen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualcincocen" type="number" step="any" name="actualcincocen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualdiezcen" type="number" step="any" name="actualdiezcen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualveintecen" type="number" step="any" name="actualveintecen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualcincen" type="number" step="any" name="actualcincen" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualuneuro" type="number" step="any" name="actualuneuro" value="" novalidate  hidden>
						</div>
                                                <div class="pure-u-24-24">
							<input class="pure-u-1" id="actualdoseuro" type="number" step="any" name="actualdoseuro" value="" novalidate  hidden>
						</div>
					</div>
					<div class="pure-g">
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                <div class="pure-u-12-24">
							<h3 class="content-subhead">Agregar fondos</h3>
						</div>
                                                <div class="pure-u-12-24">
							<h3 class="content-subhead">Retirar fondos</h3>
						</div>
                                            
                                            
                                            
                                            
                                                <div class="pure-u-4-24">
							Moneda: 0,01€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumuncen" type="number" step="any" name="sumuncen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,01€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resuncen" type="number" step="any" name="resuncen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 0,02€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumdoscen" type="number" step="any" name="sumdoscen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,02€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resdoscen" type="number" step="any" name="resdoscen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 0,05€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumcincocen" type="number" step="any" name="sumcincocen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,05€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="rescincocen" type="number" step="any" name="rescincocen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 0,1€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumdiezcen" type="number" step="any" name="sumdiezcen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,1€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resdiezcen" type="number" step="any" name="resdiezcen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 0,2€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumveintecen" type="number" step="any" name="sumveintecen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,2€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resveintecen" type="number" step="any" name="resveintecen" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 0,5€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumcincent" type="number" step="any" name="sumcincent" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 0,5€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="rescincent" type="number" step="any" name="rescincent" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 1€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumuneuro" type="number" step="any" name="sumuneuro" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 1€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resuneuro" type="number" step="any" name="resuneuro" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                <div class="pure-u-4-24">
							Moneda: 2€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="sumdoseuro" type="number" step="any" name="sumdoseuro" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                <div class="pure-u-4-24">
							Moneda: 2€
						</div>
						<div class="pure-u-2-24">
							<input class="pure-u-1" id="resdoseuro" type="number" step="any" name="resdoseuro" placeholder="Inserte valor" value="0" required="">
						</div>
                                                <div class="pure-u-6-24"></div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
					</div>
                                        
				</fieldset>
                            
                            
                            
				<fieldset id="openhab-group">
					<h2 class="content-subhead">Openhab Configuration</h2>
					<h3 class="content-subhead">Update,Fade and Fetch-interval (ms)</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="interval" type="number" name="ivoha" placeholder="Update Interval" value="" required title="Please enter the Update-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fadeinterval" type="number" name="faoha" placeholder="Fade Interval" value="" required title="Please enter the Fade-interval (ms)">
						</div>
						<div class="pure-u-3-24"></div>						
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="fetchinterval" type="number" name="feoha" placeholder="Fetch Interval" value="" required title="Please enter the Fetch-interval (ms)">
						</div>
					</div>
					<h3 class="content-subhead">Openhab Feed configuration</h3>
					<div class="pure-group pure-g">
						<div class="pure-u-1-24"></div>
						<div id="openhab-feeds-remove" class="pure-u-2-24"></div>
						<div class="pure-u-1-24"></div>
						<div id="openhab-feeds" class="pure-u-20-24">
						</div>
					</div>					
				</fieldset>
				
                            
                                <fieldset id="twitter-group">
					<h2 class="content-subhead">Twitter accounts</h2>
					<h3 class="content-subhead">Write twitter accounts separate with , and without @</h3>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="pure-u-1" id="twac" type="text" name="twac" placeholder="marca,as,mundodeportivo" value="marca,as,mundodeportivo" required>
						</div>
						<div class="pure-u-18-24"></div>
						
					</div>		
				</fieldset>
                            
				<fieldset id="button-group">				
					<h2 class="content-subhead"></h2>
					<div class="pure-g">
						<div class="pure-u-6-24">
							<input class="button-success pure-button pure-button-primary pure-input-1" type="submit" value="Submit">
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="button-success pure-button pure-button pure-input-1" value="Cancel" onclick='window.location.reload(true);'>
						</div>
						<div class="pure-u-3-24"></div>
						<div class="pure-u-6-24">
							<input class="button-success pure-button pure-button pure-input-1" value="show smartmirror" onclick="window.location.href='../'">
						</div>
					</div>
				</fieldset>				
			</form>
		</div>
	</div>
</div>
<script src="../js/addons/jquery.js"></script>
<script src="../js/config/config.js"></script>
<script src="../js/config/main.js"></script>
<script type="text/javascript">
	(function (window, document) {

	    var layout   = document.getElementById('layout'),
	        menu     = document.getElementById('menu'),
	        menuLink = document.getElementById('menuLink');

	    function toggleClass(element, className) {
	        var classes = element.className.split(/\s+/),
	            length = classes.length,
	            i = 0;

	        for(; i < length; i++) {
	          if (classes[i] === className) {
	            classes.splice(i, 1);
	            break;
	          }
	        }
	        // The className is not found
	        if (length === classes.length) {
	            classes.push(className);
	        }

	        element.className = classes.join(' ');
	    }

	    menuLink.onclick = function (e) {
	        var active = 'active';

	        e.preventDefault();
	        toggleClass(layout, active);
	        toggleClass(menu, active);
	        toggleClass(menuLink, active);
	    };
            
    }(this, this.document));
</script>
</body>
</html>