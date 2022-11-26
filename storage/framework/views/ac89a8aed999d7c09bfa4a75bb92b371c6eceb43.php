

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1>Productos</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Nombre</th>
                         <th>Precio original</th>
                         <th>Precio de venta</th>
                         <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->category->name); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->original_price); ?></td>
                        <td><?php echo e($item->selling_price); ?></td>

                        <td>
                            <img src="<?php echo e(asset('assets/uploads/products/'.$item->image)); ?>" class="cate-image" alt="Image here"> 
                        </td>

                        <td>
                            <a href="<?php echo e(url('edit-product/'.$item->id)); ?>" class="btn btn-primary">Editar</a>
                            <a class="btn btn-danger" href="<?php echo e(url('delete-product/'.$item->id)); ?>">Eliminar</a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/product/index.blade.php ENDPATH**/ ?>