
<?php $__env->startSection('section'); ?>

 <?php
       $link=asset("storage/".$banner->photo); 
      $fixedlink=$y=str_replace('\\','/', $link);

     ?>
<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo e($fixedlink); ?>);">
		<h2 class="l-text2 t-center">
			<?php echo e(trans('lang.contact')); ?>

		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="<?php echo e(route('contact')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<h4 class="m-text26 p-b-36 p-t-15">
							<?php echo e(trans('lang.contact')); ?>

						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="الاسم بالكامل">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="رقم الموبيل">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="البريد الالكترونى">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="المحتوى"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
								<?php echo e(trans('lang.send')); ?>

							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>




<?php $__env->stopSection(); ?>