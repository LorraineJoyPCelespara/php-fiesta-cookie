<?php
$data_sum = array(45, 60, 80, 39, 58, 78, 44, 59, 79, 50);

function hp_sum($data_sum){
	return $data_sum[0] + $data_sum[1] + $data_sum[2] + $data_sum[3] + $data_sum[4] + $data_sum[5] + $data_sum[6] + $data_sum[7] + $data_sum[8] + $data_sum[9];
}
	echo 'hp_sum: '. hp_sum($data_sum);

	echo '<br>';

$data_attack = array(49, 62, 82, 52, 64, 84, 48, 63, 83, 20);

function ave_attack($data_attack, $n){
	return ($data_attack[0] + $data_attack[1] + $data_attack[2] + $data_attack[3] + $data_attack[4] + $data_attack[5] + $data_attack[6] + $data_attack[7] + $data_attack[8] + $data_attack[9]) / $n;
}
	echo 'ave_attack: ' . ave_attack($data_attack, 10);
?>