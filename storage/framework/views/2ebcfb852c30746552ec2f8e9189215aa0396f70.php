

<?php $__env->startSection('section'); ?>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2"><?php echo e(trans('lang.product')); ?></th>
                            <th class="column-3"><?php echo e(trans('lang.price')); ?></th>
                            <th class="column-4 p-l-70"><?php echo e(trans('lang.quantity')); ?></th>
                        </tr>
         <?php if(Cart::count()==0): ?>

        <div class="alert alert-primary" role="alert">
          <?php echo e(trans('lang.noitem')); ?>

        </div>

         <?php else: ?>

                                  <?php if(session()->has('sucess_message')): ?>
                                      <div class="alert alert-warning" role="alert">
                                         <?php echo e(session()->get('sucess_message')); ?>

                                     </div>
                                  <?php endif; ?>

                  <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden" data-form="<?php echo e($item->rowId); ?>">

                                    <form id="<?php echo e($item->rowId); ?>" action="<?php echo e(route('cart.delete',$item->rowId)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        </form>
                                      <img src="<?php echo e(asset("storage/".$item->model->imgOne)); ?>" class="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-2"> <?php echo e($item->ar_name); ?></td>
                            <td class="column-3"><?php echo e($item->price); ?></td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="<?php echo e($item->qty); ?>">
                                </div>
                            </td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

                    </table>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                   <?php if(!session()->has('coupon')): ?>
                        <div class="size11 bo4 m-r-10">
                        <form action="<?php echo e(route('cart.coupon')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="<?php echo e(session('lang')=='ar'?'ادخل كود البطاقه':'Enter Coupon Code'); ?>">
                    </div>

                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            <?php echo e(trans('lang.apply_coupon')); ?>

                        </button>
                      </form>

                    </div>
                    <?php endif; ?>
                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                <a href="<?php echo e(asset('cart/destroy')); ?>">
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        <?php echo e(trans('lang.destroy_card')); ?>

                    </button>
                </a> 
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                     <?php echo e(trans('lang.cart_totals')); ?>

                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						<?php echo e(trans('lang.subtotal')); ?>

					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php echo e(Cart::subtotal()); ?>

					</span>
                </div>

              

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">

                    <?php if(session()->has('coupon')): ?>
                    <span class="m-text22 w-size19 w-full-sm">
                        <?php echo e(trans('lang.discount')); ?>:
                    </span>
                      <span class="m-text21 w-size20 w-full-sm">
                        $<?php echo e(session()->get('coupon')['discount']); ?>

                    </span>
                    <?php endif; ?>

                   <span class="m-text22 w-size19 w-full-sm">
                        <?php echo e(trans('lang.tax')); ?> 
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                       (5%) : <?php echo e(Cart::tax()); ?>

                    </span>


					<span class="m-text22 w-size19 w-full-sm">
						<?php echo e(trans('lang.total')); ?>:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php echo e(Cart::total()); ?>

					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        <a class="text-white" href=<?php echo e(route('cart.checkout')); ?>><?php echo e(trans('lang.proceed_to_checkout')); ?></a>
                        
                    </button>
                </div>
            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>