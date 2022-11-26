
<?php $__env->startSection('title', $products->name); ?>

<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="<?php echo e(url('/add-rating')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Califica <?php echo e($products->name); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
            <div class="modal-body">     
            <div class="rating-css">
                                <div class="star-icon">
                                    <?php if($user_rating): ?>
                                        <?php for($i =1; $i<= $user_rating->stars_rated; $i++): ?> 
                                        <input type="radio" value="<?php echo e($i); ?>" name="product_rating" checked id="rating<?php echo e($i); ?>">
                                        <label for="rating<?php echo e($i); ?>" class="fa fa-star"></label>
                                        <?php endfor; ?>
                                        <?php for($j =  $user_rating->stars_rated+1; $j <= 5; $j++): ?>
                                        <input type="radio" value="<?php echo e($j); ?>" name="product_rating" id="rating<?php echo e($j); ?>">
                                        <label for="rating<?php echo e($j); ?>" class="fa fa-star"></label>
                                        <?php endfor; ?> 

                                    <?php else: ?>
                                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="product_rating" checked id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="product_rating" checked id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="product_rating" checked id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="product_rating" checked id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Calificar</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>



<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h5 class="mb-0">Categoria / <?php echo e($products->category->name); ?> / <?php echo e($products->name); ?> </h5>
    </div>
</div> 

<div class="container">
    <div class="shadow product_data">
        <div class="">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        <?php echo e($products->name); ?>

                        <?php if($products->trending == '1'): ?>
                        <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag" for="">Trending</label>
                        <?php endif; ?>
                    </h2>
                    <hr>
                    <label classs="me-3">Precio <s>MXN <?php echo e($products->original_price); ?></s></label>
                    <label classs="me-3">Descuento : MXN <?php echo e($products->selling_price); ?></label>
                    <?php $ratenum = number_format($rating_value)  ?>
                    <div class="rating">
                        <?php for($i =1; $i<= $ratenum; $i++): ?> 
                         <i class="fa fa-star checked"></i>
                         <?php endfor; ?>
                        <?php for($j = $ratenum+1; $j <= 5; $j++): ?>

                        <i class="fa fa-star"></i>

                        <?php endfor; ?>
                        <span>
                            <?php if($ratings->count() > 0): ?>
                            <?php echo e($ratings->count()); ?> Calificaciones
                            <?php else: ?>
                            No calificado
                            <?php endif; ?>
                        

                        </span>

                    </div>
                    <span for="me-3">Calificaciones: <?php echo e($ratings->count()); ?></span>
                    <p class="mt-3">
                        <?php echo $products->small_description; ?>

                    </p>
                    <hr>
                        <?php if($products->qty > 0): ?>
                            <label class="badge bg-success">Disponible</label>
                        <?php else: ?>
                            <label class="badge bg-danger">No disponible</label>
                        <?php endif; ?>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="<?php echo e($products->id); ?>" class="prod_id">
                            <label for="Quantity">Cantidad</label>
                            <div class="input-group text-center mb-3" style="width:110px">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="1" class="form-control qty-input text-center" />
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br/>
                            <?php if($products->qty > 0): ?>
                            <button type="button" class="btn btn-danger me-3 addToCartBtn float-start">Añadir al carrito <i class="fa fa-shopping-cart"></i></button>
                            <?php endif; ?>
                            <button type="button" class="btn btn-info me-3 float-start">Lista de deseos <i class="fa fa-heart"></i></button>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                    <hr>
                <h5>Descripción</h5>
                    <p class="mt-3">
                        <?php echo $products->description; ?>

                    </p>                    
                </div>
                <hr>
                </div>
                    <div class="row">

                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Calificaciones
                                </button>
                                <a href="<?php echo e(url('add-review/'.$products->slug.'/userreview')); ?>" class="btn btn-primary">
                                Escribir reseña
                                </a>
                            </div>
                            <!-- minuto 24 -->
                            <div class="col-md-8">
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="user-review">
                                <label for=""><?php echo e($item->user->name .' '. $item->user->lname); ?></label>
                                <?php if($item->user_id == Auth::id()): ?>
                                <a href="<?php echo e(url('edit-review/'.$products->slug.'/userreview')); ?>">Editar</a>
                                <?php endif; ?>
                                <br>



                                <?php if($item->rating): ?>
                                <?php
                                $user_rated = $item->rating->stars_rated
                                ?>
                                    <?php for($i =1; $i<= $user_rated; $i++): ?> 
                                    <i class="fa fa-star checked"></i>
                                    <?php endfor; ?>
                                    <?php for($j = $user_rated+1; $j <= 5; $j++): ?>
                                    <i class="fa fa-star"></i>
                                    <?php endfor; ?>
                                <?php endif; ?>
                                <small>Reseña <?php echo e($item->created_at->format('D M Y')); ?></small>
                                <p><?php echo e($item->user_review); ?></p>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          
                    </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/frontend/products/view.blade.php ENDPATH**/ ?>