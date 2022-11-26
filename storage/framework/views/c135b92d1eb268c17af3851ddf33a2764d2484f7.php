
<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <form action="<?php echo e(url('place-order')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Detalles</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nombre</label>
                                <input type="text" required  value="<?php echo e(Auth::user()->name); ?>" class="form-control firstname" name="fname" placeholder="Ingresar Nombre">
                                    <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Apellidos</label>
                                <input type="text" required class="form-control lastname" name="lname" value="<?php echo e(Auth::user()->lname); ?>"   placeholder="Ingresar Apellidos">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" required class="form-control email" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Ingresar Mail">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Número Telefonico</label>
                                <input type="text" required class="form-control phone" name="phone" value="<?php echo e(Auth::user()->phone); ?>" placeholder="Ingresar Número de Telefono">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Dirección 1</label>
                                <input type="text" required class="form-control address1" name="address1" value="<?php echo e(Auth::user()->address1); ?>" placeholder="Ingresar Dirección 1">
                                <span id="address1_error" class="text-danger"></span>
                                </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Dirección 2</label>
                                <input type="text" required class="form-control address2" name="address2" value="<?php echo e(Auth::user()->address2); ?>" placeholder="Ingresar Dirección 2">
                                <span id="address2_error" class="text-danger"></span>   
                         </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Ciudad</label>
                                <input type="text" class="form-control city" name="city" value="<?php echo e(Auth::user()->city); ?>" placeholder="Ingresar Ciudad">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Estado</label>
                                <input type="text" required class="form-control state" name="state" value="<?php echo e(Auth::user()->state); ?>" placeholder="Ingresar Estado">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pais</label>
                                <input type="text" required class="form-control country" name="country" value="<?php echo e(Auth::user()->country); ?>" placeholder="Ingresar Pais">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Codigo Postal</label>
                                <input type="text" required class="form-control pincode" name="pincode" value="<?php echo e(Auth::user()->pincode); ?>" placeholder="Ingresar Condigo Postal">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Detalles de orden</h6>
                        <hr>
                        <?php if($cartitems->count() > 0): ?>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                    <th>
                                        Precio Unitario
                                    </th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php $total = 0; ?>
                                <?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $total += ($item->products->selling_price * $item->prod_qty) ?>
                                    <td>
                                         <?php echo e($item->products->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->prod_qty); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->products->selling_price); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <h6 class="px-2">Total: 
                            <span class="float-end">MXN <?php echo e($total); ?></span></h6>
                        <hr>
                        <button type="submit" class="btn btn-primary w-100">Pagar ya | COD</button>
                        <div id="paypal-button-container"></div>
                      <!--  <button type="button" class="btn btn-primary mt-3 w-100 razorpay_btn">Pagar con RAZOR PAY</button> -->
                        <?php else: ?> <h4 class="text-center">No hay productos</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script src="https://www.paypal.com/sdk/js?client-id=AQb3GHiFCLjGEO6d18cHamvdVIHaCAqrD7eSgjOgUEp_yJBzchdaVNkYqOULcRl2K_x-BwRloPNQkRo6"></script>
 

<script>
    paypal.Buttons({
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units:[{
                    amount: {
                        value: '<?php echo e($total); ?>'
                    }
                }]
            });
        },

    onApprove:function(data,actions){
        return actions.order.capture().then(function(details){
            //alert('Transaction completed by' + details.payer.name.given_name);


            var firstname = $('.firstname').val();
            var lastname = $('.lastname').val();
            var email = $('.email').val();
            var phone = $('.phone').val();
            var address1 = $('.address1').val();
            var address2 = $('.address2').val();
            var city = $('.city').val();
            var state = $('.state').val();
            var country = $('.country').val();
            var pincode = $('.pincode').val();

            $.ajax({
                method: "POST",
                url: "/place-order",
                data: {
                    'fname':firstname,
                    'lname':lastname,
                    'email':email,
                    'phone':phone,
                    'address1':address1,
                    'address2':address2,
                    'city':city,
                    'state':state,
                    'country':country,
                    'pincode':pincode,
                    'payment_mode':"Pago con PayPal",
                    'payment_id':details.id,
                },
                success: function (response){
                    swal(response.status);
                    window.location.href = "/my-orders";
                }

            })
        });
    }
    }).render('#paypal-button-container');
  </script> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\slikm\OneDrive\Escritorio\pincerolas\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>