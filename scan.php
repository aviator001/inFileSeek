
<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb#">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="fb:pages" content="593247247396451">
  <title>SugarDaddyDays.com</title>
	<meta name="description" content="A place that connects handsome wealthy and caring men to hot young women. Worlds first site to use disruptive SMS messaging. Find a sugar daddy today!" />		
	<link rel="canonical" href="https://sugardaddydays.com">
	<meta name="google-site-verification" content="1Tf0in60yFkXs3vroWHXP4BYFepCgMlGiZYX0_FBZJg" />
 	<!-- mobile settings -->		 
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="Author" content="Gautam Sharma" />		
	<!-- Fav Icons -->		
	<link rel="icon" href="assets/img/favicon.ico">		
	<link rel="apple-touch-icon" href="assets/img/favicon.ico">		
	<meta property="og:site_name" content="SugarDaddyDays">
	<meta property="article:publisher" content="https://www.facebook.com/SugarDaddyDays">
	<meta property="og:locale" content="en_US">
	<meta property="og:url" content="https://www.sugardaddydays.com">
	<meta property="og:title" content="SugarDaddyDays - Sugar Daddy and Sugar Baby dating site via sms">
	<meta property="og:type" content="website">
	<meta property="og:description" content="A place that connects handsome wealthy and caring men to hot young women. Our profiles are verified. Worlds first site to use disruptive SMS messaging as a platform.">
	<meta property="og:image" content="https://www.lifebuzz.com/static/og-default.png">
	<meta property="og:viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/grid.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/shadows.css"/>
	<style>
		span {margin:5px}
		input {border:none;border-radius:5px;height:35px}
	</style>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>

  <!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="https://windows.microsoft.com/en-US/internet-explorer/..">
      <img alt="find a sugar daddy or sugar baby"  src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=visualization"></script>

  <script src='js/device.min.js'></script>
  <script src='assets/js/cycle2.js'></script>
  <script src='assets/js/easing.js'></script>
  <script src='assets/js/js_tracker.js'></script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "person",
  "url": "https://sugardaddydays.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://sugardaddydays.com/search/?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}


</script>
	<link rel="stylesheet" src="assets/css/shadows.css">
	<link href='https://fonts.googleapis.com/css?family=Mr+Dafoe|Poiret+One|News+Cycle|Six+Caps|Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Six+Caps|Ubuntu+Condensed|Pinyon+Script|Rajdhani|Loved+by+the+King' rel='stylesheet' type='text/css'>
	
</head>
<body style="">
<div class='www_box2' style="width:55%;height:90%;margin:auto;position:absolute;left:0;top:50px;right:0;bottom:50px;margin:auto;background:url(assets/images/cgirl.png)no-repeat; background-size:cover;text-align:center">
	<div class='www_box www_box2' style="width:70%; padding:25px;margin:auto;position:absolute;left:0;right:0;margin:auto;background:url(assets/images/new_bg02.png) no-repeat,url(assets/images/new_bg01.png) no-repeat; background-size:cover;text-align:center">
		<span>
			<input class='www_box' type=text id=dir placeholder="Directory to search">
		</span>
		<span>
			<input class='www_box' type=text id=str placeholder="Search Term">
		</span>
		<span>
			<input class='www_box' type=text id=rep placeholder="Replace With">
		</span>
		<span>
			<input class='www_box' type=button value="Search for Term Only" onclick="find_in_files()">
		</span>
		<span>
			<input style='padding:2px;background:#fff;border:2px solid red;width:20px;height:20px' type=checkbox id="del" onclick="confirm=(this.checked)?'yes':''"> DELETE!
		</span>
	</div>
	<div id="result"></div>
</div>
<script>
	var confirm=''
	function replace_in_file(file) {
		str= document.getElementById('str').value
		rep= document.getElementById('rep').value
			var request = $.ajax({
				url: 'x_replace_file.php?rep='+rep+'&str='+str+'&file='+file,
				type: "GET",
				dataType: "html",
				cache: false,
				success: function(msg) {
					console.log('done')
				}
			})		
		}

	function find_in_files() {
		dir= document.getElementById('dir').value
		str= document.getElementById('str').value
		rep= document.getElementById('rep').value
		del= document.getElementById('del').checked
		confirm=''
		if (del) confirm='yes'
			var request = $.ajax({
				url: 'x_find_files.php?dir='+dir+'&str='+str+'&rep='+rep+'&confirm='+confirm,
				type: "GET",
				dataType: "html",
				cache: false,
				success: function(msg) {
					document.getElementById('result').innerHTML=msg
				}
			})		
		}

</script>
</body>
</html>
