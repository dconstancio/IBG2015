<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idusuario',
            'nome',
            'username',
           // 'password',
            //'telefone',
              ['label'=>'Grupo', 'attribute'=>'grupoDescricao'],
              ['label'=>'Perfíl', 'attribute'=>'perfilDescricao'],
            // 'status_idstatus',
            // 'authKey',
            // 'password_reset_token',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
