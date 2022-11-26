
<?php $__env->startSection('title'); ?>
<?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h5 class="mb-0">Categoria / <?php echo e($category->name); ?></h5>
    </div>
</div> 

<div class="py-5">
        <div class="container">
            <div class="row">
                <h2><?php echo e($category->name); ?></h2>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a href="<?php echo e(url('category/'.$category->slug.'/'.$prod->slug)); ?>">
                            <img src="<?php echo e(asset('assets/uploads/products/'.$prod->image)); ?>"  class="w-100" alt="Imagen de producto">
                            <div class="card-body">
                                <h5><?php echo e($prod->name); ?></h5>
                                <small><?php echo e($prod->selling_price); ?></small>
                            </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
                
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/frontend/products/index.blade.php ENDPATH**/ ?>