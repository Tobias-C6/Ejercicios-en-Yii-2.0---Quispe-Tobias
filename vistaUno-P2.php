<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form=ActiveForm::begin();?>
	<?= $form->field($model, 'num') ?>

<div class="form-group">
	<?= Html::submitButton('Resolver',['class'=>'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>