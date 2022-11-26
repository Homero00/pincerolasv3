

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1>Usuarios registrados</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                         <th>Telefono</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name.' '.$item->lname); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td>
                            <a href="<?php echo e(url('view-user/'.$item->id)); ?>" class="btn btn-primary">Ver</a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/users/index.blade.php ENDPATH**/ ?>