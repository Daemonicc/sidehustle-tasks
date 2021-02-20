
<?php

function random($length)
{
  //get strings of number 1-9
	$chars = implode(range('0','9'));
  //shuffle the string
	$shuffled = str_shuffle($chars);
  //return the first four numbers
	return substr($shuffled, 0, $length);
}
function rechargeCard()
{
	return random(4).'-'.random(4).'-'.random(4).'-'.random(4). '<br>';
}

for ($i = 0; $i<= 200; $i++){
  echo rechargeCard();
}

?>
