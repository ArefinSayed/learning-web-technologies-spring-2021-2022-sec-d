<?php
	for($i=0;$i<4;$i++)
	{
		for($j=0;$j<$i;$j++)
		{
			echo " * ";
		}
		echo "<br/>";
	}
	echo "<br/>";
	for($i=4;$i>0;$i--)
	{
		for($j=1;$j<$i;$j++)
		{
			echo " $j ";
		}
		echo "<br/>";
	}
?>