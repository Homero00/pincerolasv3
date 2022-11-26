
<?php $__env->startSection('title'); ?>
    Bienvenido a Pincerolas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.inc.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Productos Nuevos</h2>
            <div class="owl-carousel featured-carousel owl-theme">
<!-- Video 16 coloca el precio antiguo y el precio nuevo minuto 13-->
              <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="card">
                            <img src="<?php echo e(asset('assets/uploads/products/'.$prod->image)); ?>" alt="Imagen de producto">
                            <div class="card-body">
                                <h5><?php echo e($prod->name); ?></h5>
                                <small><?php echo e($prod->selling_price); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
                
            </div>
        </div>
    </div>



    <div class="mb-6"></div><!-- margin -->
                
                

                <div class="mb-3"></div><!-- margin -->

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i style="color:#FF4B4B; border-color:#FF4B4B;" class="icon-star"></i>

                            <div class="feature-box-content">
                                <h3>Sobre nosotros</h3>
                                
                                <a href="" class="btn btn-outline-danger">Conocenos</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                    
                    <div class="col-sm-6 col-md-4">
                        <div  class="feature-box feature-box-simple text-center">
                            <i style="color:#FF4B4B; border-color:#FF4B4B;" class="icon-reply"></i>

                            <div class="feature-box-content">
                                <h3>Politicas y privacidad </h3>
                                
                                <a href="" class="btn btn-outline-danger">Ver politicas y privacidad</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4">
                        <div class="feature-box feature-box-simple text-center">
                            <i style="color:#FF4B4B; border-color:#FF4B4B;" class="icon-paper-plane"></i>

                            <div class="feature-box-content">
                                <h3>Envios en el area metropolitana</h3>
                                
                                <a href="" class="btn btn-outline-danger">Informacion sobre envios</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .col-lg-9 -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/frontend/index.blade.php ENDPATH**/ ?>