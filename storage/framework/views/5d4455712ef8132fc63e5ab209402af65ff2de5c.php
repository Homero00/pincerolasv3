<style>


.hr:hover {
            background-color: #FF4B4B;
            color:#FFFFFF;
            
        
            
        }
        .ho:hover {
            background-color: #FF4B4B !important;
            color:#FFFFFF;
            
        
        }
        .cr:hover {
            
            color:black !important;
            
        
        }
        .hr{
            font-size:2vh;
        }

        a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        a, a:hover {
            text-decoration: none !important; }
    </style>

<nav class="navbar navbar-expand-lg"  style="background-color: #FF4B4B;">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">  <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="devctheme Logo" width="200" height="200"></a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        <li>
            <a class="nav-link active" href="<?php echo e(url('category')); ?>">Categorias</a>
        </li>
        <li>
            <a class="nav-link active" href="<?php echo e(url('cart')); ?>">Carrrito
               <span class="badge badge-pill bg-primary cart-count">0</span></a>
           
        </li>
      
                        <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    
                                  <a class="nav-link active" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar sesión')); ?></a>
                                
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    
                                        <a class="nav-link active" href="<?php echo e(route('register')); ?>"><?php echo e(__('Resgistrate')); ?></a>
                                  
                                <?php endif; ?>
                            <?php else: ?>
  
                            <div class="dropdown">
                                  <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?>

                                  </button>
                                    <ul class="dropdown-menu">
                                      <li> <a href="<?php echo e(url('my-orders')); ?>" class="dropdown-item hr">Mi historial</a></li>
                                      <li>
                                        
                                      </li>
                                      <li>
                                          <a  href="<?php echo e(route('logout')); ?>"  class="dropdown-item hr" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          <?php echo e(__('Cerrar Sesión')); ?></a>

                                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                          <?php echo csrf_field(); ?>
                                          </form>
                                          <?php endif; ?>
                                      </li>
                                    </ul>
                            </div>
      </div>
    </div>
  </div>
</nav>




<nav class="navbar navbar-expand-lg bg-secondary">
  
       
</nav>
   
<?php $__env->startSection('user-content'); ?>

<footer class="footer" style="background: #232f3e !important">
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-ribbon" style="background:#FF4B4B;font-family:arial">
                       
                    </div><!-- End .footer-ribbon -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Contactanos</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Dirección:</span>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Telefono:</span> <a href="tel:">
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Correo:</span> <a href="mailto:pincerolas@gmail.com">
                                    </li>
                                    <li>
                                       <!-- <span class="contact-info-label">Ateanción:</span>
                                        <php echo $config->horario?> -->
                                    </li>
                                </ul>
                                <div class="social-icons">
                                   <!-- <a href="https://www.facebook.com/" class="social-icon ho" target="_blank"><i class="icon-facebook"></i></a> -->
                                    <a href="https://www.instagram.com/pincerolas/" class="social-icon ho" target="_blank"><i class="icon-instagram"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="widget widget-newsletter">
                    
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                    </div><!-- End .col-md-6 -->

                  
                                </div><!-- End .row -->
                            </div><!-- End .widget -->

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Conoce Pincerolas</h4>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="">Envios</a></li>
                                                    <li><a href="">Contactanos</a></li>
                                                    <li><a href="">¿Como usar?</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="">Sobre nosotros</a></li>
                                                    <li><a href="">Polictas y privacidad</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <p class="footer-copyright">  2022.  Todos los derechos reservados.</p>

                   <!-- <img src="<?php echo e(asset('assets/images/payments.png')); ?>" alt="payment methods" class="footer-payments"> -->
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="">Inicio</a></li>
                    <?php if(!auth::check()): ?>
                    <li class="active"><a href="">Iniciar sesión</a></li>
                    <?php endif; ?>
                    <li>
                        <a href="">Categorias</a>
                        <ul>
            
            
                        </ul>
                    </li>
                    <li><a class="item-primary" href="">Productos</a></li>
                    <li><a class="item-primary" href="">Contacto</a></li>
             
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
             
                <a href="https://www.instagram.com/pincerolas/" class="social-icon ho" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

   <!--
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a> -->

    <!-- Plugins JS File -->
          
</body>
</html>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/layouts/inc/frontnavbar.blade.php ENDPATH**/ ?>