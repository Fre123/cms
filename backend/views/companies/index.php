<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Companies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'company_id',
            'company_name',
            'company_email:email',
            'company_addres',
             [
                'attribute' => 'compnay_create_date',
                'value' => 'compnay_create_date',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                    'model'=> $searchModel,
                    'attribute' => 'compnay_create_date',
                        'clientOptions' => [
                             'autoclose' => true,
                             'format' => 'yyyy-mm-dd',
                    ]
                ]),
             ],
            //'compnay_create_date',
            // 'company_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
