<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <div id="block">
                <div id="inside-block">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="col-xs-8">
                <div id="block">
                    <div id="inside-block">
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
            </div>
        </div>

    </div>
</div>




<?php $this->endContent(); ?>
