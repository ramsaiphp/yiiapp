<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'brands_brand_id'); ?>
		<?php echo $form->dropDownList($model,'brands_brand_id', CHtml::listData(Brands::model()->findAll(),'brand_id','brand_name')); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); 
		
				$this->widget('zii.widgets.jui.CJuiDatePicker', 
				array(
				'attribute' =>'created_date',
				'name'=>'created_date',
				'value'=>$model->created_date,
				'model'=> $model,
				'options'=> array(
					'showAnim' => 'true',
					'showButtonPanel' => 'true',
					'dateformat'=> 'yy-m-d'
					),
				'htmlOptions' => array('style' => ''),
				));
				?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'selling'); ?>
		<?php echo $form->textField($model,'selling',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'selling'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->