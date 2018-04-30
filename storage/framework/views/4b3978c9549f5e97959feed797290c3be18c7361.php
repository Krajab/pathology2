<?php $__env->startSection('content'); ?>

<br>
<div class="panel panel-default row" style="width:97%">
<div class="panel-body row">

<div class="btn-group container col-md-4">
        <a href="<?php echo e(URL::route('district.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Click to view summeries">
            <div class="panel panel-info">
            <span class="ion-speedometer" style="color:orange; font-size:80px" align="center"></span> <br><font  color='orange' size='5' <span class="nav_title"  >DASHBOARD</span></font>
            </div>
        </a>
</div>

<div class="btn-group container col-md-4">
        <a class="link-tip" href="<?php echo e(URL::route('specimen.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Click to recieve and view specimens">
            <div class="panel panel-info">
            <span class="ion-erlenmeyer-flask" style="color:orange; font-size:80px" align="center"></span> <br><font  color='orange' size='5' <span class="nav_title">SPECIMENS</span></font>
            </div>
        </a>
</div>

<div class="btn-group container  col-md-4" >
        <a href="<?php echo e(URL::route('district.index')); ?>"  data-toggle="tooltip" data-placement="bottom" title="Click to manage patients">
            <div class="panel panel-info" >
            <span class="ion-ios-people" style="color:orange; font-size:80px" align="center"></span> <br><font  color='orange' size='5' <span class="nav_title">PATIENTS</span> </font>
            </div>
        </a>
</div>

<div class="btn-group container col-md-4">
        <a href="<?php echo e(URL::route('user.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Click to manage results">
            <div class="panel panel-info">
            <span class="ion-ios-paper" style="color:black; font-size:80px;" align="center"></span> <br><font color='black' size='5'<span class="nav_title">REPORTS</span></font>
            </div>
        </a>
</div>

<div class="btn-group container col-md-4">
        <a class="link-tip" href="<?php echo e(URL::route('show.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Click to manage Barcodes, hospitals and specimens">
            <div class="panel panel-info">
            <span class="con ion-gear-b" style="color:black; font-size:80px" align="center"></span> <br><font color="black" size='5'<span class="nav_title">SETTINGS</span></font>
            </div>
        </a>
</div>

<div class="btn-group container col-md-4">
        <a href="<?php echo e(URL::route('user.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Click to manage user accounts and other Lab Configurations e.g creating Lab sections and new test type">
            <div class="panel panel-info">
            <span class="ion-icon ion-key" style="color:black; font-size:80px" align="center"></span> <br><font  color='black' size='5' <span class="nav_title"   >ACCESS CONTROL</span></font>
            </div>
        </a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>