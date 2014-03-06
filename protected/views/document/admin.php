<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Document', 'url'=>array('index')),
	array('label'=>'Create Document', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#document-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery');
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery-ui.js', CClientScript::POS_END);
$cs->registerScriptFile($baseUrl.'/js/dialog.js', CClientScript::POS_END);
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>-->




<?php    Yii::app()->bootstrap->register(); ?>
<h1>Manage Documents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<!-- <script>
    $(function() {
        $( "#dialog" ).dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });
        $( "#opener" ).click(function() {
            $( "#dialog" ).dialog( "open" );
        });
    });
</script>

-->
    <div id="dialog" title="Basic dialog">
        <?php

        $this->widget('NTable', array(
            'id'=>'document-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'addingHeaders' => array(
                array(

                    array('text'=>'Инфо','colspan'=>3,'options'=>array('class'=>'another-header-class')),
                    array('text'=>'О файле','colspan'=>4,'options'=>array('class'=>'yet-another-class'))
                ),
            ),
            'columns'=>array(

                'id',
                'doc_name',
                'doc_file',
                'doc_type',
                'doc_size',
                'summary',
                /*
                'up_dated',
                */
                array(
                    'class'=>'CButtonColumn',
                ),

            ),

        ));
        ?>    </div>
    <button id="opener">Open Dialog</button>


