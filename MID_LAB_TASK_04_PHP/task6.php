<?php
	$search=[16];
	$numbers=[0,2,9,16,20];
	for($i=0;$i<=$numbers[4];$i++)
	{
		if($i==$search[0])
		{
			echo "$i Found the number  ";
		}
		else
		{
			echo "$i Number not founded  ";
		}
	}
?>