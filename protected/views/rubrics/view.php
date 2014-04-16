<?php
/* @var $this RubricsController */
/* @var $model Rubrics */

$this->breadcrumbs=array(
	'Rubrics'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Rubrics', 'url'=>array('index')),
	array('label'=>'Create Rubrics', 'url'=>array('create')),
	array('label'=>'Update Rubrics', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rubrics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rubrics', 'url'=>array('admin')),
);
?>

<h1>View Rubrics #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'descr',
		'time',
		'day',
	),
)); ?>
