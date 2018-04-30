<?php $__env->startSection('content'); ?>



<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="<?php echo e(url('/home')); ?>">home</a></li>
		<li><a href="<?php echo e(url('/show')); ?>">settings</a></li>
	  <li class="active">Test Type</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-add"></span>
		List of Lab Tests   
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testtype/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				  Create New Test type
			</a>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th><?php echo e(Lang::choice('Name',1)); ?></th>
					<th><?php echo e(trans('Description')); ?></th>
					<th><?php echo e(trans('Targeted Turnaround Time')); ?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>

</div>	


<?php $__env->stopSection(); ?>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>