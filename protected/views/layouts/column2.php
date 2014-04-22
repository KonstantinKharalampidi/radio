<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span8 offset1">
		<?php echo $content; ?>
    </div>
    <div class="span3">
            <div id="sidebar">
            <?php
                    $this->beginWidget('zii.widgets.CPortlet', array(
                            'title'=>'Управление',
                    ));
                    $this->widget('zii.widgets.CMenu', array(
                            'items'=>$this->menu,
                            'htmlOptions'=>array('class'=>'operations'),
                    ));
                    $this->endWidget();
            ?>
            </div><!-- sidebar -->
    </div>
<?php $this->endContent(); ?>
</div>