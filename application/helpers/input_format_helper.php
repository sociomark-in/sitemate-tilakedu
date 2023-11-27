<?php

function dateinput_format($input) : string{
	// 2023-11-27T12:51 
	$date = date_format(date_create($input), 'Y-m-d'). "T" . date_format(date_create($input), 'H:i');
	return $date;
}
