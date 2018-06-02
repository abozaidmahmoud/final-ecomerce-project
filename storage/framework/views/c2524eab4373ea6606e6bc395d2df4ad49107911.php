<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    
<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo e(Cart::count()); ?></span>
          </h4>
          <ul class="list-group mb-3">

            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo e($item->name); ?></h6>
                <small class="text-muted">x<?php echo e($item->qty); ?></small>
              </div>
              <span class="text-muted">$<?php echo e($item->qty*$item->price); ?></span>
            </li>
                   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php if(session()->has('coupon')): ?>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small><?php echo e(session()->get('coupon')['name']); ?></small>
              </div>
              <span class="text-success">-$<?php echo e(session()->get('coupon')['discount']); ?></span>
            </li>
          <?php endif; ?>


            <li class="list-group-item d-flex justify-content-between">



              <span>Tax (5%): $<?php echo e(Cart::tax()); ?></span>
              <span>Total (USD)</span>
              <?php 
              $total=(int)str_replace(',','',Cart::total());
              if(session()->has('coupon')){
                $total=$total-session()->get('coupon')['discount'];
                if($total<0){
                  $total=0;
                }


              }

              ?>
              <strong>$<?php echo e($total); ?></strong>
            </li>
          </ul>

         
        </div>
        <div class="col-md-8 order-md-1">


          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="<?php echo e(route('cart.checkout')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


               <div class="mb-3">
              <label for="phone">Phone <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="phone" placeholder="0110011111">
              <div class="invalid-feedback">
                Please enter a valid phone Number for shipping updates.
              </div>
            </div>


           

         

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <input class="custom-select d-block w-100" name="country" required>
                 
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <input class="custom-select d-block w-100" name="state" required>
                 
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
             
            </div>

             <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            


            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
  </div>


   <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Deer-Ecommerce Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="<?php echo e(route('homepage')); ?>">Privacy</a></li>
          <li class="list-inline-item"><a href="<?php echo e(route('product')); ?>">Sohp</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
</body>
</html>



