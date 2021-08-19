<?php
include "../controller/get_pctr.php";

$files = get_pctr();
echo "<select name='pctr_name'>";
foreach ($files as $item)
{
	if ($item != '.' && $item != '..')
		echo "<option value='".$item."'> $item </option>";
}
echo "</select>";