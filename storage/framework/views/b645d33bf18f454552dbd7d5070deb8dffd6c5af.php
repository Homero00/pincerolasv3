

<?php $__env->startSection('title'); ?>
    Ordenes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
             
        <div class="card">
                <div class="card-header">
                    <h4>Historial de compras</h4>
                    <a href="<?php echo e('order-history'); ?>" class="btn btn-warning float-end">Ventas Completas</a>
                </div>

                <div class="card-body">

                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Fecha de orden</th>
                        <th>Numero de tracking</th>
                        <th>Total</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                            <td><?php echo e(date('d-m-y', strtotime($item->created_at))); ?></td>
                            <td><?php echo e($item->tracking_no); ?></td>
                            <td><?php echo e($item->total_price); ?></td>
                            <td><?php echo e($item->status == '0' ?'Pendiente' : 'Entregada'); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/view-order/'.$item->id)); ?>" class="btn btn-secondary">Ver orden</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                         </tbody>
                     </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>