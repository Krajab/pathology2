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
		Lab Test Categories   
			<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testcategory/create")); ?>" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				  Create New Category
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
					<?php foreach($testcategory as $testcategory): ?>
					<tr>
					<th> <?php echo e($row); ?> </th>
					<td><?php echo e($testcategory->name); ?></td>
					<td><?php echo e($testcategory->description); ?></td>										      	
					<td>
						<!-- show the testcategory (uses the show method found at GET /testcategory/{id} -->
						<a class="btn btn-sm btn-success" href="<?php echo e(URL::to("testcategory/" . $testcategory->id)); ?>" >
							<span class="glyphicon glyphicon-eye-open"></span>
							View
						</a>

						<!-- edit this testcategory (uses the edit method found at GET /testcategory/{id}/edit -->
						<a class="btn btn-sm btn-info" href="<?php echo e(URL::to("testcategory/" . $testcategory->id . "/edit")); ?>" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
						</a>
						<button class="btn btn-sm btn-danger delete-item-link" 
							data-toggle="modal" data-target=".confirm-delete-modal"	
							data-id='<?php echo e(URL::to("testcategory/" . $testcategory->id . "/destroy")); ?>'>
							<span class="glyphicon glyphicon-trash"></span>
							Delete
						</button>
							
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