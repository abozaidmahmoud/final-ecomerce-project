

 

<?php $__env->startSection('section'); ?>
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									<?php echo e($post->name); ?>

								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										<?php echo e(trans('lang.by')); ?> Deer
										<span class="m-l-3 m-r-6">|</span>
									</span>
									<span>
										<?php echo e($post->created_at); ?>

									</span>

									
								</div>

								<p class="p-b-25">
                                            <?php echo strip_tags($post->body); ?>

							             </p>
							</div>

							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							<?php echo e(trans('lang.cateogeries')); ?>

						</h4>

						<ul>
							
                             <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="p-t-6 p-b-8 bo7">
								<a href="<?php echo e(route('product',['category'=>$category->id])); ?>" class="s-text13 p-t-5 p-b-5">
									<?php echo e($category->name); ?>

								</a>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							<?php echo e(trans('lang.best_products')); ?>

						</h4>

						<ul class="bgwhite">
							<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="flex-w p-b-20">
								<a href="<?php echo e(asset('product/'.$product->id)); ?>" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="<?php echo e(asset('storage/'.$product->imgOne)); ?>" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="<?php echo e(asset('product/'.$product->id)); ?>" class="s-text20">
										<?php echo e($product->ar_name); ?>

									</a>

									<span class="dis-block s-text17 p-t-6">
										$<?php echo e($product->price); ?>

									</span>
								</div>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							

						</ul>

						<!-- Archive -->
						<h4 class="m-text23 p-t-50 p-b-16">
							<?php echo e(trans('lang.archive')); ?>

						</h4>

						

						<!-- Tags -->
						<h4 class="m-text23 p-t-50 p-b-25">
							<?php echo e(trans('lang.tags')); ?>

						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								<?php echo e(trans('lang.fashion')); ?>

							</a>

							<a href="#" class="tag-item">
								<?php echo e(trans('lang.lifestyle')); ?>

							</a> 

							<a href="#" class="tag-item">
								<?php echo e(trans('lang.denim')); ?>

							</a>

							<a href="#" class="tag-item">
								<?php echo e(trans('lang.streetstyle')); ?>

							</a>

							<a href="#" class="tag-item">
								<?php echo e(trans('lang.crafts')); ?>

							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
