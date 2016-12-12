<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'yearsOfExperience') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'aboutMe') ?>

    <?php // echo $form->field($model, 'professionalTitle') ?>

    <?php // echo $form->field($model, 'careerLevel') ?>

    <?php // echo $form->field($model, 'communicationLevel') ?>

    <?php // echo $form->field($model, 'organizationLevel') ?>

    <?php // echo $form->field($model, 'jobLevel') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phoneNumber') ?>

    <?php // echo $form->field($model, 'webSite') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
