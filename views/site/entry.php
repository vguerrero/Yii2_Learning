<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!--sample -->
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('your name') ?>
<?= $form->field($model, 'email')->label('your email') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>