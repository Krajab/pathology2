<?php $__env->startSection('content'); ?>

<br>
<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="<?php echo e(url('/home')); ?>">home</a></li>
		<li><a href="<?php echo e(url('specimentype')); ?>">settings</a></li>
	  <li class="active">Specimen Types</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon"></span>
        Create Specimen Types
    </div>
    <div class="panel-body">
		
		 <?php echo Form::open(array('url' => 'specimentype', 'id' => 'form-create-specimentype')); ?>


                <?php echo e(csrf_field()); ?>


            <fieldset>

			<div class="form-group">
               <?php echo e(Form::label('name', 'Specimen Name', ['class' => 'col-md-2'])); ?>

                    <div class="col-lg-3">
                		<?php echo e(Form::text('name',null,['class' => 'form-control','placeholder' => 'Specimen Type', 'required' => 'true'])); ?>

                    </div>
            </div><br><br>
			<div class="form-group">
               <?php echo e(Form::label('description', 'Description', ['class' => 'col-lg-2'])); ?>

                    <div class="col-lg-3">
                		<?php echo e(Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Description'])); ?>

                    </div>
            </div><br><br>
			<div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <a href="<?php echo e(URL::route('specimentype.index')); ?>" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

		<?php echo Form::close(); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>