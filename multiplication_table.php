<html>
<head>
	<style>
		table
		{ 
		  border: 1px; 
		  font-family: arial; 
		  font-size:14px; 
		  border-style:ridge;
		} 
		td
		{ 
		  border-bottom:1px solid #333; 
		  border-right:1px solid #333; 
		} 

	</style>
</head>
	<body>
		<table>
			<caption>99乘法表</caption>
		<?php
		for($i=1;$i<=9;$i++)
		{
			echo '<tr>';
			for($n=1;$n<=9;$n++)
			{
				echo '<td>'.$i.'*'.$n.'='.($i*$n).'</td>';
			}
			echo '</tr>';
		}
		?>
		</table>
	</body>
</html>