<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label("Your Name") ?>

    <?= $form->field($model, 'email')->label("Your Email") ?>

    <?= $form->field($model, 'city') ?>
    
    <?= $form->field($model, 'phone')?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>