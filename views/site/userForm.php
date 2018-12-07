<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'fname')->label('First Name'); ?>
<?= $form->field($model,'lname')->label('Last Name'); ?>
<?= $form->field($model,'email')->label('Email'); ?>
<?= $form->field($model,'password'); ?>
<?= $form->field($model,'password')->label('Re-Password'); ?>
<?= $form->field($model,'location'); ?>
<?= $form->field($model,'dob')->label('Date Of Birth'); ?>


<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end(); ?>
