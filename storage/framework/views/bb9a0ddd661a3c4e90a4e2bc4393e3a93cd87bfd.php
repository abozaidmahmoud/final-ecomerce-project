<?php if(session('lang')=='ar'): ?>
	<?php echo $__env->make('arabic.blogdetails', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
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
										By Deer
										<span class="m-l-3 m-r-6">|</span>
									</span>
									<span>
										<?php echo e($post->created_at); ?>

									</span>

									
								</div>

								<p class="p-b-25">
                                            <?php echo $post->body; ?>

							             </p>
							</div>

							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Categories
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
							Featured Products
						</h4>

						<ul class="bgwhite">
							<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="flex-w p-b-20">
								<a href="<?php echo e(asset('product/'.$product->id)); ?>" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="<?php echo e(asset('storage/'.$product->imgOne)); ?>" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="<?php echo e(asset('product/'.$product->id)); ?>" class="s-text20">
										<?php echo e($product->name); ?>

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
							Archive
						</h4>

						

						<!-- Tags -->
						<h4 class="m-text23 p-t-50 p-b-25">
							Tags
						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								Fashion
							</a>

							<a href="#" class="tag-item">
								Lifestyle
							</a>

							<a href="#" class="tag-item">
								Denim
							</a>

							<a href="#" class="tag-item">
								Streetstyle
							</a>

							<a href="#" class="tag-item">
								Crafts
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('Template.indextemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>