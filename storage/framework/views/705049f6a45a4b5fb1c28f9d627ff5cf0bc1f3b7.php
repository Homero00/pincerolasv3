

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
        <h1>Editar Producto</h1>
        </div>
        <div class="card-body">
           <form action="<?php echo e(url('update-product/'.$products->id)); ?>" method="POST" enctype="multipart/form-data">
           <?php echo method_field('PUT'); ?>
           <?php echo csrf_field(); ?>
           <div class="col-md-12 mb-3">

                <select class="form-select" >
                    <option value=""><?php echo e($products->category->name); ?></option>
                </select>

           </div>
           <div class="div-row">
                <div class="col-md-6 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" value="<?php echo e($products->name); ?>" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="<?php echo e($products->slug); ?>" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Pequeña Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control"><?php echo e($products->small_description); ?></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Descripcion</label>
                     <textarea name="description"  rows="3" class="form-control"><?php echo e($products->description); ?></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Precio Original</label>
                     <input name="original_price" class="form-control" value="<?php echo e($products->original_price); ?>" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Precio de venta</label>
                     <input name="selling_price" class="form-control" value="<?php echo e($products->selling_price); ?>" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">TAX</label>
                     <input name="tax" class="form-control" value="<?php echo e($products->tax); ?>" type="number">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Cantidad</label>
                     <input name="qty" class="form-control" value="<?php echo e($products->qty); ?>" type="number">
                </div>


                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" <?php echo e($products->status == "1" ? 'checked' : ''); ?> name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" <?php echo e($products->trending == "1" ? 'checked' : ''); ?> name="trending">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Titulo meta</label>
                    <input type="text" class="form-control" value="<?php echo e($products->meta_title); ?>" name="meta_title">
                </div>
                       <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea type="text" class="form-control" name="meta_keywords"><?php echo e($products->meta_keywords); ?></textarea>
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">Descripción Meta</label>
                    <textarea name="meta_description"  rows="3" class="form-control"><?php echo e($products->meta_description); ?></textarea>
                </div>
                    <?php if($products->image): ?>
                        <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" alt="">
                    <?php endif; ?>
                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control">
                </div> 
                <br>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
           </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>