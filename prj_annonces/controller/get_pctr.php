<?php

function get_pctr()
{
	if (file_exists('../pctr'))
		{
			$file = scandir('../pctr');
			if (count($file) == 2)
				$file = "empty";
       		return $file;
		}
		$file = "empty";
		return $file;
}