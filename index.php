<!DOCTYPE html>
<html lang="en">
    <head>
			<title>A Journal by Arnold Christian.</title>
			<link rel="shortcut icon" type="image/png" href="images/favicon.png">

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, intial-scale=1.0">

			<link rel="stylesheet" href="styles/stylesheet.css">
			<link rel="stylesheet" href="styles/-debug.css">

	</head>

<body>
<div id="1-10">
<article id="1">


<?php
$files = scandir('entries/');
$i = 0;
foreach($files as $file) {
    $i++;
    if ($i>2) {
        $txt = file_get_contents("entries/" . $file);
        list($a,$b,$c,$d) = explode('##',$txt);
        $e = '<h1><a href="#1">' . $a .'</a></h1>';
        echo $e;
        $f = '<h2>' . $b . '</h2>';
        echo $f;
        $h = '<time>' . $c . '</time>';
        echo $h;
        $g = '<p>' . $d . '</p>';
        echo $g;
        }
  }
?>


</article>
</div>
</body>
</html>