<?php if(session('lang')=='ar'): ?>
	<?php echo $__env->make('arabic.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>

<?php $__env->startSection('section'); ?>

<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item-blog p-b-80">
							<a href="<?php echo e(asset('blog/'.$post->id)); ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									<?php echo e($post->created_at->format('M j, Y')); ?>

								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="<?php echo e(asset('blog/'.$post->id)); ?>" class="m-text24">
										<?php echo e($post->title); ?>

									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Deer
									</span>

								</div>

								<p class="p-b-12">
								<?php echo e(str_limit(strip_tags($post->body), 130)); ?>

								</p>

								         <?php if(strlen(strip_tags($post->body)) > 130): ?>
              ...                  <a href="<?php echo e(asset('blog/'.$post->id)); ?>" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
								<?php endif; ?>

								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					

					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						
						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Categories
						</h4>

						<ul>
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="p-t-6 p-b-8 bo6">
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
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $__env->stopSection(); ?>
	<?php endif; ?>
<?php echo $__env->make('Template.indextemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>