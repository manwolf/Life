<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\changeSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Changes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="change-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Change', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user',
            'type',
            'beginDate',
            'endDate',
            // 'theme',
            // 'keywords',
            // 'keyman',
            // 'keymanImpact',
            // 'level',
            // 'article',
            // 'recordTime:datetime',
            // 'updateTime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
