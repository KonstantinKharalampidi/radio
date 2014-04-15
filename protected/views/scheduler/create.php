<?php
/* @var $this SchedulerController */
/* @var $model Scheduler */

$this->breadcrumbs=array(
	'Schedulers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scheduler', 'url'=>array('index')),
	array('label'=>'Manage Scheduler', 'url'=>array('admin')),
);
?>

<h1>Create Scheduler</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>