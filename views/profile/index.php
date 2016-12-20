<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><font color="blue"><?= Html::encode($this->title) ?></font></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'image',
            'fullname',
            'gender',
            //'dob',
            // 'yearsOfExperience',
            // 'industry',
            // 'location',
            // 'aboutMe',
            // 'professionalTitle',
            // 'careerLevel',
            // 'communicationLevel',
            // 'organizationLevel',
            // 'jobLevel',
            // 'address',
            // 'phoneNumber',
            // 'webSite',
             'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
