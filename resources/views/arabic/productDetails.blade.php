

@section('section')

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                                            @if($product->imgOne)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgOne)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex1'>
                                                    <img  src={{asset('storage/'.$product->imgOne)}} alt="IMG-PRODUCT"
                                                   
                                               data-zoom-image={{asset('storage/'.$product->imgOne)}}>
                                           </span>
                                                </div>
                                            </div>

                                            @endif



                                            @if($product->imgTwo)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgTwo)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex2'>
                                                    <img  src={{asset('storage/'.$product->imgTwo)}} alt="IMG-PRODUCT"  
                                               >
                                           </span>
                                                </div>
                                            </div>
                                            
                                            @endif




                                            @if($product->imgThree)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgThree)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex3'>
                                                    <img  src={{asset('storage/'.$product->imgThree)}} alt="IMG-PRODUCT"
                                                   
                                               ></span>
                                                </div>
                                            </div>
                                            
                                            @endif




                                            @if($product->imgFour)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgFour)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex4'>
                                                    <img  src={{asset('storage/'.$product->imgFour)}} alt="IMG-PRODUCT"
                                                   
                                               >
                                           </span>
                                                </div>
                                            </div>
                                            
                                            @endif




                                            @if($product->imgFive)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgFive)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex5'>
                                                    <img  src={{asset('storage/'.$product->imgFive)}} alt="IMG-PRODUCT"
                                                   ></span>
                                                </div>
                                            </div>
                                            @endif



                                             @if($product->imgSix)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgSix)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex6'>
                                                    <img  src={{asset('storage/'.$product->imgSix)}} alt="IMG-PRODUCT">
                                                </span>

                                                </div>
                                            </div>
                                            
                                            @endif


                                            @if($product->imgSeven)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgSeven)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex7'>
                                                    <img  src={{asset('storage/'.$product->imgSeven)}} alt="IMG-PRODUCT">
                                                </span>
                                                </div>
                                            </div>
                                            
                                            @endif

                                            @if($product->imgEight)

                                            <div class="item-slick3" data-thumb={{asset('storage/'.$product->imgEight)}}>
                                                <div class="wrap-pic-w">
                                                    <span class='zoom' id='ex8'>
                                                    <img  src={{asset('storage/'.$product->imgEight)}} alt="IMG-PRODUCT">
                                                </span>

                                                </div>
                                            </div>
                                            
                                            @endif
                                        </div>
                                    </div>
                                </div>


            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                     {{$product->ar_name}}
                </h4>

                <span class="m-text17">

                    $ {{$product->price}}.00

				</span>

                <p class="s-text8 p-t-10">
                    
                    {{$product->ar_descreption}}
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
                                 <form id="buy" method="post" action="{{route('cart.index')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <input name="qty" class="size8 m-text18 t-center num-product" type="hidden"  value="1">

                                </form>
                                <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        {{trans('lang.add_to_cart')}}
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-b-45">
                    <span class="s-text8 m-r-35">SKU: {{$product->code}}
</span>
                    <span class="s-text8">{{trans('lang.cateogeries')}}:

                        @foreach($category as $category)
                        {{$category->name}}
                            @endforeach


                    </span>
                </div>

                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        
                        {{$product->ar_descreption}}
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                        
                        {{ $product->ar_details}}

                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        {{trans('lang.additional_information')}}
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8"><!--here you would add additional things-->-></p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        {{trans('lang.reviews')}} 
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

              @if($product->video)
         <div class="container">
            <iframe width="100%" height="500" src="{{$product->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
    @endif
    
    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

            @foreach($otherProduct as $product)
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="{{asset('storage/'.$product->imgOne)}}" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        {{trans('lang.add_to_cart')}}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="category/{{$product->id}}" class="block2-name dis-block s-text3 p-b-5">
                                
                                {{ $product->ar_name}}
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									{{$product->price}}.00 $
								</span>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
            </div>
        </div>
    </section>
  <script src={{asset('elevatezoom-master/jquery.elevateZoom-3.0.8.min.js')}}></script>
<script>

        $(".image-to-zoom").elevateZoom({
               zoomType  : "inner",
                cursor: "crosshair"
    });

</script>






@endsection