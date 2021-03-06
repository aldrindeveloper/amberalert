<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'persona-caracteristica-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p> 

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'id_persona', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'id_tipo_naturaleza', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'id_incidencia', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'raza', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'tez', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'color_piel', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'edad', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'idioma_primario', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'estatura', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'peso', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'cabello', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'ojos', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'complexion', array('class' => 'span5', 'maxlength' => 500)); ?>

<?php echo $form->textAreaRow($model, 'caracteristicas_peculiares', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php echo $form->textFieldRow($model, 'herida', array('class' => 'span5')); ?>

<?php echo $form->textAreaRow($model, 'descripcion_herida', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<div class="form-actions"> 
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div> 

<?php $this->endWidget(); ?>