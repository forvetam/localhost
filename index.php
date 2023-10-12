<?php

$todayte = date('d-m-Y');
$url = "https://official-joke-api.appspot.com/jokes/programming/random"; 
$json = json_decode(substr(substr(file_get_contents($url), 1), 0, strlen ($str)-1));
$setup_joke = $json->setup;
$punchline_joke = $json->punchline;

	echo <<<HTML
		<body style="background-color: #062731">

			<div  align="center", style = "background-color: #FFFFFF; word-wrap:break-word; width:632px; position:absolute; top: 270px">
				<p><b>Лог изменений:</b></p>
				<p>_____________________</p>
				<p>Использован API c случайными шутками</p>
				<p>$url</p>				
				<p>$setup_joke</p>
				<p>$punchline_joke</p>
				<p>_____________________</p>
			</div>
			<img src='http://localhost/октябрь.png' style = "position:fixed;height:253px"/>
			<div style = "position:fixed; left:108px; top:131px; font-size: 30px; color: #062731">$todayte</div>

		</body>
HTML;
// echo "changes made from home";
//echo "<img src='http://localhost/леди.png'>";
//echo php_uname();; background-image:'http://localhost/2.png' <p>$json</p>
/*$a = 'https://catfact.ninja/fact';
$data = $a->fact;
echo $data;*/ 
?>