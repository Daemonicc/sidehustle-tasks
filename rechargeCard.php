
<?php

function generateRechargeCard($length)
{
  //get strings of number 0-9
	$chars = implode(range('0','9'));
  //shuffle the string
	$shuffled = str_shuffle($chars);
  //return the first four numbers
	return substr($shuffled, 0, $length);
}
function printRechargeCard()
{
	return generateRechargeCard(4).'-'.generateRechargeCard(4).'-'.generateRechargeCard(4).'-'.generateRechargeCard(4). '<br>';
}

for ($i = 0; $i<= 200; $i++){
  echo printRechargeCard();
}

?>
