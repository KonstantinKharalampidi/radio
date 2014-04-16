<?php
/* @var $this RubricsController */
/* @var $model Rubrics */

$this->breadcrumbs=array(
	'Rubrics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rubrics', 'url'=>array('index')),
	array('label'=>'Manage Rubrics', 'url'=>array('admin')),
);
?>

<h1>Create Rubrics</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>