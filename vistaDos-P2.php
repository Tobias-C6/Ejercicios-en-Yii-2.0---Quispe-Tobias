<?php
use yii\helpers\Html;
?>
<h2><u><b>Numeros primos:</b></u></h2>
<br>
<ul><p><label>Numeros primos hasta N son</label>:
<?php 
	for ($i=1; $i <= $model->num; $i++) {
    	for ($j=1; $j <= $model->num; $j++){
    		if($i % $j == 0){
				$cont++;
			}
    	}	
    	if($cont==2){
    		echo $i." ";
        }
        $cont=0;
    }
?>
</p></ul>