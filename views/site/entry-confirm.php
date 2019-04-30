<?php
use yii\helpers\Html;
?>

<p>you have entered the following information</p>

<ul>
    <li><label>Name </label>: 
    <?= Html::tag('span', Html::encode($model->name), ['class' => 'name']) ?>
</li>
    <li><label>Email </label>: 
    <?= Html::tag('span', Html::encode($model->email), ['class' => 'email']) ?>

</li>
</ul>