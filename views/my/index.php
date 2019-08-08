<h1>Action Index</h1>
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php if(Yii::$app->session->hasFlash('success')):?>
    <div class="alert alert-primary" role="alert">
        <?php echo Yii::$app->session->getFlash('success');?>
    </div>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-danger" role="alert">
        <?php echo Yii::$app->session->getFlash('error')?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']])?>
<?= $form->field($model, 'name')->label('Имя')?>
<?= $form->field($model, 'email')->input('email')?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName', 'clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows'=>'5'])?>
<?= Html::submitButton('Отправить', ['class'=>'btn btn-success'])?>
<?php ActiveForm::end() ?>
