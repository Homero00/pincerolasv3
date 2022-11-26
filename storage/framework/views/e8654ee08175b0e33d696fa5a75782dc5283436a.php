

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1>Categorias</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>ACT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->description); ?></td>

                        <td>
                            <img src="<?php echo e(asset('assets/uploads/category/'.$item->image)); ?>" class="cate-image" alt="Image here"> 
                        </td>

                        <td>
                            <a href="<?php echo e(url('edit-category/'.$item->id)); ?>" class="btn btn-primary">Editar</a>
                            <a class="btn btn-danger" href="<?php echo e(url('delete-category/'.$item->id)); ?>">Eliminar</a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/category/index.blade.php ENDPATH**/ ?>