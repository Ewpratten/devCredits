<?php
    header("Content-type: text/css; charset: UTF-8");

	$colors = array(1 => '#a872a3',
				2 => '#7cc8a2',
				3 => '#2a8b9d',
				4 => '#d55161',
				5 => '#ecd175',
				6 => '#f99a66');
	//colors:
	//1 - purple
	//2 - green
	//3 - blue
	//4 - red
	//5 - yellow
	//6 - orange

	session_start();
    $cin = $_SESSION['mainColor'];
    $bgIsAnimated = $_SESSION['bgIsAnimated'];

	if (array_key_exists($cin, $colors)) {
		$color = $colors[$cin];
	} else {
		$color = $colors[1];
	}

	switch($color){
		case $colors[1]:
			$hover = "#69306d";
			break;
		case $colors[2]:
			$hover = "#eb9486";
			break;
		case $colors[3]:
			$hover = "#90c2e7";
			break;
		case $colors[4]:
			$hover = "#fe64a3";
			break;
		case $colors[5]:
			$hover = "#ff7f11";
			break;
		case $colors[6]:
			$hover = "#57b8ff";
			break;
		default:
			$hover = "#000000";
	}
	//templates from coolors.co
	
	//use $color to create themes
?>

body{
	background-color: <?php echo $color; ?>;
	<?php
if ($bgIsAnimated == 'false') {echo "";} else {
 echo "-webkit-animation-name: cycle-banner; /* Chrome, Safari, Opera */ -webkit-animation-duration: 15s; /* Chrome, Safari, Opera */ -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */ animation-name: cycle-banner; animation-duration: 15s; animation-iteration-count: infinit; animation-timing-function:ease-out;"; }
	?>
}
.user:hover {
	 background-color: <?php echo $hover; ?>;
	 
  <?php
	//This code is wildly broken... good luck fixing (it dosent sync the colors to the background)
	// if ($bgIsAnimated == 'false'){ echo "background-color:"; echo $hover; echo ";";}
	//	else {
	//  echo "background-color:"; echo '-webkit-animation-name: cycle-banner-btn; /* Chrome, Safari, Opera */ -webkit-animation-duration: 15s; /* Chrome, Safari, Opera */ -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */ animation-name: cycle-banner-btn; animation-duration: 15s; animation-iteration-count: infinite;'; echo ";"; } ?> */
	
	
    color: #FFFFFF;
}