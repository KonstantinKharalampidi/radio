<?php
/* @var $this SchedulerController */
/* @var $model Scheduler */

$this->breadcrumbs=array(
	'Schedulers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scheduler', 'url'=>array('index')),
	array('label'=>'Create Scheduler', 'url'=>array('create')),
	array('label'=>'View Scheduler', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scheduler', 'url'=>array('admin')),
);
?>

<h1>Update Scheduler <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>