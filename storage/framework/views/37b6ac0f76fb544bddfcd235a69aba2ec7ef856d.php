
<?php $__env->startSection('title', "Editar reseña"); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <h5>Escribir reseña <?php echo e($review->product->name); ?></h5>
                        <form action="<?php echo e(url('/update-review')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="review_id" value="<?php echo e($review->id); ?>">
                            <textarea class="form-control" rows="5" name="user_review" placeholder="Escribe tu reseña aqui"><?php echo e($review->user_review); ?></textarea>
                            <button type="submit" clasS="btn btn-danger mt-3">Editar reseña</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/frontend/reviews/edit.blade.php ENDPATH**/ ?>