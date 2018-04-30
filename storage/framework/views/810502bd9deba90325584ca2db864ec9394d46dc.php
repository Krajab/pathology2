<?php $__env->startSection('content'); ?>


<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="<?php echo e(url('/home')); ?>">home</a></li>
		<li><a href="<?php echo e(url('/show')); ?>">settings</a></li>
	  <li class="active">Specimen Types</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-add"></span>
		List of Specimen Types   
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("specimentype/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				  New Specimen Type
			</a>
			
		</div>
	
	<div class="panel-body">
		<div class="table-responsive">
		  <table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="personnel" data-form="deleteForm">
			<thead>
				<tr>
					<th>#</th>
					<th>Names</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $row=1; ?>
					<?php foreach($specimentype as $specimentype): ?>
					<tr>
					<th> <?php echo e($row); ?> </th>
					<td><?php echo e($specimentype->name); ?></td>
					<td><?php echo e($specimentype->description); ?></td>										      	
					<td>
						<!-- show the specimentype (uses the show method found at GET /specimentype/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("specimentype/" . $specimentype->id)); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							View
						</a>

						<!-- edit this specimentype (uses the edit method found at GET /specimentype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("specimentype/" . $specimentype->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
						</a>
						<button class="btn btn-sm btn-danger delete-item-link" 
							data-toggle="modal" data-target=".confirm-delete-modal"	
							data-id='<?php echo e(URL::to("specimentype/" . $specimentype->id . "/destroy")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							Delete
						</button>


				<!-- 		<?php echo e(Form::open(array('url' => 'specimentype/' . $specimentype->id, 'class' => 'pull-right form-delete'))); ?>

							<?php echo e(Form::hidden('_method', 'DELETE')); ?>

							<?php echo e(Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))); ?>

						<?php echo e(Form::close()); ?> -->
							
					</td>
							</tr>
					<?php $row++; ?>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>