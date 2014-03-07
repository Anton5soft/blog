<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>
<?php Yii::app()->bootstrap->register(); ?>
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>$items

)); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
<?php  foreach (glob("images/*") as $img) {

    echo "<img src ='".Yii::app()->request->baseUrl."/".$img."' />";
} ?>
