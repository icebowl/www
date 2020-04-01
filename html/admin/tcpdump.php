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
<pre>

<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>


</pre>

</body>
</html>
