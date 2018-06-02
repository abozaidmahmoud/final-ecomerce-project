@extends('Template.indextemplate')

@if(session('lang')=='ar')
	@include('arabic.aboutus')
@else
@section('section')


<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src={{asset('storage/'.$desgin->photo)}} alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						{{$desgin->text}}
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							{{$desgin->content1}}
						</p>

						<span class="s-text7">
							- Deer Ecommerce
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@endif