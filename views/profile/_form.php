<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput() ?>
<?php
    if ($model->image){
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->image.'" width="90px">';
    echo Html::a('Delete Profile Picture', ['deleteimage', 'id'=>$model->id], ['class'=>'btn btn-danger']);
}
?>
     <legend>Basic Information</legend>


    <?= $form->field($model, 'fullname', [
        'inputOptions' => [
            'placeholder' => 'Full  Name',
        ],
    ]); ?>


    <?php
    $a= ['Male' => 'Male','Female' => 'Female'];
    echo $form->field($model, 'gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

   <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd',
]) ?>


    <?= $form->field($model, 'yearsOfExperience')->radioList(['1-4 Years'=>'1-4 Years', '5-10 Years'=>'5-10 Years','Over 10 Years'=>'Over 10 Years']) ?>


  
    <?php
    $a= ['Medical' => 'Medical','Banking' => 'Banking', 'Education' => 'Education', 'Information Technology' => 'Information Technology'];
    echo $form->field($model, 'industry',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<!--    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>-->
     <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>


    <?= $form->field($model, 'aboutMe')->textInput(['maxlength' => true]) ?>
    
     <legend>Skills</legend>

    <?= $form->field($model, 'professionalTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'careerLevel')->textInput() ?>

    <?= $form->field($model, 'communicationLevel')->textInput() ?>

    <?= $form->field($model, 'organizationLevel')->textInput() ?>

    <?= $form->field($model, 'jobLevel')->textInput() ?>
    
      <legend>Contact</legend>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'webSite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
