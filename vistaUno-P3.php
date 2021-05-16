<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form=ActiveForm::begin();?>
	<?= $form->field($model, 'palabra') ?>

<div class="form-group">
	<?= Html::submitButton('Imprimir',['class'=>'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>