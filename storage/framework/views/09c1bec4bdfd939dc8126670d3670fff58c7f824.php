<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Pincerolas ADMIN')); ?></title>

    <!-- Scripts -->
 
     <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->

    <link href="<?php echo e(asset('admin/css/material-dashboard.css?v=3.0.4')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/custom.css')); ?>" rel="stylesheet">

</head>
<body class="g-sidenav-show  bg-gray-200">



<div class="wrapper">
    <?php echo $__env->make('layouts.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
    <?php echo $__env->make('layouts.inc.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
        <br>
<div>
    <center>
        <H1>Bienvenido</H1>
</center>
</div>

        </div>
        <?php echo $__env->make('layouts.inc.adminfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>



  
<script src="<?php echo e(asset('public/admin/js/popper.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('public/admin/js/bootstrap.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('public/admin/js/perfect-scrollbar.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('public/admin/js/smooth-scrollbar.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('public/admin/js/chartjs.min.js')); ?>" defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if(session('status')): ?>
<script>
    swal("<?php echo e(session('status')); ?>");
</script>
<?php endif; ?>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/layouts/admin.blade.php ENDPATH**/ ?>