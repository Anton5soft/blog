<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>

<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/dialog.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery-ui.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile($baseUrl.'/js/jquery-ui.css');
?>
<div>
<div id="dialog" title="Basic dialog">

    <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
        'dataProvider'=>$model->search(),
        'template'=>"{items}",
        'columns'=>array(
            array(
                'name'=>'title',
                'type'=>'raw',
                'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
            ),
            array(
                'name'=>'status',
                'value'=>'Lookup::item("PostStatus",$data->status)',
                'filter'=>Lookup::items('PostStatus'),
            ),
            array(
                'name'=>'create_time',
                'type'=>'datetime',
                'filter'=>false,
            ),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'htmlOptions'=>array('style'=>'width: 50px'),
            ),
        ),
    )); ?>
</div>

<button id="opener">Open Dialog</button>


</div>



