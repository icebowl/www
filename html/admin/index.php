<html><head><title>admin</title></head>
<style>
body{font-family: system-ui, sans-serif; background-color:#a2694b ; color:#fff;}

pre{background-color: ##a2694b;color: #fff;
	font-family: system-ui , sans-serif;border: solid 1px;border-radius: 20px;padding : 10px;}
a{
	background-color:#505050 ;
	color: #fff;
	text-decoration:none;
	border: solid 2px;
	border-color: 000;
	padding : 1px;}
	
a:hover{color:  #fdf6e3; ;text-decoration:none;}


</style>
<body>
<center>
<a href = "index.php?v=1" class = "menu" >ps</a>&nbsp;
<a href = "index.php?v=0" class = "menu" >python3 server 8000 nohup</a>&nbsp; 
<a href = "index.php?v=2" class = "menu" >pkill python3</a>&nbsp;
<a href = "index.php?v=3" class = "menu" >tcpdump</a>&nbsp;
<a href = "index.php?v=4" class = "menu" >tree web</a>&nbsp;
<hr />

<?php

// Default page
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; 
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "<pre>OUTPUT<br />";
	echo "$output";
	echo"</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('cd web; nohup python3 -m http.server 8000 >> /dev/null 2>&1 &');
	echo "<pre>OUTPUT<br />";
	echo "$output";
	echo"</pre>";
}

if ($thepost == 1) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
        $output = shell_exec('pkill  python3');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 3) {
         echo "OUTPUT - ";
		//$command = 'nohup tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0  >> /dev/null 2>&1 & ';
		//echo "$command";
      //$output = shell_exec($command);
      //$output = shell_exec('tcpdump -w $(date +\"%Y%m%d-%H%M%S\").pcap -i enp2s0');   
         shell_exec('nohup tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0  >> /dev/null 2>&1 &');
        //echo "<pre>$output</pre>";
}

if ($thepost == 4) {
        $output = shell_exec('tree web');
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}

?>

<hr />
<pre>
ae4847
de965d
f9ca8c
9db570
80c0b7
77adbf
bb89ac
a2694b

</pre>

</body>
</html>
