<html><head><title>tritech.io</title></head>
<style>
body{font-family: system-ui, sans-serif;}
pre{background-color: #fdf6e3;color: #b58900;font-family: system-ui , sans-serif;border: solid 1px;border-radius: 20px;padding : 10px;}
a{text-decoration:none;}
a:hover{color:  #fdf6e3; ;text-decoration:none;}


</style>
<body>
<center>
<a href = "index.php?v=0" class = "menu" >GS ON nohup</a>&nbsp; 
<a href = "index.php?v=1" class = "menu" >CHECK PS</a>&nbsp; 
<a href = "index.php?v=2" class = "menu" >GAME SERVER OFF</a>&nbsp;
<a href = "index.php?v=3" class = "menu" >VIEW TEST OUTPUT</a>&nbsp;
<a href = "index.php?v=4" class = "menu" >GS ON ./L* </a>&nbsp;
<hr />
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; // Default page
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "<pre>OUTPUT<br />";
	echo "$output";
	echo"</pre>
}
if ($thepost == 0) {
	$output = shell_exec('nohup ./LinuxTestBuildV1_51.x86_64 >> /dev/null 2>&1 &');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 1) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
        $output = shell_exec('pkill  LinuxTestBuildV');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 3) {
        $output = shell_exec('cat DataOutput.txt');
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 4) {
        $output = shell_exec('./LinuxTestBuildV1_51.x86_64');
			//     ./LinuxTestBuildV1_32.x86_64
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}




?>

<hr />

</body>
</html>
