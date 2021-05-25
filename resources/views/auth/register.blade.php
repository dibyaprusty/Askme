@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Registration</h2>
								<p>Have an account?</p>
								<a href="{{ route('login') }}" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><i class="fab fa-facebook"></i></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a>
									</p>
								</div>
			      	</div>

				<form method="POST" action="{{ route('register') }}" class="signin-form">
                    @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Name</label>
			      			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

                        <div class="form-group mb-3">
                            <label class="label" for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="label" for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
		            </div>
									
		        </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
@endsection
