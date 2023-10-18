
<?php
<link href = "converterstyle.css" rel = "stylesheet" type = "text/css">

<h1 class = "header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Length Conversion </h1>
<div class = "box">

<h1>
	<div class = "ans">

<?php

	if (! empty($_POST['num'])){
	$userinput = $_POST['num'];
	}

	if (! empty($_POST['metric'])){
	$valueinput = $_POST['metric'];
	}

	if (! empty($_POST['mconvert'])){
	$convertmetric = $_POST['mconvert'];
	}

	switch ($valueinput){
		case "mm":
			$meterval = $userinput*0.001;
		break;

		case "cm":
			$meterval = $userinput*0.01;
			break;

		case "dm":
			$meterval = $userinput*0.1;
			break;

		case "m":
			$meterval = $userinput;
			break;

		case "km":
			$meterval = $userinput*1000;
			break;

		case "in":
			$meterval = $userinput*0.0254;
			break;

		case "yd":
			$meterval = $userinput*0.9144;
			break;

		case "ch":
			$meterval = $userinput*20.1168;
			break;

		case "fur":
			$meterval = $userinput*201.168;
			break;

		case "mile":
			$meterval = $userinput*1609.34;
			break;
	}

		switch ($convertmetric){
		case "mm":
			$ans = $meterval/0.001;
		break;

		case "cm":
			$ans = $meterval/0.01;
			break;

		case "dm":
			$ans = $meterval/0.1;
			break;

		case "m":
			$ans = $meterval;
			break;

		case "km":
			$ans = $meterval/1000;
			break;

		case "in":
			$ans = $meterval/0.0254;
			break;

		case "yd":
			$ans = $meterval/0.9144;
			break;

		case "ch":
			$ans = $meterval/20.1168;
			break;

		case "fur":
			$ans = $meterval/201.168;
			break;

		case "mile":
			$ans = $meterval/1609.34;
			break;
	}

	echo ("The answer is: ");
	echo ($ans);
	echo (" ".$convertmetric);
	?></h1></div></div>

	?>
