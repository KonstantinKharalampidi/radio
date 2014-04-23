<?php
/* @var $this RubricsController */
/* @var $model Rubrics */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rubrics-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>1, 'cols'=>70)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'descr'); ?>
        <?php $this->widget('application.extensions.tinymce.ETinyMce',
            array(
                'model'=>$model,
                'attribute'=>'descr',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
            )); ?>
        <?php echo $form->error($model,'descr'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textArea($model,'time',array('rows'=>1, 'cols'=>20)); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day'); ?>
		<?php echo $form->dropDownList($model,'day',array(
            'Monday'=>'Понедельник',
            'Tuesday'=>'Вторник',
            'Wednesday'=>'Среда',
            'Thursday'=>'Четверг',
            'Friday'=>'Пятница',
            'Saturday'=>'Суббота',
            'Sunday'=>'Воскресенье'
        )); ?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->