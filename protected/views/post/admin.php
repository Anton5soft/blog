<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
'id'=>'mydialog',
// additional javascript options for the dialog plugin
'options'=>array(
    'show'=>'blind',
    'hide'=>'blind',
'title'=>'CGridView',
'autoOpen'=>false,
),
));

 $this->widget('bootstrap.widgets.TbGridView', array(
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
));

$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('Open Admin', '#', array(
'onclick'=>'$("#mydialog").dialog("open"); return false;',
));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Dialog - Animation</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#dialog" ).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "blind",
                    duration: 0
                }
            });

            $( "#opener" ).click(function() {
                $( "#dialog" ).dialog( "open" );
            });
        });
    </script>
</head>
<body>

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


</body>
</html>


