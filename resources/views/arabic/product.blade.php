

@section('section')

    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" 
    <?php
    if($activeCategory->image){
     $link=asset("storage/".$activeCategory->image); 
      $fixedlink=$y=str_replace('\\','/', $link);
}
else{
    $fixedlink="http://localhost/deerecommerce/public/images/banners/banner-2.jpg";
}
     ?>
    style="background-image:url('{{$fixedlink}}'); background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; ">
        <h2 class="l-text2 t-center">
           {{$activeCategory->name}}
        </h2>
        <p class="m-text13 t-center">
              {{ session('lang')=='ar'?$activeCategory->content1_ar:$activeCategory->content1 }}
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            {{trans('lang.cateogeries')}}
                        </h4>

                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="{{route('product')}}" class="s-text13 active1">
                                    {{trans('lang.all')}}
                                </a>
                            </li>

                            @foreach($categories as $category)

                            <li class="p-t-4">
                                <a href="{{route('product',['category'=>$category->id])}}" class="s-text13 active1">
                                    {{$category->name}}
                                </a>
                            </li>

                            @endforeach


                        </ul>


                        <!--Search Block  -->
                        <h4 class="m-text14 p-b-32">
                            {{trans('lang.search')}}
                        </h4>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <form method="get" action={{ route('product') }}>
                                @csrf


                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" required placeholder="{{trans('lang.search_product')}}" >
                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>    
                        </div>

                    </div>
                      
                              <div class="row ml-tiny mt-2 align-items-center">
                            <div class="bo4 col-md-5 mr-2">
                            <input name="from" required class="form-control" placeholder="{{trans('lang.from')}}">
                            </div>
                            <div class="bo4 col-md-5">
                            <input name="to" required class="form-control " placeholder="{{trans('lang.to')}}">
                        

                            </div>
                            </div>

                             <select name="category" class="align-items-center mt-2 col-md-8 form-control">
                                 

                            <option value="all">{{trans('lang.all_products')}}</option>

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                     
                            </form>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

                    <!-- Product -->
                    <div class="row">

                        @foreach($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <div class="small-message color-{{$product->color}}">{{$product->extra_word}}</div>
                                    <img src={{asset('storage/'.$product->imgOne)}} alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button data-form="{{$product->id}}" class="form-btn flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                               {{trans('lang.add_to_cart')}}
                                            </button>
                                      



                                    <form id="{{$product->id}}" hidden method="post" action="{{route('cart.index')}}">
                                    @csrf
                                   <input class="size8 m-text18 t-center num-product" type="number" name="qty" value="1">
                                   <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                </form>




                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="{{asset('product/'.$product->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                       
                                       {{session('lang')=='ar'?$product->ar_name:$product->name}}
                                    </a>

                                 @if($product->price_before)
                                    <span class="block2-oldprice m-text7 p-r-5">
                                        ${{$product->price_before}}
                                    </span>

                                    <span class="block2-newprice m-text8 p-r-5">
                                        ${{$product->price}}
                                    </span>

                                 @else
                                    <span class="block2-price m-text6 p-r-5">
                                       ${{$product->price}}
									</span>
                                    @endif

                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
