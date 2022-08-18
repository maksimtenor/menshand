<?php 
function varpaste($text,$vars) {
	$textvar = $text;
	foreach ($vars as $key => $value) {
		$textvar = str_replace("#$key#", $value, $textvar);
	}
	return $textvar;
}

?>