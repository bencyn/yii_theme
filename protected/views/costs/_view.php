<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_name')); ?>:</b>
	<?php echo CHtml::encode($data->cost_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_amount')); ?>:</b>
	<?php echo CHtml::encode($data->cost_amount); ?>
	<br />


</div>