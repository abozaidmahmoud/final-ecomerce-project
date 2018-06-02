
@section('section')
<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						@foreach($posts as $post)
						<div class="item-blog p-b-80">
							<a href="{{asset('blog/'.$post->id)}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="{{asset('storage/'.$post->image)}}" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									{{$post->created_at->format('M j, Y')}}
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="{{asset('blog/'.$post->id)}}" class="m-text24">
										{{$post->title}}
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										{{trans('lang.by')}} Deer
									</span>

								</div>

								<p class="p-b-12">
								{{ str_limit(strip_tags($post->body), 130) }}
								</p>

								         @if (strlen(strip_tags($post->body)) > 130)
              ...                  <a href="{{asset('blog/'.$post->id)}}" class="s-text20">
									{{trans('lang.continue_read')}}
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
								@endif

								
							</div>
						</div>
						@endforeach
					

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
							{{trans('lang.cateogeries')}}
						</h4>

						<ul>
							@foreach($categories as $category)
							<li class="p-t-6 p-b-8 bo6">
								<a href="{{ route('product',['category'=>$category->id]) }}" class="s-text13 p-t-5 p-b-5">
									 {{ $category->name}}
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
										
										{{session('lang')=='ar'?$product->ar_name:$product->name}}
									</a>

									<span class="dis-block s-text17 p-t-6">
										${{$product->price}}
									</span>
								</div>
							</li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
