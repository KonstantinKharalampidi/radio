<?php
/* @var $this SchedulerController */
/* @var $model Scheduler */

$this->breadcrumbs=array(
	'Schedulers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Scheduler', 'url'=>array('index')),
	array('label'=>'Create Scheduler', 'url'=>array('create')),
	array('label'=>'Update Scheduler', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scheduler', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scheduler', 'url'=>array('admin')),
);
?>

<h1>View Scheduler #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'descr',
		'date',
		'time',
	),
)); ?>
