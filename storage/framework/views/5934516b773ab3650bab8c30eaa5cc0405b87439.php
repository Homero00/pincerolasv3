

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
        <h1>Nuevo Producto</h1>
        </div>
        <div class="card-body">
           <form action="<?php echo e(url('insert-product')); ?>" method="POST" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
           <div class="col-md-12 mb-3">

                <select class="form-select" name="cate_id">
                    <option value="">Seleccionar Categoria</option>
                 
                   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

           </div>
           <div class="div-row">
                <div class="col-md-6 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Pequeña Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Precio Original</label>
                     <input name="original_price" class="form-control" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Precio de venta</label>
                     <input name="selling_price" class="form-control" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">TAX</label>
                     <input name="tax" class="form-control" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Cantidad</label>
                     <input name="qty" class="form-control" type="number">
                </div>


                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox"  name="trending">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Titulo meta</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
                       <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords">
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">Descripción Meta</label>
                    <textarea name="meta_description"  rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control">
                </div> 
                <br>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Subir Nueva</button>
                </div>
            </div>
           </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/product/add.blade.php ENDPATH**/ ?>