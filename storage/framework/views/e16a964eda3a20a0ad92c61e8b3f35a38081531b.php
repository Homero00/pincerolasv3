<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>

    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

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

    <link href="<?php echo e(asset('frontend/css/bootstrap5.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>

</head>
<body class="g-sidenav-show  bg-gray-200">

<?php echo $__env->make('layouts.inc.frontnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    
        <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
        <div>
   
</div>

<script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery-3.6.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/checkout.js')); ?>"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if(session('status')): ?>
<script>
    swal("<?php echo e(session('status')); ?>");
</script>
<?php endif; ?>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/layouts/front.blade.php ENDPATH**/ ?>