

 

@section('section')
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="{{asset('storage/'.$post->image)}}" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									{{$post->name}}
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										{{trans('lang.by')}} Deer
										<span class="m-l-3 m-r-6">|</span>
									</span>
									<span>
										{{$post->created_at}}
									</span>

									
								</div>

								<p class="p-b-25">
                                            {!! strip_tags($post->body) !!}
							             </p>
							</div>

							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							{{trans('lang.cateogeries')}}
						</h4>

						<ul>
							
                             @foreach($categories as $category)
							<li class="p-t-6 p-b-8 bo7">
								<a href="{{ route('product',['category'=>$category->id]) }}" class="s-text13 p-t-5 p-b-5">
									{{$category->name}}
								</a>
							</li>
							@endforeach

						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							{{trans('lang.best_products')}}
						</h4>

						<ul class="bgwhite">
							@foreach($products as $product)
							<li class="flex-w p-b-20">
								<a href="{{asset('product/'.$product->id)}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="{{asset('storage/'.$product->imgOne)}}" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="{{asset('product/'.$product->id)}}" class="s-text20">
										{{$product->ar_name}}
									</a>

									<span class="dis-block s-text17 p-t-6">
										${{$product->price}}
									</span>
								</div>
							</li>
							@endforeach

							

						</ul>

						<!-- Archive -->
						<h4 class="m-text23 p-t-50 p-b-16">
							{{trans('lang.archive')}}
						</h4>

						

						<!-- Tags -->
						<h4 class="m-text23 p-t-50 p-b-25">
							{{trans('lang.tags')}}
						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								{{trans('lang.fashion')}}
							</a>

							<a href="#" class="tag-item">
								{{trans('lang.lifestyle')}}
							</a> 

							<a href="#" class="tag-item">
								{{trans('lang.denim')}}
							</a>

							<a href="#" class="tag-item">
								{{trans('lang.streetstyle')}}
							</a>

							<a href="#" class="tag-item">
								{{trans('lang.crafts')}}
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
