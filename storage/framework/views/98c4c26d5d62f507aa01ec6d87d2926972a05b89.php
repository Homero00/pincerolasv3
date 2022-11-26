
<?php $__env->startSection('title', "Escribir reseña"); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php if($verified_purchase->count() > 0): ?>
                        <h5>Escribir reseña <?php echo e($product->name); ?></h5>
                        <form action="<?php echo e(url('/add-review')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <textarea class="form-control" rows="5" name="user_review" placeholder="Escribe tu reseña aqui"></textarea>
                            <button type="submit" clasS="btn btn-danger mt-3">Publicar</button>
                        </form>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            <h5>No puedes publicar reseñas</h5>
                            <p>Necesitas comprar el producto para dejar una reseña</p>
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-warning mt-3">Ir al inicio</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/frontend/reviews/index.blade.php ENDPATH**/ ?>