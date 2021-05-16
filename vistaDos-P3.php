<?php
use yii\helpers\Html;
?>
<h2><u><b>PALABRA:</b></u></h2>
<br>
<ul>
	<?php
		for ($i=1; $i <= strlen($palcC)+2; $i++) { 
			echo "*";
		}
			echo "<br>*".$palcC."*<br>";
		for ($i=1; $i <= strlen($palcC)+2; $i++) { 
			echo "*";
		}
	?>
</ul>