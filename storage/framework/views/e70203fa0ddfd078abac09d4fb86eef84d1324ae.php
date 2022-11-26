
<?php $__env->startSection('title'); ?>
    Mis ordenes
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header bg-danger">
                    <h4>Orden
                        <a href="<?php echo e(url('my-orders')); ?>" class="btn btn-warning text-white float-end">Regresar</a>
                    </h4>
                </div>

                <div class="card-body">

                <div class="row">
                    <div class="col-md-6 order-details">
                        <h4>Detalles de compra</h4>
                        <hr>
                            <label for="">Nombre</label>
                            <div class="border p-2"> <?php echo e($orders->fname); ?> </div>
                            <label for="">Apellidos</label>
                            <div class="border p-2"> <?php echo e($orders->lname); ?> </div>
                            <label for="">Correo</label>
                            <div class="border p-2"> <?php echo e($orders->email); ?> </div>
                            <label for="">Telefono</label>
                            <div class="border p-2"> <?php echo e($orders->phone); ?> </div>
                            <label for="">Direccion</label>
                            <div class="border p-2"> 
                                <?php echo e($orders->address1); ?>, 
                                <?php echo e($orders->address2); ?>,
                                <?php echo e($orders->city); ?>,
                                <?php echo e($orders->state); ?>,
                                <?php echo e($orders->country); ?>,
                              </div>
                              <label for="">Codigo Postal</label>
                            <div class="border p-2"> <?php echo e($orders->pincode); ?> </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Detalles de orden</h4>
                        <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php $__currentLoopData = $orders->orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->products->name); ?></td>
                                            <td><?php echo e($item->qty); ?></td>
                                            <td><?php echo e($item->price); ?></td>
                                            <td>
                                                <img src="<?php echo e(asset('assets/uploads/products/'.$item->products->image)); ?>" width="50px" alt="Imagen de producto">
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                </tbody>
                            </table>
                            <h4 class="px-2">Total: <span class="float-end"><?php echo e($orders->total_price); ?></span> </h4>
                            <h6 class="px-2">Metodo de pago: <?php echo e($orders->payment_mode); ?></h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/frontend/orders/view.blade.php ENDPATH**/ ?>