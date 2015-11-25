<?php

function pd($valor){
	echo "<pre>";
	print_r($valor);
	echo "</pre>";
}

function limita_palavra($text, $limit = 40)
{
	$words = explode(" ",$text);
	$str = "";
	for ($i = 0; ($i < count($words) && $i < $limit ); $i++)
	{
		$str .= $words[$i] . " ";
	}
	return $str;
}

