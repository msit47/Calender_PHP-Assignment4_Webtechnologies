<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<title>Part 2 Calendar</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='part2.css'></link>
</head>
<body>
<div class="main">
<h1>PART 2<br/> Calendar
<?php date_default_timezone_set("America/New_York"); echo date("M-d-Y h:i:s A"); ?></h1>
<table id="table1">
<tr class="tableheader">
<td id="td">Hours</td><td>Swathy</td><td>Swetha</td><td>Naresh</td>
	</tr>
	<?php
	date_default_timezone_set("America/New_York");
	$hours_to_show=12;
	$hourCounter=0;
	$counter = 0;
	$a=true; 
	$functionDay=date("D", strtotime('+'.$counter.' days'));
function get_hour_string($timestamp){
		$timeStr="";
		if($timestamp>=12&&$timestamp<=23){
			$timeStr.=$timestamp-12;
			$timeStr.=" p.m.";
		}elseif($timestamp==0){
			$timeStr.=12;
			$timeStr.=" a.m.";
		}else{
		$timeStr.=$timestamp;
		$timeStr.=" a.m.";
		}
		return $timeStr;
	}

	?>
	<?php
$hours_to_show=12;
	for($i=1;$i<=$hours_to_show;$i++)
		{
		if($a){
			echo "<tr class='e'>";
		}else{
			echo "<tr class='o'>";
		}
		echo "<td class='hrtd'>".get_hour_string(date("G", strtotime('+'.$hourCounter.' hours')))."</td>";
		echo "<td class='hrtd'</td>";
		echo "<td class='hrtd'</td>";
		echo "<td class='hrtd'</td>";
		echo "</tr>";
		$hourCounter++;
		$a=!$a;
	}
	
	date_default_timezone_set("America/New_York");
?>
</table>	
</div>	
<h1><a href="texteditor.html">Text Editor</a></h1>
</body>
</html>
	