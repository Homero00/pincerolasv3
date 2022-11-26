
<?php $__env->startSection('title'); ?>
   Categorias
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Todas las categorias
                    </h1>
                    <div class="row">

                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 mb-3">
                            <a href="<?php echo e(url('view-category/'.$cate->slug)); ?>">
                            <div class="card">
                                <img src="<?php echo e(asset('assets/uploads/category/'.$cate->image)); ?>" alt="Imagen de categorias">
                                <div class="card-body">
                                    <h5><?php echo e($cate->name); ?></h5>
                                    <p>
                                        <?php echo e($cate->description); ?>

                                    </p>
                                </div>
                            </div></a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/frontend/category.blade.php ENDPATH**/ ?>