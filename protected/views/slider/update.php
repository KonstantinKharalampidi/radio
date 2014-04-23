<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Slider', 'url'=>array('index')),
	array('label'=>'Create Slider', 'url'=>array('create')),
	array('label'=>'View Slider', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>

<h1>Update Slider <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>