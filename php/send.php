<!-- This is an extremely simplistic, linear script to grab the values and stick them into the template, I didn't think this needed anything sort of complex structure for growth.  The downsides is that the previous file is overwritten every time.  I'm sure a backup system could be implemented but I don't think it's necessary -->
<?php
	$templateFile = "../js/config/config.template";
	$writeFile = "../js/config/config.js";

	$date = date(DATE_W3C);
	$language = (string)"\"" . $_GET['lang'] . "\"";
	$timeFormat = (string)"\"" . $_GET['tf'] . "\"";
        $timePosition = (string)"\"" . $_GET['timePosition'] . "\"";
	
	$feature = [];
	$feature['calendar'] 	= (string)"\"" . $_GET['f1'] . "\"";
	$feature['compliments'] = (string)"\"" . $_GET['f2'] . "\"";
	$feature['news'] 		= (string)"\"" . $_GET['f3'] . "\"";
	$feature['openhab'] 	= (string)"\"" . $_GET['f4'] . "\"";
	$feature['time'] 		= (string)"\"" . $_GET['f5'] . "\"";
	$feature['weather'] 	= (string)"\"" . $_GET['f6'] . "\"";
        $feature['wunderlist'] 	= (string)"\"" . $_GET['f7'] . "\"";
        $feature['money'] 	= (string)"\"" . $_GET['f8'] . "\"";
        
        $feature['twitter'] 	= (string)"\"" . $_GET['f9'] . "\"";
	
        $money = [];
        /*
        $money['uncent'] = (float)((float)$_GET['actualuncen'] + ((float)$_GET['sumuncen'] * 0.01) - ((float)$_GET['resuncen']) * 0.01);
        $money['doscent'] = (float)((float)$_GET['actualdoscen'] + ((float)$_GET['sumdoscen'] * 0.02) - ((float)$_GET['resdoscen']) * 0.02);
        $money['cincocent'] = (float)((float)$_GET['actualcincocen'] + ((float)$_GET['sumcincocen'] * 0.05) - ((float)$_GET['rescincocen']) * 0.05);
        $money['diezcent'] = (float)((float)$_GET['actualdiezcen'] + ((float)$_GET['sumdiezcen'] * 0.1) - ((float)$_GET['resdiezcen']) * 0.1);
        $money['veintecent'] = (float)((float)$_GET['actualveintecen'] + ((float)$_GET['sumveintecen'] * 0.2) - ((float)$_GET['resveintecen']) * 0.2);
        $money['cinccent'] = (float)((float)$_GET['actualcincen'] + ((float)$_GET['sumcincent'] * 0.5) - ((float)$_GET['rescincent']) * 0.5);
        $money['uneuro'] = (float)((float)$_GET['actualuneuro'] + ((float)$_GET['sumuneuro'] * 1) - ((float)$_GET['resuneuro']) * 1);
        $money['doseuro'] = (float)((float)$_GET['actualdoseuro'] + ((float)$_GET['sumdoseuro'] * 2) - ((float)$_GET['resdoseuro']) * 2);
        */
        
        $money['auncent'] = $_GET['sumuncen'] - $_GET['resuncen'];
        $money['adoscent'] = $_GET['sumdoscen'] - $_GET['resdoscen'];
        $money['acincocent'] =$_GET['sumcincocen'] - $_GET['rescincocen'];
        $money['adiezcent'] = $_GET['sumdiezcen'] - $_GET['resdiezcen'];
        $money['aveintecent'] =  + $_GET['sumveintecen'] - $_GET['resveintecen'];
        $money['acinccent'] =  + $_GET['sumcincent'] - $_GET['rescincent'];
        $money['auneuro'] =  + $_GET['sumuneuro'] - $_GET['resuneuro'];
        $money['adoseuro'] =  + $_GET['sumdoseuro'] - $_GET['resdoseuro'];
        
        
        $money['uncent'] = $_GET['actualuncen'] + $_GET['sumuncen'] - $_GET['resuncen'];
        $money['doscent'] = $_GET['actualdoscen'] +$_GET['sumdoscen'] - $_GET['resdoscen'];
        $money['cincocent'] = $_GET['actualcincocen'] + $_GET['sumcincocen'] - $_GET['rescincocen'];
        $money['diezcent'] = $_GET['actualdiezcen'] + $_GET['sumdiezcen'] - $_GET['resdiezcen'];
        $money['veintecent'] = $_GET['actualveintecen'] + $_GET['sumveintecen'] - $_GET['resveintecen'];
        $money['cinccent'] = $_GET['actualcincen'] + $_GET['sumcincent'] - $_GET['rescincent'];
        $money['uneuro'] = $_GET['actualuneuro'] + $_GET['sumuneuro'] - $_GET['resuneuro'];
        $money['doseuro'] = $_GET['actualdoseuro'] + $_GET['sumdoseuro'] - $_GET['resdoseuro'];
        $money['valor'] = $_GET['actual'] + ($money['auncent']*0.01) + ($money['adoscent']*0.02) + ($money['acincocent']*0.05) + ($money['adiezcent']*0.1) + ($money['aveintecent']*0.2) + ($money['acinccent']*0.5) + ($money['auneuro']*1) + ($money['adoseuro']*2);
        
	$weather = [];
	$weather['interval'] 		= (string) $_GET['ivweat'];
	$weather['fadeinterval']	= (string) $_GET['faweat'];
	$weather['q']				= (string)"\"" . $_GET['q'] . "\"";
	$weather['units']			= (string)"\"" . $_GET['units'] . "\"";
	$weather['APPID']			= (string)"\"" . $_GET['APPID'] . "\"";
	
	$compliments = [];
	$compliments['interval'] 		= (string) $_GET['ivcomp'];
	$compliments['fadeinterval']	= (string) $_GET['facomp'];
	$compliments['morning'] 		= "\"" . implode('","', $_GET['morning']) . "\"";
	$compliments['afternoon'] 		= "\"" . implode('","', $_GET['afternoon']) . "\"";
	$compliments['evening'] 		= "\"" . implode('","', $_GET['evening']) . "\"";
	
	$news = [];
	$news['interval'] = (string) $_GET['ivnews'];
	$news['fadeinterval'] = (string) $_GET['fanews'];
	$news['fetchinterval'] = (string) $_GET['fenews'];
	$news['feed'] = "\"" . implode('","', $_GET['newsfeed']) . "\"";
	
	$calendar = [];
	$calendar['maxitems'] = (string) $_GET['mical'];
	$calendar['interval'] = (string) $_GET['ivcal'];
	$calendar['fadeinterval'] = (string) $_GET['facal'];
	$calendar['fetchinterval'] = (string) $_GET['fecal'];
	$calkeys=array("url"=>"","color"=>"","slice"=>"");
	$elements = array();
	foreach (array_chunk($_GET['calfeed'], 3) as $section) {
	$elements[] = implode('",', array_map(function ($v, $k) { return $k . ': "' . $v; }, $section, array_keys($calkeys)));
	}
	$calendar['feed'] = "{" . implode( '"},'."\n\t\t\t".'{'  ,$elements) . '"}';
	
	$openhab = [];
	$openhab['interval'] = (string) $_GET['ivoha'];
	$openhab['fadeinterval'] = (string) $_GET['faoha'];
	$openhab['fetchinterval'] = (string) $_GET['feoha'];
	$openhab['feed'] = "\"" . implode('","', $_GET['ohafeed']) . "\"";

        
        
        $twitter["cuentas"] = (string)"\"".$_GET["twac"]."\"";
        
                
	// Locations that will be replaced
	$replaceLocations = array('{%feature.twitter%}','{%twitter.cuentas%}','{%feature.money%}','{%money.valor%}','{%money.uncent%}','{%money.doscent%}','{%money.cincocent%}','{%money.diezcent%}','{%money.veintecent%}','{%money.cinccent%}','{%money.uneuro%}','{%money.doseuro%}','{%feature.calendar%}','{%feature.wunderlist%}', '{%feature.compliments%}', '{%feature.news%}', '{%feature.openhab%}', '{%feature.time%}', '{%feature.weather%}', '{%lastupdate%}', '{%lang%}', '{%time.timeFormat%}', '{%time.timePosition%}', '{%weather.interval%}', '{%weather.fadeinterval%}', '{%weather.location%}', '{%weather.units%}', '{%weather.APPID%}', '{%compliments.interval%}', '{%compliments.fadeinterval%}', '{%compliments.morning%}', '{%compliments.afternoon%}', '{%compliments.evening%}', '{%news.interval%}', '{%news.fadeinterval%}','{%news.fetchinterval%}','{%news.feed%}', '{%calendar.maxitems%}', '{%calendar.interval%}', '{%calendar.fadeinterval%}', '{%calendar.fetchinterval%}', '{%calendar.feed%}' ,'{%openhab.interval%}' ,'{%openhab.fadeinterval%}' ,'{%openhab.fetchinterval%}' ,'{%openhab.feed%}');

	// Items that will replace the placeholders
	$replaceValues = array($feature['twitter'],$twitter["cuentas"],$feature['money'],$money['valor'], $money['uncent'],$money['doscent'],$money['cincocent'],$money['diezcent'],$money['veintecent'],$money['cinccent'],$money['uneuro'],$money['doseuro'],$feature['calendar'],$feature['wunderlist'], $feature['compliments'], $feature['news'], $feature['openhab'], $feature['time'], $feature['weather'], $date, $language, $timeFormat, $timePosition, $weather['interval'], $weather['fadeinterval'], $weather['q'], $weather['units'], $weather['APPID'], $compliments['interval'], $compliments['fadeinterval'], $compliments['morning'], $compliments['afternoon'], $compliments['evening'], $news['interval'], $news['fadeinterval'], $news['fetchinterval'], $news['feed'], $calendar['maxitems'], $calendar['interval'], $calendar['fadeinterval'], $calendar['fetchinterval'], $calendar['feed'], $openhab['interval'], $openhab['fadeinterval'], $openhab['fetchinterval'], $openhab['feed']);
	
	// Get the template file
	$config = file_get_contents($templateFile, true);

	// find and replace all options
	$config = str_ireplace($replaceLocations, $replaceValues, $config);

	$handle = fopen($writeFile, 'w') or die('Cannot open file: ' . $writeFile . ' | do a chmod 777 on the config file');

	fwrite($handle, $config);

	fclose($handle);
        $directorio = explode("/", $_SERVER['REQUEST_URI']);
        $meleradas="";
        if( $_SERVER['HTTP_HOST']  == "meleradas.esy.es") $meleradas = "/Smartmirror";
	header('refresh: 1; URL=http://'.$_SERVER['HTTP_HOST'].'/'.$directorio[1].$meleradas.'/config/index.php');

        