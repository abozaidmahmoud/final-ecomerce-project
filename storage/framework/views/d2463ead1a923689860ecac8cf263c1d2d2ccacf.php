

<?php $__env->startSection('section'); ?>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                                            <?php if($product->imgOne): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgOne)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex1'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgOne)); ?> alt="IMG-PRODUCT"
                                                   
                                               data-zoom-image=<?php echo e(asset('storage/'.$product->imgOne)); ?>>
                                           </span>
                                                </div>
                                            </div>

                                            <?php endif; ?>



                                            <?php if($product->imgTwo): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgTwo)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex2'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgTwo)); ?> alt="IMG-PRODUCT"  
                                               >
                                           </span>
                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>




                                            <?php if($product->imgThree): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgThree)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex3'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgThree)); ?> alt="IMG-PRODUCT"
                                                   
                                               ></span>
                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>




                                            <?php if($product->imgFour): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgFour)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex4'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgFour)); ?> alt="IMG-PRODUCT"
                                                   
                                               >
                                           </span>
                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>




                                            <?php if($product->imgFive): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgFive)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex5'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgFive)); ?> alt="IMG-PRODUCT"
                                                   ></span>
                                                </div>
                                            </div>
                                            <?php endif; ?>



                                             <?php if($product->imgSix): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgSix)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex6'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgSix)); ?> alt="IMG-PRODUCT">
                                                </span>

                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>


                                            <?php if($product->imgSeven): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgSeven)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex7'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgSeven)); ?> alt="IMG-PRODUCT">
                                                </span>
                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>

                                            <?php if($product->imgEight): ?>

                                            <div class="item-slick3" data-thumb=<?php echo e(asset('storage/'.$product->imgEight)); ?>>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex8'>
                                                    <img  src=<?php echo e(asset('storage/'.$product->imgEight)); ?> alt="IMG-PRODUCT">
                                                </span>

                                                </div>
                                            </div>
                                            
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>


            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                     <?php echo e($product->ar_name); ?>

                </h4>

                <span class="m-text17">

                    $ <?php echo e($product->price); ?>.00

				</span>

                <p class="s-text8 p-t-10">
                    
                    <?php echo e($product->ar_descreption); ?>

                </p>


                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">

                    </div>

                    <div class="flex-m flex-w">

                               
                           
                    </div>

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>
                               
                                 <input class="qty size8 m-text18 t-center num-product" type="number" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                 <form id="buy" method="post" action="<?php echo e(route('cart.index')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                    <input type="hidden" name="name" value="<?php echo e($product->name); ?>">
                                    <input type="hidden" name="price" value="<?php echo e($product->price); ?>">
                                    <input name="qty" class="size8 m-text18 t-center num-product" type="hidden"  value="1">

                                </form>
                                <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        <?php echo e(trans('lang.add_to_cart')); ?>

                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-b-45">
                    <span class="s-text8 m-r-35">SKU: <?php echo e($product->code); ?>

</span>
                    <span class="s-text8"><?php echo e(trans('lang.cateogeries')); ?>:

                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($category->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </span>
                </div>

                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        
                        <?php echo e($product->ar_descreption); ?>

                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                        
                        <?php echo e($product->ar_details); ?>


                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        <?php echo e(trans('lang.additional_information')); ?>

                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8"><!--here you would add additional things-->-></p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        <?php echo e(trans('lang.reviews')); ?> 
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

              <?php if($product->video): ?>
         <div class="container">
            <iframe width="100%" height="500" src="<?php echo e($product->video); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
    <?php endif; ?>
    
    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

            <?php $__currentLoopData = $otherProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="<?php echo e(asset('storage/'.$product->imgOne)); ?>" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        <?php echo e(trans('lang.add_to_cart')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="category/<?php echo e($product->id); ?>" class="block2-name dis-block s-text3 p-b-5">
                                
                                <?php echo e($product->ar_name); ?>

                            </a>

                            <span class="block2-price m-text6 p-r-5">
									<?php echo e($product->price); ?>.00 $
								</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
            </div>
        </div>
    </section>
  <script src=<?php echo e(asset('elevatezoom-master/jquery.elevateZoom-3.0.8.min.js')); ?>></script>
<script>

        $(".image-to-zoom").elevateZoom({
               zoomType  : "inner",
                cursor: "crosshair"
    });

</script>






<?php $__env->stopSection(); ?>