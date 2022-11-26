

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
        <h1>Nueva Categoria</h1>
        </div>
        <div class="card-body">
           <form action="<?php echo e(url('insert-category')); ?>" method="POST" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
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
                    <label for="">Descripción</label>
                     <textarea name="description"  rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox"  name="popular">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GTIM\Desktop\VERSION BETA\ALFA\pincerolas\resources\views/admin/category/add.blade.php ENDPATH**/ ?>