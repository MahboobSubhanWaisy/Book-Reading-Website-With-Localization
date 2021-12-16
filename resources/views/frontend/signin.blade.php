@extends('frontend/layout')

@section('style') 

@endsection

@section('body')

 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">{{__('title.My Account')}}</h2>
                            <!-- <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('default')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Login</span>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12" style="margin: 0 auto;">
						<div class="my__account__wrapper">
							<h3 class="account__title">{{__('title.LOGIN')}} </h3>
							<form action="{{route('client.login')}}" method="post">
								  {{ csrf_field() }}
								<div class="account__form">
									<div class="input__box">
										<label>{{__('title.Email address')}} <span>*</span></label>
										<input type="email" name="clt_email" value="{{ old('clt_email') }}" required=""  placeholder="{{__('title.Email...')}}">
										@error('clt_email')
                                            <strong>{{ $message }}</strong>
                                        @enderror
									</div>
									<div class="input__box">
										<label>{{__('title.Password')}}<span>*</span></label>
										<input type="password" name="password" required="" placeholder="{{__('title.Password...')}} ">
										@error('password')
                                            <strong>{{ $message }}</strong>
                                        @enderror
									</div>
									<div class="form__btn">
										<button>{{__('title.Login')}}</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>{{__('title.Remember me')}}</span>
										</label>
									</div>
									<a class="forget_pass" href="#">{{__('title.Lost your password?')}}</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->


@endsection



@section('script')

@endsection