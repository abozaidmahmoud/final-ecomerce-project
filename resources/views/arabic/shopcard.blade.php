

@section('section')

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">{{trans('lang.product')}}</th>
                            <th class="column-3">{{trans('lang.price')}}</th>
                            <th class="column-4 p-l-70">{{trans('lang.quantity')}}</th>
                        </tr>
         @if(Cart::count()==0)

        <div class="alert alert-primary" role="alert">
          {{trans('lang.noitem')}}
        </div>

         @else

                                  @if(session()->has('sucess_message'))
                                      <div class="alert alert-warning" role="alert">
                                         {{session()->get('sucess_message')}}
                                     </div>
                                  @endif

                  @foreach(Cart::content() as $item)
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden" data-form="{{$item->rowId}}">

                                    <form id="{{$item->rowId}}" action="{{ route('cart.delete',$item->rowId)}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        </form>
                                      <img src="{{asset("storage/".$item->model->imgOne)}}" class="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-2"> {{$item->ar_name}}</td>
                            <td class="column-3">{{$item->price}}</td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="{{$item->qty}}">
                                </div>
                            </td>
                        </tr>
                @endforeach
@endif

                    </table>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                   @if(!session()->has('coupon'))
                        <div class="size11 bo4 m-r-10">
                        <form action="{{ route('cart.coupon') }}" method="post">
                            @csrf
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="{{session('lang')=='ar'?'ادخل كود البطاقه':'Enter Coupon Code'}}">
                    </div>

                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            {{trans('lang.apply_coupon')}}
                        </button>
                      </form>

                    </div>
                    @endif
                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                <a href="{{ asset('cart/destroy') }}">
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        {{trans('lang.destroy_card')}}
                    </button>
                </a> 
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                     {{trans('lang.cart_totals')}}
                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						{{trans('lang.subtotal')}}
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						{{Cart::subtotal()}}
					</span>
                </div>

              

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">

                    @if(session()->has('coupon'))
                    <span class="m-text22 w-size19 w-full-sm">
                        {{trans('lang.discount')}}:
                    </span>
                      <span class="m-text21 w-size20 w-full-sm">
                        ${{session()->get('coupon')['discount']}}
                    </span>
                    @endif

                   <span class="m-text22 w-size19 w-full-sm">
                        {{trans('lang.tax')}} 
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                       (5%) : {{Cart::tax()}}
                    </span>


					<span class="m-text22 w-size19 w-full-sm">
						{{trans('lang.total')}}:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						{{Cart::total()}}
					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        <a class="text-white" href={{ route('cart.checkout') }}>{{trans('lang.proceed_to_checkout')}}</a>
                        
                    </button>
                </div>
            </div>
        </div>
    </section>



@endsection