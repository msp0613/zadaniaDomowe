<?php

$liczba = 8;
if ($liczba < 10) {
	echo "true <br/>";
}
else
{
	echo "false <br/>";
}

$liczbaInna = 10;
if ($liczbaInna < 10) 
{
	echo "Mniejsza od 10 <br />";
}
else
{
	echo 'Musi byc wieksze niz 10' . '<br />';
}

$zmienna = 7;
switch ($zmienna) {
	case 7:
		echo "To musi byc siedem <br />";
		break;
	case 8:
		echo "To musi byc osiem <br />";
		break;
	case 9:
		echo "To musi byc dziewiec <br />";
		break;
}

