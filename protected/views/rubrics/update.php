<?php
/* @var $this RubricsController */
/* @var $model Rubrics */

$this->breadcrumbs=array(
	'Rubrics'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rubrics', 'url'=>array('index')),
	array('label'=>'Create Rubrics', 'url'=>array('create')),
	array('label'=>'View Rubrics', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rubrics', 'url'=>array('admin')),
);
?>

<h1>Update Rubrics <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>