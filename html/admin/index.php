<html><head><title>admin</title></head>
<style>
body {margin: 0;font-family: system-ui, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #383838;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.block { display: inline-block; font-size: 13px; font-weight: bold; padding: 15px; margin: 0 5px 10px 0; }
  	 
pre {
  	    font-size: 14px;
  	    padding: 10px 20px;
}
  	  
      .b00-bg { background-color: #181818; }/* black */
      .b01-bg { background-color: #282828; }
      .b02-bg { background-color: #383838; }
      .b03-bg { background-color: #585858; }
      .b04-bg { background-color: #b8b8b8; }
      .b05-bg { background-color: #d8d8d8; }
      .b06-bg { background-color: #e8e8e8; }
      .b07-bg { background-color: #f8f8f8; }/*almost white */
      .b08-bg { background-color: #ab4642; }/* red */
      .b09-bg { background-color: #dc9656; }/* orange  */
      .b0A-bg { background-color: #f7ca88; }/* peach */
      .b0B-bg { background-color: #a1b56c; }/* green */
      .b0C-bg { background-color: #86c1b9; }/* celeste */
      .b0D-bg { background-color: #7cafc2; }/* blue */
      .b0E-bg { background-color: #ba8baf; }/* violet */
      .b0F-bg { background-color: #a16946; }/* brown */
      
      .b00 { color: #181818; }
      .b01 { color: #282828; }
      .b02 { color: #383838; }
      .b03 { color: #585858; }
      .b04 { color: #b8b8b8; }
      .b05 { color: #d8d8d8; }
      .b06 { color: #e8e8e8; }
      .b07 { color: #f8f8f8; }
      .b08 { color: #ab4642; }
      .b09 { color: #dc9656; }
      .b0A { color: #f7ca88; }
      .b0B { color: #a1b56c; }
      .b0C { color: #86c1b9; }
      .b0D { color: #7cafc2; }
      .b0E { color: #ba8baf; }
      .b0F { color: #a16946; }
      .blk{color: #000;}
      .wht{color: #ddd;}

a{
	color: #ddd;
	text-align: center;
  text-decoration: none;
}

.contents {
	padding:30px;
	
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
<body>
<center>
<div class="topnav" id="myTopnav">
<a href = "index.php?v=0" class = "b08-bg">ps</a>
  <a href="index.php?v=1" class = "b09-bg">start py http 8000</a>
  <a href="index.php?v=2" class = "b0A-bg">FILES</a>
  <a href="index.php?v=3" class = "b0B-bg">LOGS</a>
  <a href="index.php?v=4" class = "b0C-bg" >PORT:8000</a>
  <a href="index.php?v=5" class = "b0D-bg">ADMIN</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
	
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
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}

if ($thepost == 1) {
	$output = shell_exec('cd data; nohup python3 -m http.server 8000 >> /dev/null 2>&1 &');
	echo "<pre>OUTPUT<br />";
	echo "$output";
	echo"</pre>";
}


if ($thepost == 2) {
        $output = shell_exec('pkill  python3');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 3) {
         echo "OUTPUT - ";
		//$command = 'tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0 ';
		$command = 'sh /home/cwc/http/www/html/admin/tcpdmp.sh';
		//echo "$command";
      //$output = shell_exec($command);
      //$output = shell_exec('tcpdump -w $(date +\"%Y%m%d-%H%M%S\").pcap -i enp2s0');   
         #shell_exec('nohup tcpdump -w $(date +"%Y%m%d-%H%M%S").pcap -i enp2s0  >> /dev/null 2>&1 &');
    $output = shell_exec('$command');
      echo "<pre> - $output - </pre>";
}

if ($thepost == 4) {
         echo "<pre>tcpdmp-txt.sh <br />";
         $dpath = getcwd();
		echo "path ".$dpath."/tpd-txt.sh";	
		$m=shell_exec($dpath."/tpd-txt.sh");
		echo  "<hr />m $m" ;
		//print_r($message);
		$output = shell_exec($m);
		echo "</pre>";
      echo "<pre> *** $output *** </pre>";
}

if ($thepost == 5) {
         echo "<pre>\\OUTPUT - - <br />";
         $dpath = getcwd();
		echo "path ".$dpath."/a.sh";	
		$m=shell_exec($dpath."/a.sh");
		echo  "<hr />m $m" ;
		//print_r($message);
		$output = shell_exec($m);
		echo "</pre>";
      echo "<pre> *** $m *** </pre>";
}

if ($thepost == 6) {
        $output = shell_exec('ls -l');
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 7) {
       // $output = shell_exec('nohup /usr/sbin/tcpdump -tttt > /dev/null 2>&1 >./temp13.txt &');
         //$output = shell_exec('/usr/sbin/tcpdump');
          $output = shell_exec('sudo tcpdump*');
         echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 8) {
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


