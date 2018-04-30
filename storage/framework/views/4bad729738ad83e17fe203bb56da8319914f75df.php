    <link rel="stylesheet" href="<?php echo e(URL::asset('css/login.css')); ?>" >

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">

            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

            
            <div class="form-login">
                <p class="login-img"><p style="text-align:center"><img src="img/tissue.jpg" alt="" width="150" height="120"> </p>
            <h4><b>Laboratory Information Management System (Pathology Lab) </b></h4>

                <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                    <div>
                        <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="<?php echo e(old('username')); ?>">

                            <?php if($errors->has('username')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('username')); ?></strong>
                                </span>
                            <?php endif; ?>
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <div>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                             Login <i class="icon ion-log-in"></i>
                        </button>

                        <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                    </div>
                </div>

            </div>
        </form>

        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>