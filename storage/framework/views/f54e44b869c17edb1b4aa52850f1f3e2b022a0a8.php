<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pathology Laboratory</title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/toastr.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/custom.css')); ?>">


    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
</head>
<body id="app-layout" class="side_nav_hover">
        <?php if(Auth::check()): ?>
       

        <!-- header -->
            <header class="navbar navbar-fixed-top">
                <header class="navbar navbar-fixed-top" role="banner" style="background-color:green;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h4><b>Hi ... <i><?php echo e(isset (Auth::user()->username) ? Auth::user()->username : Auth::user()->username); ?> <!-- Welcome to Pathology Laboratory --></i></b></h4>
                    </div>`
                <!-- <ul class="nav navbar-nav navbar-right">
                     <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <li><a href="<?php echo e(URL::route('user.index')); ?>"><span class="ion-key"><font size="2"> Access Control </li></a></font>
                     <span class="caret"></span>
        </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#"><font size="3">Users</a></font></li>
                     <li class="divider"></li>
            <li><a href="<?php echo e(url('/user.index')); ?>"><font size="3">Roles </a></font></li>
                     <li class="divider"></li>
            <li><a href="#"><font size="3">Assign Roles </a></font></li>
                   <li class="divider"></li>
            <li><a href="#"><font size="3">Permissions </a></font></li>
              <li class="divider"></li>
              </ul> -->
                   <!--  </li> -->
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo e(url('/home')); ?>"><span class="ion-home"></span> Home :: </a></li>
                   <li class="divider"></li>
                  <li><a href="<?php echo e(url('/logout')); ?>"><span class="ion-log-out"></span> Logout :: <?php echo e(isset (Auth::user()->username) ? Auth::user()->username : Auth::user()->username); ?></a></li>

                </ul>
                </div>
            </header>    
            </header>
        <!-- end header -->

     
        <?php endif; ?>

        <!-- main content -->
            <div id="main_wrapper">
            <div class="page_content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $__env->yieldContent("content"); ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        <?php if(Auth::check()): ?>
        
    <!--     <nav id="side_nav">
            <ul>
                <li>
                    <a href="<?php echo e(url('home')); ?>"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
                </li>
        </nav> -->
        




        <?php endif; ?>


    <!-- JavaScripts -->
    <script type="text/javascript" src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/validator.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/dataTables.bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?> "></script>

    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.easing.1.3.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/tinynav.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/perfect-scrollbar-0.4.8.with-mousewheel.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/common.js')); ?> "></script>

    <script src="<?php echo e(URL::asset('js/datatables.min.js')); ?>" ></script>
    <script src="<?php echo e(URL::asset('js/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/moment.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/bootstrap-datepicker.min.js')); ?>"></script>

<script>
  <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
    switch(type){
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>");
            break;

        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>");
            break;

        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;

        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
  <?php endif; ?>

   //activate select2
    $('select').select2({
        allowClear: false,
        minimumResultsForSearch: -1,
        placeholder: function(){
            $(this).data('placeholder');
        }
    });

</script>

<?php echo $__env->yieldContent("footer"); ?>
<?php echo $__env->yieldContent('page-js-script'); ?>
</body>
</html>
