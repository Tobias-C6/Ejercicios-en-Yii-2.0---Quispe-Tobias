<?php
use yii\helpers\Html;
?>
<h2><u><b>Resultados de N:</b></u></h2>
<br>
<ul>
	<p><label>N!</label>= <?= Html::encode($factorial) ?></p>
	<p><label>Suma de todos los numeros multiplos de 3</label>: <?= Html::encode($sM3) ?></p>
	<p><label>Resta entre la suma de los nº pares e impares</label>: <?= Html::encode($sumPI) ?></p>
</ul>