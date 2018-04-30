<?php $__env->startSection('content'); ?>
<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="<?php echo e(url('/home')); ?>">home</a></li>
		<li><a href="<?php echo e(url('/show')); ?>">settings</a></li>
	  <li class="active">Test Type</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		<?php echo e(trans('Create Test Type')); ?>

	</div>
	<?php echo e(Form::open(array('route' => array('testtype.index'), 'id' => 'form-create-testtype'))); ?>

	<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
		
		<?php if($errors->all()): ?>
			<div class="alert alert-danger">
				<?php echo e(HTML::ul($errors->all())); ?>

			</div>
		<?php endif; ?>
	
		<div class="form-group">
			<?php echo e(Form::label('name', Lang::choice('Name',1))); ?>

			<div class="col-lg-3">
			<?php echo e(Form::text('name', ('name'), array('class' => 'form-control'))); ?>

			</div>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('description', trans('Description'))); ?>

			<div class="col-lg-3">
			<?php echo e(Form::textarea('description', ('description'), 
				array('class' => 'form-control', 'rows' => '2'))); ?>

			</div>
		</div>
		<div class="form-group">
			<?php echo e(Form::label('test_category_id', Lang::choice('Test category',1))); ?>

			<?php echo e(Form::select('test_category_id', array(0 => '')+$testcategory->lists('name', 'id'),
				Input::old('test_category_id'),	array('class' => 'form-control'))); ?>

		</div>
		<div class="form-group">
				<?php echo e(Form::label('specimen_types', trans('Select specimen types'))); ?>

				<div class="form-pane panel panel-default">
					<div class="container-fluid">
						<?php 
							$cnt = 0;
							$zebra = "";
						?>
						<?php foreach($specimentypes as $key=>$value): ?>
							<?php echo e(($cnt%4==0)?"<div class='row $zebra'>":""); ?>

							<?php
								$cnt++;
								$zebra = (((int)$cnt/4)%2==1?"row-striped":"");
							?>
							<div class="col-md-3">
								<label  class="checkbox">
									<input type="checkbox" name="specimentypes[]" value="<?php echo e($value->id); ?>" /><?php echo e($value->name); ?>

								</label>
							</div>
							<?php echo e(($cnt%4==0)?"</div>":""); ?>

						<?php endforeach; ?>
					</div>
				</div>
		</div>
	</div>

	
</div>










<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>